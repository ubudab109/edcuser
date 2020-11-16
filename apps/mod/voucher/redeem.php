<?php


 $kodedepan=substr($_POST['voucherkode'], 0, 7);

if($kodedepan=='EDCCASH'){
   


$qucekvoc="SELECT * FROM gen_voucher WHERE kode_voucher='$_POST[voucherkode]'";
$rsvoc=mysqli_query($con,$qucekvoc);
$rwvoc=mysqli_fetch_array($rsvoc);

 $statusvoc=$rwvoc['used_voucher'];
$balance=$rwvoc['balance_voucer']-0.005;
if($statusvoc=='0'){
    $redemupdate="update  users_edc set saldo_eddcash=saldo_eddcash+'$balance' where users_id='$_SESSION[user_id]' ";
    
    mysqli_query($con,$redemupdate);
    
    $updatevoc="update gen_voucher set used_voucher='1',penguna_voucer='$_SESSION[user_id]',used_date=now(),used_by='$_SESSION[username]' where kode_voucher='$_POST[voucherkode]'";
    
    mysqli_query($con,$updatevoc);
     $status='berhasil';
} else {
   $status='gagal';
}

}else {
     $status='gagal';
       

}

?>
<script> $(document).ready(function() { 
        
        var status='<?=$status?>';
        if(status=='berhasil'){
        swal('Reedem Voucher Berhasil ', 'Terimakasih', 'success');
          setTimeout(function () {  window.location='index-menu-voucher-page-index.html'; }, 2000); 
        } else {
        swal('Reedem Voucher  Gagal ', 'Voucher Sudah digunakan atau tidak valid', 'error');  
          setTimeout(function () {  window.location='index-menu-voucher-page-index.html'; }, 2000); 
        }
    });

</script>