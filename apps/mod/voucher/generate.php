<?php



include('mod/voucher/class.coupon.php');

$jenis=$_POST['typevoucer'];
$balance=$_POST['edccashvoucer'];
function contractid(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
			$depan="EDCCASH/GENVOUCHER";
			$userid=$_SESSION['user_id'];
			$random=substr($c,0,10);
			$kontrak=$depan.'/'.$userid.'/'.$random;

            return $kontrak;
    }
// die;
$quCek = "SELECT kode_voucher FROM gen_voucher WHERE kode_voucher = '$voucher'";
$cek = mysqli_query($con,$quCek);
$arr = mysqli_fetch_array($cek);
$result = $arr['kode_voucher'];

$kontrakid=contractid();
if($jenis=='referral'){
    if($saldoreff<$balance){  $status='gagal';} else {
    $voucher= coupon::generate('VOCREF-');
    $qukurangsaldo="update users_edc set saldo_referral=saldo_referral-'$balance' where users_id='$_SESSION[user_id]'  ";

    $quvoucer="insert into gen_voucher set id_transaksi='$kontrakid',kode_voucher='$voucher',users_id='$_SESSION[user_id]',balance_voucer='$balance',generate_date=now(),create_by='$_SESSION[username]'";
         $status='berhasil';
    }
} else {
 if($saldomaksedcc<$balance){  $status='gagal';} else {
  $voucher= coupon::generate('EDCCASH-');
     $qukurangsaldo="update  users_edc set saldo_eddcash=saldo_eddcash-'$balance' where users_id='$_SESSION[user_id]'  ";
     $quvoucer="insert into gen_voucher set id_transaksi='$kontrakid',kode_voucher='$voucher',users_id='$_SESSION[user_id]',balance_voucer='$balance',generate_date=now(),create_by='$_SESSION[username]'";
     $status='berhasil';
     // var_dump($voucher);

 }
}


$cekVoucer = mysqli_query($con,$quvoucer);
if($cekVoucer == false){
  $status = 'gagal';
}
else{
  // $yu = true;
  mysqli_query($con,$qukurangsaldo);

}


?>
<script> $(document).ready(function() {

        var status='<?=$status?>';
        if(status=='berhasil'){
        swal('Create Voucher Berhasil ', 'Terimakasih', 'success');
          setTimeout(function () {  window.location='index-menu-voucher-page-index.html'; }, 2000);

        }else if(status== 'gagal'){
          swal('Terjadi Kesalahan', 'Silahkan Generate Kembali', 'error');
            setTimeout(function () {  window.location='index-menu-voucher-page-index.html'; }, 2000);
        }
        else {
        swal('Create Voucher  Gagal ', 'Voucher Sudah digunakan atau tidak valid', 'error');
            setTimeout(function () {  window.location='index-menu-voucher-page-index.html'; }, 2000);
        }
    });

</script>
