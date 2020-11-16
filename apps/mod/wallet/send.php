<?php

$saldokirim=str_replace( ',', '', $_POST['totaleddcc'] );
$address=$_POST['address'];
$afterfe=str_replace( ',', '', $_POST['totsend'] );
$fee=str_replace( ',', '', $_POST['feesend'] );
$userid=$_SESSION['user_id'];
$upass= $_POST['password'];


if (hash_equals($dbpas, crypt($upass, $dbpas))) {


function contractid(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
			$depan="EDCCB/SEND";
			$userid=$_SESSION['user_id'];
			$random=substr($c,0,10);
			$kontrak=$depan.'/'.$userid.'/'.$random;

            return $kontrak;
    }

$idtransaksi=contractid();


if($saldoedccb>=$saldokirim){
    
  $sqluser = "select * from users_edc where addres_edccblockchain = '$address' limit 1";
  $resultuser = mysqli_query($con,$sqluser);
  $rowuser = mysqli_fetch_assoc($resultuser);
$idpenerima=$rowuser['users_id'];
$t=time();
 $randoms = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 30)), 0, 30);
  $random = "internal".$randoms.$t;
    
    //cekinternal send
    if(!empty($rowuser)){
    
        $qusend="insert into tx_transaction set user_id='$userid', address='$address',txid='$random',balance='$saldokirim',status='send',date_tx=now()";
        $qukurangsaldo="update users_edc set saldo_eddcblockchain=saldo_eddcblockchain-$saldokirim where users_id='$_SESSION[user_id]'";
        $tambahusers="update users_edc set saldo_eddcblockchain=saldo_eddcblockchain+'$afterfe' where users_id='$idpenerima'";
        
        
        $feemasukserver="insert into history_masuk set users_id='1807230001',id_transaksi='$random',jenis_saldo='EDCCB',total_saldo='$fee',date_transaksi=now(),keterangan='Fee Transaksi'";
        $tambahserver="update users_edc set saldo_eddcblockchain=saldo_eddcblockchain+'$fee' where users_id='1807230001'";
        
        $saldomasuk="insert into history_masuk set users_id='$idpenerima',id_transaksi='$random',jenis_saldo='EDCCB',total_saldo='$afterfe',date_transaksi=now(),keterangan='Diterima dari $_SESSION[user_id]'";
        
        mysqli_query($con,$qusend);
        mysqli_query($con,$qukurangsaldo);
        mysqli_query($con,$tambahusers);
        mysqli_query($con,$feemasukserver);
        mysqli_query($con,$tambahserver);
        mysqli_query($con,$saldomasuk);
        $status='berhasil';
    }else {
       //transaction using chain
    $edccash = new Coinrpc('PeTVZ','OdAsW2PQgr1Dn1H','139.162.17.175','48210');
        
       
     $chainsend=floatval($afterfe);
    // echo $afterfee;
    $edccash->sendtoaddress($address,$chainsend);
    if($edccash->response['error']['message']){
        $errorchain=$edccash->response['error']['message'];
        
      
     $status='error';
    }else{
      $txid = $edccash->response['result'];
      // echo edccash->response['error']['message'];
      //insert sender
      $qusend="insert into tx_transaction set user_id='$userid', address='$address',txid='$txid',balance='$saldokirim',status='send',date_tx=now()";
      $qukurangsaldo="update users_edc set saldo_eddcblockchain=saldo_eddcblockchain-$saldokirim where users_id='$_SESSION[user_id]'";
     
        mysqli_query($con,$qusend);
        mysqli_query($con,$qukurangsaldo);
         $status='berhasil';
    } 
        
        
        
    }
} else 
{ 
    
  echo  $status='gagal';
    
    echo $saldoedccb;
    
    }

}else {
   $status='gagal';  
}
?>
<script> $(document).ready(function() { 
        
        var status='<?=$status?>';
        if(status=='berhasil'){
        swal('Kirim EDCCB Berhasil ', 'Terimakasih', 'success');
            setTimeout(function () {  window.location='index-menu-wallet-page-index.html'; }, 2000); 
        } else if(status=='gagal'){
        swal('Kirim EDCCB Gagal ', 'Error', 'error');  
             setTimeout(function () {  window.location='index-menu-wallet-page-index.html'; }, 2000); 
        }else if(status=='error'){
        swal('Kirim EDCCB Gagal ', 'Error Harap Hubungi admin', 'error');  
             setTimeout(function () {  window.location='index-menu-wallet-page-index.html'; }, 2000); 
        }
    });

</script>
