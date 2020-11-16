<?php

$rupiahbeli = $_POST['beliidr'];
$idpemberi = $_POST['membertujuan'];
$fee = str_replace(',', '', $_POST['feebeli']);

$tobeli = str_replace(',', '', $_POST['totbeli']);
$afterfe = $tobeli - $fee;
$upass = $_POST['password'];

if (hash_equals($dbpas, crypt($upass, $dbpas))) {

    function contractid()
    {
        mt_srand((float)microtime() * 10000);
        $charid = md5(uniqid(rand(), true));
        $c = unpack("C*", $charid);
        $c = implode("", $c);
        $depan = "EDCCASH/BELI";
        $userid = $_SESSION['user_id'];
        $random = substr($c, 0, 10);
        $kontrak = $depan . '/' . $userid . '/' . $random;

        return $kontrak;
    }

    $idtransaksi = contractid();




    $qusend = "insert into beli_edccash set users_id='$_SESSION[user_id]', id_transaksi='$idtransaksi',users_pengirim='$idpemberi',jumlah_rupiah='$rupiahbeli',before_fee='$tobeli',after_fee='$afterfe',fee_transaksi='$fee',date_beli=now(),beli_by='$_SESSION[username]' ";






    mysqli_query($con, $qusend);
} else {

    $status = 'gagal';
}
?>

<script>
    $(document).ready(function() {
        swal('Beli EDCASH berhasil di buat', 'Silahkan Tunggu Approval Penjual', 'success');
        setTimeout(function() {
            window.location = 'index-menu-wallet-page-index.html';
        }, 2000);
    });
    // Prompt
</script>