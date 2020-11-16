<?php
    include "../assets/dbconnect.php";

    $voucher = $_POST['voucher'];

    $qu_voucher = "SELECT * FROM gen_voucher WHERE kode_voucher = '$voucher'";
    $rs_voucher = mysqli_query($con, "$qu_voucher");
    $rw_voucher = mysqli_fetch_array($rs_voucher);

    // var_dump($rw_voucher['register_used']);
    if (!empty($rw_voucher)) {
        if ($rw_voucher['used_voucher'] == 0 && $rw_voucher['register_used'] == 0) {
            $kode = 0;
        } else if ($rw_voucher['used_voucher'] == 1 || $rw_voucher['register_used'] == 1) {
            $kode = 1;
        }
    } else {
        $kode = 2;
    }


    echo $kode;
?>
