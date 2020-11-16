<?php
    include "../assets/dbconnect.php";
    $idUser       = $_POST['user_id'];

    $quTransaksi = "SELECT * FROM tx_transaction WHERE user_id = '$idUser'";
    $rsTransaksi = mysqli_query($con, "$quTransaksi");
    $rwTransaksi = mysqli_fetch_array($rsTransaksi);

    $userId      = $rwTransaksi['user_id'];

    if(!empty($userId)){
      $kode = 0;
    }else{
      $kode = 1;
    }

    echo $kode;

  ?>
