<?php
session_start();
include "../assets/dbconnect.php";


$userId       = $_POST['user_id'];
$quUser       = "SELECT * FROM users_edc WHERE users_id = '$userId'";
$rsUser       = mysqli_query($con, $quUser);
$rwUser       = mysqli_fetch_array($rsUser);

$namaLengkap   = $rwUser['nama_lengkap'];
$noKtp         = $rwUser['no_ktp'];
$tanggalLahir  = $rwUser['tanggal_lahir'];
$jenisKelamin  = $rwUser['jenis_kelamin'];
$alamat        = $rwUser['alamat'];
$noHp          = $rwUser['no_hp'];
$namaBank      = $rwUser['nama_bank'];
$cabangBank    = $rwUser['cabang_bank'];
$pemilikRek    = $rwUser['pemilik_rekening'];
$noRekening    = $rwUser['nomor_rekening'];
$saldoEdccash  = $rwUser['saldo_eddcash'];


$quSettingRate = "SELECT * FROM setting_rate WHERE jenis_aset = 'edccb'";
$rsSettingRate = mysqli_query($con, $quSettingRate);
$rwSettingRate = mysqli_fetch_array($rsSettingRate);


$saldoAkhirEdccash = $saldoEdccash * 1000;

//
// var_dump($saldoEdccb);
// var_dump($kalkulasiEdccb);
// var_dump($saldoAkhirEdccb);

$selectTutupAkun = "SELECT * FROM tutup_akun_users WHERE users_id = '$userId'";
$tutupAkunQuery  = mysqli_query($con, $selectTutupAkun);
$fetchAkun       = mysqli_fetch_array($tutupAkunQuery);

$users_id       = $fetchAkun['users_id'];

if(!empty($users_id)){
  $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Anda telah melakukan permintaan penutupan akun sebelumnya. Mohon untuk tunggu konfirmasi dari Admin</div>';
  echo '<script>window.location="index-menu-profile-page-index.html";</script>';


}
else{
  $quTutupAkun = "INSERT INTO tutup_akun_users (users_id,nama_lengkap, no_ktp, tanggal_lahir, jenis_kelamin, alamat, no_hp, nama_bank, cabang_bank, pemilik_rekening, nomor_rekening, saldo_eddcash, saldo_kalkulasi_edccash)";
  $quTutupAkun .= "VALUES ('$userId', '$namaLengkap', '$noKtp', '$tanggalLahir', '$jenisKelamin', '$alamat', '$noHp', '$namaBank', '$cabangBank', '$pemilikRek', '$noRekening',  '$saldoEdccash','$saldoAkhirEdccash')";
  mysqli_query($con, $quTutupAkun);
  $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Permintaan Anda berhasil dan sedang diproses Admin</div>';
  echo '<script>window.location="index-menu-profile-page-index.html";</script>';


}




// $saldoAkhirEdccb =  $saldoEdccb *


?>
