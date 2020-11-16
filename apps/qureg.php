<?php
    include('../asset/dbconnect.php');
    $reff=$_POST['sponsor'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password1'];

    echo $qureg="insert into users_edc set reff_id='$reff',username='$username',password='$password',email_users='$email'";

    mysqli_query($con,$qureg);



?>