<?php
    include "../assets/dbconnect.php";
    $idUser       = $_POST['user_id'];
    $idTransaksi  = $_POST['txid'];
    $quTransaksi = "SELECT * FROM tx_transaction WHERE user_id = '$idUser' AND txid ='$idTransaksi'";
    $rsTransaksi = mysqli_query($con, "$quTransaksi");
    $rwTransaksi = mysqli_fetch_array($rsTransaksi);

    $transaksiId      = $rwTransaksi['txid'];
    $tanggalTransaksi = $rwTransaksi['date_tx'];
    $usedStatus       = $rwTransaksi['used_status'];

    $date         = date_create($tanggalTransaksi); //ini tanggal transaksi dari table
    $convertDate = date_format($date,'Y/m/d'); //tanggal transaksi dari table di convert menjadi tahun bulan tanggal
    $dateNow      = date('Y/m/d'); //ini tanggal sekarang dengan format tahun bulan tanggal

    $converTimeTanggalTransaksi = strtotime($convertDate); //tanggal transaksi dari table di convert menjadi string to time`
    $converTimeDateNow = strtotime($dateNow); //tanggal sekarang di conver menjadi string to time
    $diff = $converTimeTanggalTransaksi - $converTimeDateNow;
    $countDate = abs(floor($diff / (60 * 60 * 24)));

    if(!empty($transaksiId)){
      if($usedStatus == 1){
        $kode = 0;
      }else{
        if($countDate > 3){
          $kode = 1;
        }
        else{
          $kode = 2;
        }
      }

    }else{
      $kode = 3;
    }

    echo $kode;

  ?>
