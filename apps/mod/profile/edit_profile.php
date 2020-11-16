<?php 

    include "../assets/dbconnect.php";
    $user_id = $_SESSION['user_id'];

    $email              = $_POST['email'];
    $username           = $_POST['username'];
    $nama_lengkap       = $_POST['nama_lengkap'];
    $no_ktp             = $_POST['no_ktp'];
    $tanggal            = $_POST['tanggal'];
    $bulan              = $_POST['bulan'];
    $tahun              = $_POST['tahun'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $alamat             = $_POST['alamat'];
    $no_hp              = $_POST['no_hp'];
    $nama_bank          = $_POST['nama_bank'];
    $cabang_bank        = $_POST['cabang_bank'];
    $pemilik_rekening   = $_POST['pemilik_rekening'];
    $nomor_rekening     = $_POST['nomor_rekening'];
    $swift_code         = $_POST['swift_code'];
    $tanggal_lahir      = date_create("$tahun/$bulan/$tanggal");
    $tgl_lahir          = date_format($tanggal_lahir, "Y/m/d");


     $qu_user = "UPDATE users_edc SET email='$email', username='$username', nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code' WHERE users_id='$user_id'";
    // mysqli_query($con, $qu_user);

?>