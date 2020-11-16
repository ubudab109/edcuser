<?php
//fuction rank

$userdb='root';
$host='localhost';
$passdb='';
$dbselect='db_edccash';

$baseurl="";


$con=mysqli_connect($host,$userdb,$passdb);
mysqli_select_db($con,$dbselect);


function rupiah($dolar){


	$hasil_dolar = "Rp. " . number_format($dolar,2,'.',',');
	return $hasil_dolar;

}

function angka($dolar){


	$hasil_dolar = number_format($dolar,3,'.',',');
	return $hasil_dolar;

}

function tanggal($tanggal){


	$date=date_create($tanggal);

if($tanggal=='0000-00-00'){
    return 'Belum  aktif';
} else {
    return date_format($date, "d-m-Y");
}


}


function rippeningeddcash($id){

    global $con;

    $qurep="select sum(balance) as totrepening from ripening_edccash where users_id='$id'";
    $rsrep=mysqli_query($con,$qurep);
    $rwrep=mysqli_fetch_array($rsrep);

  $hasil = number_format($rwrep['totrepening'],3,'.',',');
return $hasil;

}

function rippeningeddccb($id){

    global $con;

    $qurep="select sum(balance) as totrepening from ripening_edccb where users_id='$id'";
    $rsrep=mysqli_query($con,$qurep);
    $rwrep=mysqli_fetch_array($rsrep);

  $hasil = number_format($rwrep['totrepening'],3,'.',',');
return $hasil;

}

function rippeningrefreal($id){

    global $con;

    $qurep="select sum(balance) as totrepening from ripening_edccash_ref where users_id='$id'";
    $rsrep=mysqli_query($con,$qurep);
    $rwrep=mysqli_fetch_array($rsrep);

  $hasil = number_format($rwrep['totrepening'],3,'.',',');
return $hasil;

}

function totalref($id){

    global $con;

    $qurep="select count(users_id) as totref from users_edc where reff_id='$id'";
    $rsrep=mysqli_query($con,$qurep);
    $rwrep=mysqli_fetch_array($rsrep);

  $hasil = $rwrep['totref'];
return $hasil;

}
function rateaset($jenis,$type){

    global $con;

    $qurep="select * from setting_rate where jenis_aset='$jenis'";
    $rsrep=mysqli_query($con,$qurep);
    $rwrep=mysqli_fetch_array($rsrep);
if($type=='jual'){
    $hasil = $rwrep['harga_jual'];
}else {
    $hasil = $rwrep['harga_beli'];
}

return $hasil;

}

function adresdepo($jenis,$pupkey){

    global $con;

    $qurep="select * from setting_address where jenis_aset='$jenis'";
    $rsrep=mysqli_query($con,$qurep);
    $rwrep=mysqli_fetch_array($rsrep);
if($jenis=='voucherbtc'){
    $hasil = $rwrep['email_aset'];

}else if($jenis=='btc'){
    $hasil = $rwrep['alamat_aset'];

}else if($jenis=='prizm' and $pupkey=='0' ){
    $hasil = $rwrep['alamat_aset'];
}else if($jenis=='prizm' and $pupkey=='pubkey'){
    $hasil = $rwrep['public_key'];
}

return $hasil;

}





?>
