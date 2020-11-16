<?php
require('theme/resizer.class.php');


function contractid()
{
    mt_srand((float)microtime() * 10000);
    $charid = md5(uniqid(rand(), true));
    $c = unpack("C*", $charid);
    $c = implode("", $c);
    $depan = "EDCCASH/CLOUD";
    $userid = $_SESSION['user_id'];
    $random = substr($c, 0, 10);
    $kontrak = $random;

    return $kontrak;
}

$namafilebaru = contractid();

$ekstensi_diperbolehkan    = array('png', 'jpg');

// ambil data file
$namaFile = $_FILES['topupbuktibayar']['name'];
$namaSementara = $_FILES['topupbuktibayar']['tmp_name'];
$file_type = $_FILES['topupbuktibayar']['type'];
$x = explode('.', $namaFile);
$ekstensi = strtolower(end($x));
if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "bukti_topup/";
    $foto = $dirUpload . $namafilebaru . '.' . $ekstensi;
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $foto);
    if (($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/jpg")) {
        $resizeBukti = new ResizeImage($foto);
        $resizeBukti->compressImage($foto, $foto, 60);
    }

    if ($terupload) {
        $status = 'berhasil';
        $id = $_POST['transaksi'];
        $qufototop = "update  topup set foto_topup='$foto' where autono='$id'";
        mysqli_query($con, $qufototop);
    } else {
        $status = 'gagal';
    }
}

?>
<script>
    $(document).ready(function() {

        var status = '<?= $status ?>';
        if (status == 'berhasil') {
            swal('Upload Bukti Transfer Berhasil ', 'Terimakasih', 'success');
            setTimeout(function() {
                window.location = 'index-menu-wallet-page-index.html';
            }, 2000);
        } else {
            swal('Upload Bukti Transfer Gagal ', 'Terimakasih', 'error');
            setTimeout(function() {
                window.location = 'index-menu-wallet-page-index.html';
            }, 2000);
        }
    });
</script>