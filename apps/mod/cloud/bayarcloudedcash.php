<?php

$edccash=str_replace( ',', '', $_POST['totalcloudedcash'] );



$upass= $_POST['password'];

$cekcloud="select * from users_edc where users_id='$_SESSION[user_id]'";
$cekrs=mysqli_query($con,$cekcloud);
$cekrw=mysqli_fetch_array($cekrs);

$statuscloud=$cekrw['status_cloud_edccash'];
$tanggalcloud=$cekrw['tanggal_cloud_eddcash'];
$datenow=date('Y-m-d');
    


if (hash_equals($dbpas, crypt($upass, $dbpas))) {
    
if($statuscloud=='0' and $tanggalcloud>$datenow){
    
    $status='topup';
    
    
} else {
if($saldoedccb>=$edccash){
    
 $status='berhasil';

function add_months($months, DateTime $dateObject) 
    {
        $next = new DateTime($dateObject->format('Y-m-d'));
        $next->modify('last day of +'.$months.' month');

        if($dateObject->format('d') > $next->format('d')) {
            return $dateObject->diff($next);
        } else {
            return new DateInterval('P'.$months.'M');
        }
    }

function endCycle($d1, $months)
    {
        $date = new DateTime($d1);

        // call second function to add the months
        $newDate = $date->add(add_months($months, $date));

        // goes back 1 day from date, remove if you want same day of month
        $newDate->sub(new DateInterval('P1D')); 

        //formats final date to Y-m-d form
        $dateReturned = $newDate->format('Y-m-d'); 

        return $dateReturned;
    }
function contractid(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
			$depan="EDCCASH/CLOUD";
			$userid=$_SESSION['user_id'];
			$random=substr($c,0,10);
			$kontrak=$depan.'/'.$userid.'/'.$random;

            return $kontrak;
    }

$idtransaksi=contractid();
    



$bulan=$_POST['bulan'];
$edccash=str_replace( ',', '', $_POST['totalcloudedcash'] );
if($cloud_edcash<=date("Y-m-d")){ 
$startDate =date("Y-m-d");
$final = endCycle($startDate, $bulan);
    $update="update  users_edc set tanggal_cloud_eddcash='$final',status_cloud_edccash='1' where users_id='$_SESSION[user_id]'";
    $kurangbalance="update  users_edc set saldo_eddcblockchain=saldo_eddcblockchain-'$edccash' where users_id='$_SESSION[user_id]' ";
    $transaksi="insert into pay_cloud set users_id='$_SESSION[user_id]',id_transaksi='$idtransaksi',jumlah_bulan='$bulan',jenis_cloud='EDCCASH',total_bayar='$edccash',date_bayar=now(),bayar_by='$_SESSION[username]'";
    
    mysqli_query($con,$update);
    mysqli_query($con,$kurangbalance);
    mysqli_query($con,$transaksi);
}
    else 
{
    
$startDate =$cloud_edcash;
$final = endCycle($startDate, $bulan);
    $update="update  users_edc set tanggal_cloud_eddcash='$final',status_cloud_edccash='1' where users_id='$_SESSION[user_id]'";
    $kurangbalance="update  users_edc set saldo_eddcblockchain=saldo_eddcblockchain-'$edccash' where users_id='$_SESSION[user_id]' ";
    $transaksi="insert into pay_cloud set users_id='$_SESSION[user_id]',id_transaksi='$idtransaksi',jumlah_bulan='$bulan',jenis_cloud='EDCCASH',total_bayar='$edccash',date_bayar=now(),bayar_by='$_SESSION[username]'";
    
    mysqli_query($con,$update);
    mysqli_query($con,$kurangbalance);
    mysqli_query($con,$transaksi);
}

 
}else
{
    
    $status='gagal';
}
}
}else {
    
    $status='gagal';
}


?>
<script> $(document).ready(function() { 
        
        var status='<?=$status?>';
        if(status=='berhasil'){
        swal('Pembayaran Cloud Berhasil ', 'Terimakasih', 'success');
             
            setTimeout(function () {  window.location='index-menu-cloud-page-index.html'; }, 2000); 
            
        } else if(status=='gagal') {
        swal('Pembayaran Cloud Gagal ', 'Deposit Saldo EDCC Blockchain anda', 'error');  
           setTimeout(function () {  window.location='index-menu-cloud-page-index.html'; }, 2000); 
        }
        else if(status=='topup') {
            swal('Pembayaran Cloud gagal, anda harus topup terlebihdahulu untuk menghidupkan cloud ', 'Terimakasih', 'error'); 
        setTimeout(function () {  window.location='index-menu-cloud-page-index.html'; }, 2000); 
        }
    });

</script>