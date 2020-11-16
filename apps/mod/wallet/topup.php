<?php

$jenis = $_POST['topupselec'];
$topup_awal = str_replace(',', '', $_POST['totaleddcc']);
$feeedc = str_replace(',', '', $_POST['feeedc']);
$saldo_final = $topup_awal - $feeedc;

$qu_select_status   = "SELECT * FROM users_edc WHERE users_id='$_SESSION[user_id]'";
$rs_select_status   = mysqli_query($con, $qu_select_status);
$rw_select_status   = mysqli_fetch_array($rs_select_status);
$status_cloudedccash = $rw_select_status['status_cloud_edccash'];
$status_cloudedccb   = $rw_select_status['status_cloud_edccb'];
$tanggal_edccash     =  $rw_select_status['tanggal_cloud_eddcash'];
$tanggal_edccb     =  $rw_select_status['tanggal_cloud_eddcb'];
$tangalhariini = date("Y-m-d");


function contractid()
{
    mt_srand((float)microtime() * 10000);
    $charid = md5(uniqid(rand(), true));
    $c = unpack("C*", $charid);
    $c = implode("", $c);
    $depan = "EDCASH/TOPUP";
    $userid = $_SESSION['user_id'];
    $random = substr($c, 0, 10);
    $kontrak = $depan . '/' . $userid . '/' . $random;

    return $kontrak;
}

$kontrakid = contractid();

if ($jenis == 'voucherbtc') {
    $qutopup = "insert into topup set users_id='$_SESSION[user_id]', jenis_topup='$jenis',id_transaksi='$kontrakid',vouceher_topup='$_POST[novoucher]',jumlah_topup='$_POST[vbtctot]',beforefee_topup='$topup_awal',afterfee_topup='$saldo_final',fee_topup='$feeedc',day_create=now(),create_by='$_SESSION[username]'";
    $status = 'berhasil';
} elseif ($jenis == 'btc') {
    $qutopup = "insert into topup set users_id='$_SESSION[user_id]', jenis_topup='$jenis',id_transaksi='$kontrakid',jumlah_topup='$_POST[btctot]',afterfee_topup='$saldo_final',beforefee_topup='$topup_awal',fee_topup='$feeedc',day_create=now(),create_by='$_SESSION[username]'";

    $status = 'berhasil';
} elseif ($jenis == 'prizm') {
    $qutopup = "insert into topup set users_id='$_SESSION[user_id]', jenis_topup='$jenis',id_transaksi='$kontrakid',jumlah_topup='$_POST[totalprizm]',afterfee_topup='$saldo_final',beforefee_topup='$topup_awal',fee_topup='$feeedc',day_create=now(),create_by='$_SESSION[username]'";
    $status = 'berhasil';
} elseif ($jenis == 'edccb') {

    if ($saldoedccb < $_POST['edccbtot']) {
        $status = 'gagal';
    } else {



        if ($saldo_final >= '225') {


            if ($status_cloudedccash == '0' and $tanggal_edccash >= $tangalhariini) {
                // echo $qu_update_status = "UPDATE users_edc SET status_cloud_edccash=$status_cloud WHERE users_id='$user'";
                $qu_update_status = "UPDATE users_edc SET status_cloud_edccash='1' WHERE users_id='$_SESSION[user_id]'";
                mysqli_query($con, $qu_update_status);
            }
            if ($status_cloudedccb == '0' and $tanggal_edccb >= $tangalhariini) {
                // echo $qu_update_status = "UPDATE users_edc SET status_cloud_edccash=$status_cloud WHERE users_id='$user'";
                $qu_update_status = "UPDATE users_edc SET status_cloud_edccb='1' WHERE users_id='$_SESSION[user_id]'";
                mysqli_query($con, $qu_update_status);
            }
        }



        $upbalance = "update users_edc set saldo_eddcash=saldo_eddcash+'$saldo_final', saldo_eddcblockchain=saldo_eddcblockchain-'$_POST[edccbtot]' where users_id='$_SESSION[user_id]'";
        $status = 'berhasil';

        //history all transaksi keluar masuk
        $saldokeluar = "insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$kontrakid',jenis_saldo='EDCCB',total_saldo='$_POST[edccbtot]',date_transaksi=now(),keterangan='TOPUP EDCCASH'";

        $feesaldokeluar = "insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$kontrakid',jenis_saldo='EDCCASH',total_saldo='$feeedc',date_transaksi=now(),keterangan='Fee Server'";

        $saldomasuk = "insert into history_masuk set users_id='$_SESSION[user_id]',id_transaksi='$kontrakid',jenis_saldo='EDCCASH',total_saldo='$saldo_final',date_transaksi=now(),keterangan='TOPUP EDCCASH'";


        $feemasukserver = "insert into history_masuk set users_id='1807230001',id_transaksi='$kontrakid',jenis_saldo='EDCCASH',total_saldo='$feeedc',date_transaksi=now(),keterangan='Fee Transaksi'";

        $tambahserver = "update users_edc set saldo_eddcash=saldo_eddcash+'$feeedc' where users_id='1807230001'";
        die;
        mysqli_query($con, $upbalance);
        mysqli_query($con, $saldokeluar);
        mysqli_query($con, $feesaldokeluar);
        mysqli_query($con, $saldomasuk);
        mysqli_query($con, $feemasukserver);
        mysqli_query($con, $tambahserver);
    }
};



mysqli_query($con, $qutopup);




?>
<script>
    $(document).ready(function() {

        var status = '<?= $status ?>';
        if (status == 'berhasil') {
            swal('Topup EDCCASH Berhasil ', 'Silahkan upload bukti transfer', 'success');
            setTimeout(function() {
                window.location = 'index-menu-wallet-page-index.html';
            }, 2000);
        } else {
            swal('Topup EDCCASH Gagal ', 'Terimakasih', 'error');
            setTimeout(function() {
                window.location = 'index-menu-wallet-page-index.html';
            }, 2000);
        }
    });
</script>