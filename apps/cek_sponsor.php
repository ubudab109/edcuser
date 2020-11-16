<?php
    include "../assets/dbconnect.php";

    $reff       = $_POST['sponsor'];


    $qu_reff       = "SELECT * FROM users_edc WHERE username='$reff'";
    $rs_reff       = mysqli_query($con, $qu_reff);
    $rw_reff       = mysqli_num_rows($rs_reff);

    echo $rw_reff;
?>