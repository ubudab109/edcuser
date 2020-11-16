<?php 

    include "../assets/dbconnect.php";

    $email = $_POST['email'];

    $qu_email = "SELECT * FROM users_edc WHERE email_users = '$email'";
    $rs_email = mysqli_query($con, "$qu_email");
    $rw_email = mysqli_num_rows($rs_email);
    
    echo $rw_email;
?>