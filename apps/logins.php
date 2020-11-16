<?php
session_start();
include_once '../assets/dbconnect.php';

if(isset($_SESSION['user'])!="")
{

}
if(empty($_POST['email']) || empty($_POST['password'])){
  $_POST['password'];
}

if(isset($_POST['btn-login']))
{
$email = mysqli_real_escape_string($con,$_POST['email']);
$upass = mysqli_real_escape_string($con,$_POST['password']);
$qulog="SELECT * FROM users_edc WHERE email_users='$email'";

$res=mysqli_query($con,"$qulog");
$row=mysqli_fetch_array($res);
$dbpas=$row['password'];


if (hash_equals($dbpas, crypt($upass, $dbpas))) {


  if($row['verify_email_status'] == 0){
  //  header("Location: email.php?e=".$row['email_user']."&n=".$row['nama']."&c=".$row['verify_code']);
    echo"<script>window.location.href = 'login.php'; alert('Email belum diverifikasi')</script>";

  } else {
    if($row['kyc_status'] == 0){

      $id = $row['users_id'];
      $qu_pembayaran  = "SELECT * FROM pembayaran_register WHERE users_id=$id";
      $rs_pembayaran  = mysqli_query($con, $qu_pembayaran);
      $pembayaran     = mysqli_num_rows($rs_pembayaran);

      $_SESSION['kyc'] = $row['kyc_status'];

      if (empty($pembayaran)) {

        $_SESSION['user_id'] = $row['users_id'];
        // $_SESSION['status'] = "login";


        header("Location: register.php?e=".$row['email_user']."&n=".$row['nama']."&c=".$row['verify_code']);

      } else {

        $_SESSION['user_id'] = $row['users_id'];
        $_SESSION['status'] = "login";

        header("Location: detail_register.php");

      }

    }else{

      $_SESSION['user_id'] = $row['users_id'];
      $_SESSION['reff_id'] = $row['reff_id'];
      $_SESSION['email_user'] = $row['email'];
      $_SESSION['nama'] = $row['nama_lengkap'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['kyc'] = $row['kyc_status'];
      $_SESSION['loggedIn'] = true;

      header("Location:index.php");

    }

    }
  } else {

   echo"<script>window.location.href = 'login.php'; alert('Email & Password Wrong')</script>";

  }

}else{

  echo"<script>window.location.href = 'login.php'; alert('Spammer Detected')</script>";

}

?>
