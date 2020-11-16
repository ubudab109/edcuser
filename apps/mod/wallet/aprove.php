<?php
$quaprove = "select * from beli_edccash where autono='$_POST[transbeli]'";
$rsap = mysqli_query($con, $quaprove);
$rwap = mysqli_fetch_array($rsap);

$balancekurang = $rwap['before_fee'] + $rwap['fee_transaksi'];
$balancetambah = $rwap['after_fee'];
$idbeli = $rwap['users_id'];
$idpengirim = $rwap['users_pengirim'];
$idtransaksi = $rwap['id_transaksi'];
$fee2server = $rwap['fee_transaksi'] * 2;

$approval = $_POST["approveJual"];

if ($saldomaksedcc <= $balancekurang) {
   echo   $status = 'gagal';
} else {

   if ($approval == "Approve Jual") {
      $upbeli = "update beli_edccash set status='Approve Jual',approve_by='$_SESSION[username]' where autono='$_POST[transbeli]'";
      $uptambah = "update users_edc set saldo_eddcash=saldo_eddcash+'$balancekurang' where users_id='1807230001'";
      $upkurang = "update users_edc set saldo_eddcash=saldo_eddcash-'$balancekurang' where users_id='$idpengirim'";

      mysqli_query($con, $uptambah);
      mysqli_query($con, $upkurang);
      mysqli_query($con, $upbeli);


      $saldokeluar = "insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$rwap[before_fee]',date_transaksi=now(),keterangan='Kirim Ke $idbeli'";
      $feesaldokeluar = "insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$rwap[fee_transaksi]',date_transaksi=now(),keterangan='Fee Server'";

      // $saldomasuk = "insert into history_masuk set users_id='$idbeli',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$balancetambah',date_transaksi=now(),keterangan='Diterima dari $_SESSION[user_id]'";
      // $feesaldomasuk = "insert into history_keluar set users_id='$idbeli',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$rwap[fee_transaksi]',date_transaksi=now(),keterangan='Fee Server'";
      $feemasukserver = "insert into history_masuk set users_id='1807230001',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$fee2server',date_transaksi=now(),keterangan='Fee Server'";

      // $tambahserver = "update users_edc set saldo_eddcash=saldo_eddcash+'$fee2server' where users_id='1807230001'";

      mysqli_query($con, $saldokeluar);
      mysqli_query($con, $feesaldokeluar);
      // mysqli_query($con, $saldomasuk);
      // mysqli_query($con, $feesaldomasuk);

      mysqli_query($con, $feemasukserver);
      // mysqli_query($con, $tambahserver);

      echo   $status = 'berhasil';
   } else {
      $upbeli = "update beli_edccash set status='Declined',approve_by='$_SESSION[username]' where autono='$_POST[transbeli]'";
      mysqli_query($con, $upbeli);

      echo $status = 'ditolak';
   }
}



?>
<script>
   $(document).ready(function() {

      var status = '<?= $status ?>';
      if (status == 'berhasil') {
         swal('Jual EDCCASH Berhasil ', 'Terimakasih', 'success');
         setTimeout(function() {
            window.location = 'index-menu-wallet-page-index.html';
         }, 2000);
      } else if (status == 'ditolak') {
         swal('Pembelian Ditolak ', 'Terimakasih', 'error');
         setTimeout(function() {
            window.location = 'index-menu-wallet-page-index.html';
         }, 2000);
      } else {
         swal('Jual EDCCASH Gagal ', 'Terimakasih', 'error');
         setTimeout(function() {
            window.location = 'index-menu-wallet-page-index.html';
         }, 2000);
      }
   });
</script>