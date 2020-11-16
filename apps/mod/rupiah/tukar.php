<?php


$tukarrupiah=$_POST['saldorupiah'];
$fee=str_replace( ',', '', $_POST['feetukar'] );
$balance=str_replace( ',', '', $_POST['edcblockchain'] )-$fee;
$beforefee=str_replace( ',', '', $_POST['edcblockchain'] );
$upass= $_POST['password'];

if (hash_equals($dbpas, crypt($upass, $dbpas))) {
function contractid(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
			$depan="EDCCASH/RUPIAH";
			$userid=$_SESSION['user_id'];
			$random=substr($c,0,10);
			$kontrak=$depan.'/'.$userid.'/'.$random;

            return $kontrak;
    }
$kontrakid=contractid();
if($saldo_rupiah<$tukarrupiah){
    
   $status='gagal';
}else {
    
    $tukar="update  users_edc set saldo_eddcblockchain=saldo_eddcblockchain+'$balance',saldo_rupiah=saldo_rupiah-'$tukarrupiah' where users_id='$_SESSION[user_id]'";
    mysqli_query($con,$tukar);
    
    $quinsert="insert into tukar_rupiah set users_id='$_SESSION[user_id]',id_transaksi='$kontrakid',rupiah_tukar='$tukarrupiah',edccblochain='$beforefee',fee_edccb='$fee',date_tukar=now(),tukar_by='$_SESSION[username]'";
    
    mysqli_query($con,$quinsert);
    $status='berhasil';
}

} else {

$status='gagal';
    
}

?>
<script> $(document).ready(function() { 
        
        var status='<?=$status?>';
        if(status=='berhasil'){
        swal('Tukar rupiah berhasil ', 'Terimakasih', 'success');
           setTimeout(function () {  window.location='index-menu-rupiah-page-index.html'; }, 2000); 
             
        } else {
        swal('Tukar rupiah Gagal ', 'Periksa saldo anda', 'error');  
           setTimeout(function () {  window.location='index-menu-rupiah-page-index.html'; }, 2000); 
        }
    });

</script>