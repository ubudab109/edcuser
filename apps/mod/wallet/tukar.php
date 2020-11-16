<?php
function contractid(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
			$depan="EDCCASH/TUKAR";
			$userid=$_SESSION['user_id'];
			$random=substr($c,0,10);
			$kontrak=$depan.'/'.$userid.'/'.$random;

            return $kontrak;
    } 

$id_transaksi=contractid();
$jenissaldo=$_POST['tukarmining'];
$saldo_tukar=$_POST['saldotukar'];
$feeser=$saldo_tukar*0.00005;
        $feeinf=$saldo_tukar*0.0005;
        $totalfee=$feeser+$feeinf;
        $afterfee=$saldo_tukar-$totalfee;
 

if($jenissaldo=='edccash'){ 
    if($saldominingedccash>=$saldo_tukar){
        
   $qusaldo="update users_edc set saldo_eddcash=saldo_eddcash+$afterfee,saldo_minig_edccash=saldo_minig_edccash-$saldo_tukar where users_id ='$_SESSION[user_id]'";
   $status='berhasil';
        $qutukar="insert into tukar_mining set id_transaksi='$id_transaksi',fee_transaksi='$totalfee',users_id='$_SESSION[user_id]',jenis_aset='$jenissaldo',jumlah_aset='$saldo_tukar',date_tukar=now(),tukar_by='$_SESSION[username]'";
        
        $feserver="update users_edc set saldo_eddcash=saldo_eddcash+'$feeser' where users_id='1807230001'";
        $feinfak="update users_edc set saldo_eddcash=saldo_eddcash+'$feeinf' where users_id='1808110020'";
        
         $feemasukserver="insert into history_masuk set users_id='1807230001',id_transaksi='$id_transaksi',jenis_saldo='EDCCASH',total_saldo='$feeser',date_transaksi=now(),keterangan='Fee Tukar Saldo'";
         $feemasukinfak="insert into history_masuk set users_id='1808110020',id_transaksi='$id_transaksi',jenis_saldo='EDCCASH',total_saldo='$feeser',date_transaksi=now(),keterangan='Fee Tukar Saldo'";
         
         $saldomasuk="insert into history_masuk set users_id='$_SESSION[user_id]',id_transaksi='$id_transaksi',jenis_saldo='EDCCASH',total_saldo='$afterfee',date_transaksi=now(),keterangan='Tukar Mining ke Saldo";
    } else {
        $status='gagal';
    } 
} elseif($jenissaldo=='edccb') {
     if($saldominingedb>=$saldo_tukar){
    $qusaldo="update users_edc set saldo_eddcblockchain=saldo_eddcblockchain+$saldo_tukar,saldo_minig_edcb=saldo_minig_edcb-$saldo_tukar where users_id ='$_SESSION[user_id]'";
    
         $status='berhasil';
         $qutukar="insert into tukar_mining set id_transaksi='$id_transaksi',users_id='$_SESSION[user_id]',jenis_aset='$jenissaldo',jumlah_aset='$saldo_tukar',date_tukar=now(),tukar_by='$_SESSION[username]'";
         
        $feserver="update users_edc set saldo_eddcblockchain=saldo_eddcblockchain+'$feeser' where users_id='1807230001'";
        $feinfak="update users_edc set saldo_eddcblockchain=saldo_eddcblockchain+'$feeinf' where users_id='1808110020'";
         
         $feemasukserver="insert into history_masuk set users_id='1807230001',id_transaksi='$id_transaksi',jenis_saldo='EDCCB',total_saldo='$feeser',date_transaksi=now(),keterangan='Fee Tukar Saldo'";
         $feemasukinfak="insert into history_masuk set users_id='1808110020',id_transaksi='$id_transaksi',jenis_saldo='EDCCB',total_saldo='$feeser',date_transaksi=now(),keterangan='Fee Tukar Saldo'";
         
         $saldomasuk="insert into history_masuk set users_id='$_SESSION[user_id]',id_transaksi='$id_transaksi',jenis_saldo='EDCCB',total_saldo='$afterfee',date_transaksi=now(),keterangan='Tukar Mining ke Saldo'";
         
        $feekeluar="insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$id_transaksi',jenis_saldo='EDCCB',total_saldo='$feeinf',date_transaksi=now(),keterangan='Fee Tukar Saldo Infak'";
         $feekeluarserver="insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$id_transaksi',jenis_saldo='EDCCB',total_saldo='$feeser',date_transaksi=now(),keterangan='Fee Tukar Saldo Server'";
         
     } else {
         $status='gagal';
     }
}

mysqli_query($con,$qusaldo);
mysqli_query($con,$qutukar);
mysqli_query($con,$feserver);
mysqli_query($con,$feinfak);

mysqli_query($con,$feemasukserver);
mysqli_query($con,$feemasukinfak);
mysqli_query($con,$saldomasuk);

mysqli_query($con,$feekeluar);
mysqli_query($con,$feekeluarserver);




?>
<script> $(document).ready(function() { 
        
        var status='<?=$status?>';
        if(status=='berhasil'){
        swal('Pindah EDCCASH Berhasil ', 'Terimakasih', 'success');
           setTimeout(function () {  window.location='index-menu-wallet-page-index.html'; }, 2000); 
        } else {
        swal('Pindah EDCCASH Gagal ', 'Terimakasih', 'error');  
          setTimeout(function () {  window.location='index-menu-wallet-page-index.html'; }, 2000); 
        }
    });

</script>
