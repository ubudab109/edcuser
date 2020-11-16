<?php 
    include "../assets/dbconnect.php";

    $username = $_POST['username'];

    $qu_user = "SELECT * FROM users_edc WHERE username = '$username'";
    $rs_user = mysqli_query($con, "$qu_user");
    $rw_user = mysqli_num_rows($rs_user);

    echo $rw_user;
?>