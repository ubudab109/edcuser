<?php

$rupiahjual=$_POST['jualidr'];
$idpenerima=$_POST['membertujuan'];
$fee=str_replace( ',', '', $_POST['feejual'] );

$tojual=str_replace( ',', '', $_POST['totjual'] );
$afterfe=$tojual-$fee;
$upass= $_POST['password'];
$kode_otp=$_POST['otp_code'];


if($kode_otp==$otp){
    

if (hash_equals($dbpas, crypt($upass, $dbpas))) {

function contractid(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
			$depan="EDCCASH/JUAL";
			$userid=$_SESSION['user_id'];
			$random=substr($c,0,10);
			$kontrak=$depan.'/'.$userid.'/'.$random;

            return $kontrak;
    }

$idtransaksi=contractid();


if($tojual<=$saldomaksedcc){
    
$balancekurang=$tojual+$fee;
$balancetambah=$afterfe;
$fe2server=$fee*2;

    
    $qusend="insert into jual_edccash set users_id='$_SESSION[user_id]', id_transaksi='$idtransaksi',id_tujuan='$idpenerima',jumlah_rupiah='$rupiahjual',before_fee='$tojual',after_fee='$afterfe',fee_transaksi='$fee',date_jual=now(),jual_by='$_SESSION[username]' ";
    
    
    $qukurangsaldo="update users_edc set saldo_eddcash=saldo_eddcash-'$balancekurang' where users_id='$_SESSION[user_id]'";
    $qutambahsaldo="update users_edc set saldo_eddcash=saldo_eddcash+'$balancetambah' where users_id='$idpenerima'";
    
    
    //history all transaksi keluar masuk
    $saldokeluar="insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$tojual',date_transaksi=now(),keterangan='Kirim Ke $idpenerima'";
    $feesaldokeluar="insert into history_keluar set users_id='$_SESSION[user_id]',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$fee',date_transaksi=now(),keterangan='Fee Server'";
    
    $saldomasuk="insert into history_masuk set users_id='$idpenerima',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$afterfe',date_transaksi=now(),keterangan='Diterima dari $_SESSION[user_id]'";
    $feesaldomasuk="insert into history_keluar set users_id='$idpenerima',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$fee',date_transaksi=now(),keterangan='Fee Server'";
    
    $feemasukserver="insert into history_masuk set users_id='1807230001',id_transaksi='$idtransaksi',jenis_saldo='EDCCASH',total_saldo='$fe2server',date_transaksi=now(),keterangan='Fee Transaksi'";
    
    $tambahserver="update users_edc set saldo_eddcash=saldo_eddcash+'$fe2server' where users_id='1807230001'";
    
 
mysqli_query($con,$qusend);
mysqli_query($con,$qukurangsaldo);
mysqli_query($con,$qutambahsaldo);

    
mysqli_query($con,$saldokeluar);
mysqli_query($con,$feesaldokeluar); 
mysqli_query($con,$saldomasuk); 
mysqli_query($con,$feesaldomasuk);

mysqli_query($con,$feemasukserver);
mysqli_query($con,$tambahserver);
$status='berhasil';
    
} else {

$status='gagal';
    
}

} else {

$status='gagal';
    
}

}else { $status='gagal'; }



?>

<script> $(document).ready(function() { 
        
        var status='<?=$status?>';
        if(status=='berhasil'){
        swal('Jual EDCCASH Berhasil ', 'Terimakasih', 'success');
            setTimeout(function () {  window.location='index-menu-wallet-page-index.html'; }, 2000); 
        } else {
        swal('Jual EDCCASH Gagal ', 'Terimakasih', 'error');  
             setTimeout(function () {  window.location='index-menu-wallet-page-index.html'; }, 2000); 
        }
    });

</script>