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

$otp=rand(100000,900000);
 $quemail="select * from users_edc where users_id='$_POST[data]'";
     $rsmail=mysqli_query($con,$quemail);
     $rwmail=mysqli_fetch_assoc($rsmail);

 $email=$rwmail['email_users'];

$update_otp="update users_edc set otp='$otp' where users_id='$_POST[data]'";
mysqli_query($con,$update_otp);
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
               $mail->Subject = 'OTP';
               $mail->Body    = "<h3>Kode OTP anda $otp</h3>";

               $mail->send();
               echo 'Message has been sent';

            } catch (Exception $e) {

               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            }
     


?>