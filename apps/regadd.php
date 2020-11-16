<?php
session_start();
include('../assets/dbconnect.php');

// PHPMailer
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('../assets/PHPMailer/src/PHPMailer.php');
include('../assets/PHPMailer/src/Exception.php');
include('../assets/PHPMailer/src/SMTP.php');


$reff       = $_POST['sponsor'];
 $email      = $_POST['email'];
$username   = $_POST['username'];
$pass       = $_POST['password1'];
$pass2      = $_POST['password2']; 


$qu_reff       = "SELECT * FROM users_edc WHERE username='$reff'";
$rs_reff       = mysqli_query($con, $qu_reff);
$rw_reff       = mysqli_num_rows($rs_reff);

// MELAKUKAN PENGECEKAN APAKAH REFF TERDAFTAR ATAU TIDAK !
if (empty($rw_reff)) {
   
   $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">User sponsor yang kamu masukan belum terdaftar.</div>';
   header("location:register1.php");
   
} else {

   // MELAKUKAN PENGECEKAN EMAIL APAKAH SUDAH ADA ATAU BELUM
   $qu_email = "SELECT * FROM users_edc WHERE email_users = '$email'";
   $rs_email = mysqli_query($con, "$qu_email");
   $rw_email = mysqli_fetch_array($rs_email);

   if (!empty($rw_email['email_users'])) {

      $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Email sudah digunakan, silahkan menggunakan email yang lain lagi.</div>';
  
      // header("location:register1.php");

   } else {

      $qu_user = "SELECT * FROM users_edc WHERE username = '$username'";
      $rs_user = mysqli_query($con, "$qu_user");
      $rw_user = mysqli_fetch_array($rs_user);

      // MELAKUKAN PENGECEKAN APAKAH USERNAME SUDAH TERDAFTAR ATAU BELUM
      if (!empty($rw_user['username'])) {

         $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Username sudah digunakan, harap menggunakan yang lain lagi.</div>';

         // header("location:register1.php");

      } else {

         // MELAKUKAN PENGECEKAN APAKAH PASSWORD PERTAMA SAMA DENGAN PASSWORD KEDUA
         if ($pass !== $pass2) {

            $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Password tidak sama.</div>';
            // header("location:register1.php");

         } else {

            $qu_sponsor = "SELECT * FROM users_edc WHERE username='$reff'";
            $rs_sponsor = mysqli_query($con, $qu_sponsor);
            $rw_sponsor = mysqli_fetch_array($rs_sponsor);
            $reff = $rw_sponsor['users_id'];

            $password=crypt($pass);
            $dbpas='$1$S.MhAxBD$rw6174JKTiHjnF20C/h1u1';
         
            if (hash_equals($dbpas, crypt($pass, $dbpas))) {
               echo "Password verified!";
            }



            // VERIFY EMAIL STATUS
            $verify_email=md5($email);


             $qureg="insert into users_edc set reff_id='$reff',username='$username',password='$password',email_users='$email', verify_code='$verify_email', date_register=now()";
            mysqli_query($con,$qureg);



            // TANGKAP INFO REGISTER
            $id            = mysqli_insert_id($con);
            $qu_select     = "SELECT * FROM users_edc WHERE users_id=$id";
            $rs_select     = mysqli_query($con, $qu_select);
            $rw_select     = mysqli_fetch_array($rs_select);
            
            $nama_user     = $rw_select['nama_lengkap'];
            $email_user    = $rw_select['email_users'];










            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
               //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
               //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
               $mail->isSMTP();                                            // Send using SMTP
               $mail->Host       = 'smtp.mandrillapp.com';                    // Set the SMTP server to send through
               $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
               $mail->Username   = 'Edccash2020';                     // SMTP username
               $mail->Password   = 'biWftGL-dK9LYf5M4HesLQ';                               // SMTP password
               $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
               $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

               //Recipients 
               $mail->setFrom('automail@edccash.cash', 'EDCCASH');
               //  $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
               $mail->addAddress("$email");               // Name is optional


               // Content
               $mail->isHTML(true);                                  // Set email format to HTML
               $mail->Subject = 'Verifikasi email';
               $mail->Body    = "<h3>Selamat bergabung di EDC Cash silahkan verifikasi email dengan klik <a href='https://edccash.com/apps/verify.php?verify_email=$verify_email'>Verifikasi</a></h3>";

               $mail->send();
               echo 'Message has been sent';

            } catch (Exception $e) {

               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            }


           // $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Berhasil melakukan register, silahkan cek email.</div>';

          //  header("location:login.php");
         }

      }

   }


}



?>

 <script>window.location="login.php"; alert('Berhasil melakukan register, silahkan cek email.')</script> 

