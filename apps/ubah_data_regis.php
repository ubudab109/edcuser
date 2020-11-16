<?php 
    session_start();
    include "../assets/dbconnect.php";

    $user_id = $_SESSION['user_id'];

    // IDENTITAS DIRI
    $nama_lengkap       = $_POST['nama_lengkap'];
    $no_ktp             = $_POST['no_ktp'];
    $tanggal            = $_POST['tanggal'];
    $bulan              = $_POST['bulan'];
    $tahun              = $_POST['tahun'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $alamat             = $_POST['alamat'];
    $no_hp              = $_POST['no_hp'];

    // REKENING
    $nama_bank          = $_POST['nama_bank'];
    $cabang_bank        = $_POST['cabang_bank'];
    $pemilik_rekening   = $_POST['pemilik_rekening'];
    $nomor_rekening     = $_POST['nomor_rekening'];
    $swift_code         = $_POST['swift_code'];
    $tanggal_lahir      = "$tahun-$bulan-$tanggal";
    $tgl_lahir          = date("Y/m/d", strtotime($tanggal_lahir));


    
    $jenis_kelamin == "Laki-laki" ? $jenis_kelamin = 0 : $jenis_kelamin = 1;

    $qu_user        = "SELECT * FROM users_edc WHERE users_id = $user_id";
    $rs_user        = mysqli_query($con, $qu_user);
    $rw_user        = mysqli_fetch_array($rs_user);
    $foto_ktp       = $rw_user['foto_ktp'];
    $foto_selfie    = $rw_user['foto_selfie'];

    // PEMBAYARAN REGISTER
    $topup_select       = $_POST['topup_select'];
    $jumlah_topup       = $_POST['jumlah_topup'];
    $no_voucher         = $_POST['no_voucher'];

    // BUKTI PEMBAYARAN
    $qu_regis      = "SELECT * FROM pembayaran_register WHERE users_id = $user_id";
    $rs_regis      = mysqli_query($con, $qu_regis);
    $rw_regis      = mysqli_fetch_array($rs_regis);
    $foto_regis    = $rw_regis['bukti_bayar'];

    // KALO MENGGUNAKAN VOUCHER EDCCASH
    if ($topup_select == "eddccash") {

        $qu_select_gen = "SELECT * FROM gen_voucher WHERE kode_voucher='$no_voucher'";
        $rs_select_gen = mysqli_query($con, $qu_select_gen);
        $rw_select_gen = mysqli_fetch_array($rs_select_gen);
        $used_voucher  = $rw_select_gen['used_voucher'];

        // JIKA VOUCHER ADA
        if (!empty($rw_select_gen)) {

            // KALO VOUCHER BELUM DIGUNAKAN
            if ($used_voucher == 0) {


                // echo "bisa digunain nih";
                if (!empty($_FILES['foto_ktp']['name']) && !empty($_FILES['foto_selfie']['name'])) {
                    // KTP 
                    $old_name_ktp   = $_FILES['foto_ktp']['name'];
                    $file_ktp       = $_FILES['foto_ktp']['tmp_name'];
                    $ext_ktp        = pathinfo($old_name_ktp, PATHINFO_EXTENSION);
                    $new_name_ktp   = "KTP-".time().".".$ext_ktp;
        
                    // SELFIE
                    $old_name_selfie    = $_FILES['foto_selfie']['name'];
                    $file_selfie        = $_FILES['foto_selfie']['tmp_name'];
                    $ext_selfie         = pathinfo($old_name_selfie, PATHINFO_EXTENSION);
                    $new_name_selfie    = "SELFIE-".time().".".$ext_selfie;
        
                    unlink("../assets/images/uploads/ktp/$foto_ktp");
                    unlink("../assets/images/uploads/selfie/$foto_selfie");
        
                    move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");
                    move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");
        
                    $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_ktp='$new_name_ktp', foto_selfie='$new_name_selfie' WHERE users_id='$user_id'";
                    mysqli_query($con, $qu_user);
        
                } else if (!empty($_FILES['foto_ktp']['name']) && empty($_FILES['foto_selfie']['name'])) {
        
                    $old_name_ktp   = $_FILES['foto_ktp']['name'];
                    $file_ktp       = $_FILES['foto_ktp']['tmp_name'];
                    $ext_ktp        = pathinfo($old_name_ktp, PATHINFO_EXTENSION);
                    $new_name_ktp   = "FOTO-".time().".".$ext_ktp; 
        
                    unlink("../assets/images/uploads/ktp/$foto_ktp");
                    move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");
        
                    $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_ktp='$new_name_ktp' WHERE users_id='$user_id'";
                    mysqli_query($con, $qu_user);
        
                } else if (empty($_FILES['foto_ktp']['name']) && !empty($_FILES['foto_selfie']['name'])) {
        
                    $old_name_selfie    = $_FILES['foto_selfie']['name'];
                    $file_selfie        = $_FILES['foto_selfie']['tmp_name'];
                    $ext_selfie         = pathinfo($old_name_selfie, PATHINFO_EXTENSION);
                    $new_name_selfie    = "SELFIE-".time().".".$ext_selfie;
        
                    unlink("../assets/images/uploads/selfie/$foto_selfie");
                    move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");
        
                    $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_selfie='$new_name_selfie' WHERE users_id='$user_id'";
                    mysqli_query($con, $qu_user);
        
                } else {
        
                    $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code' WHERE users_id='$user_id'";
                    mysqli_query($con, $qu_user);
        
                }
        
        
                if (!empty($_FILES['bukti_bayar']['name'])) {
        
                    $old_name_bukti = $_FILES['bukti_bayar']['name'];
                    $file_bukti     = $_FILES['bukti_bayar']['tmp_name'];
                    $ext            = pathinfo($old_name_bukti, PATHINFO_EXTENSION);
                    $new_name_bukti = "BUKTI-".time().".".$ext;
                    $size_file      = $_FILES['bukti_bayar']['size'];
                    $ext_allowed    = ["jpg", "png"];
            
                    unlink("../assets/images/uploads/selfie/$foto_regis");
                    move_uploaded_file($file_bukti, "../assets/images/uploads/bukti/$new_name_bukti");
                    
            
                    $qu_pembayaran = "UPDATE pembayaran_register SET jenis_topup='$topup_select', jumlah_topup='$jumlah_topup', no_voucher='$no_voucher', bukti_bayar='$new_name_bukti' WHERE users_id='$user_id'";
                    mysqli_query($con, $qu_pembayaran);
            
                } else {
            
                    $qu_pembayaran = "UPDATE pembayaran_register SET jenis_topup='$topup_select', jumlah_topup='$jumlah_topup', no_voucher='$no_voucher' WHERE users_id='$user_id'";  
                    mysqli_query($con, $qu_pembayaran);
            
                }



                $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Data berhasil diubah.</div>';
                echo '<script>window.location="detail_register.php";</script>';




            // KALO VOUCHER SUDAH DIGUNAKAN
            } else {
            
                // echo "voucher sudah dipakai!";
                // $_SESSION['info'] = "Voucher sudah digunakan, coba gunakan voucher lain!";
                $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Voucher sudah digunakan, coba gunakan voucher lain!</div>';
                echo '<script>window.location="detail_register.php";</script>';


            }

        // JIKA VOUCHER TIDAK ADA
        } else {

            $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Kode voucher tidak terdaftar!</div>';
            echo '<script>window.location="detail_register.php";</script>';

        }


    // KALO TIDAK MENGGUNAKAN VOUCHER EDCCASH    
    } else {

        // echo "tidak menggunakan voucher edccash";
        // echo "<br/>";
        if (!empty($_FILES['foto_ktp']['name']) && !empty($_FILES['foto_selfie']['name'])) {
            // KTP 
            $old_name_ktp   = $_FILES['foto_ktp']['name'];
            $file_ktp       = $_FILES['foto_ktp']['tmp_name'];
            $ext_ktp        = pathinfo($old_name_ktp, PATHINFO_EXTENSION);
            $new_name_ktp   = "KTP-".time().".".$ext_ktp;

            // SELFIE
            $old_name_selfie    = $_FILES['foto_selfie']['name'];
            $file_selfie        = $_FILES['foto_selfie']['tmp_name'];
            $ext_selfie         = pathinfo($old_name_selfie, PATHINFO_EXTENSION);
            $new_name_selfie    = "SELFIE-".time().".".$ext_selfie;

            unlink("../assets/images/uploads/ktp/$foto_ktp");
            unlink("../assets/images/uploads/selfie/$foto_selfie");

            move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");
            move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");

            $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_ktp='$new_name_ktp', foto_selfie='$new_name_selfie' WHERE users_id='$user_id'";
            mysqli_query($con, $qu_user);

        } else if (!empty($_FILES['foto_ktp']['name']) && empty($_FILES['foto_selfie']['name'])) {

            $old_name_ktp   = $_FILES['foto_ktp']['name'];
            $file_ktp       = $_FILES['foto_ktp']['tmp_name'];
            $ext_ktp        = pathinfo($old_name_ktp, PATHINFO_EXTENSION);
            $new_name_ktp   = "FOTO-".time().".".$ext_ktp; 

            unlink("../assets/images/uploads/ktp/$foto_ktp");
            move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");

            $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_ktp='$new_name_ktp' WHERE users_id='$user_id'";
            mysqli_query($con, $qu_user);

        } else if (empty($_FILES['foto_ktp']['name']) && !empty($_FILES['foto_selfie']['name'])) {

            $old_name_selfie    = $_FILES['foto_selfie']['name'];
            $file_selfie        = $_FILES['foto_selfie']['tmp_name'];
            $ext_selfie         = pathinfo($old_name_selfie, PATHINFO_EXTENSION);
            $new_name_selfie    = "SELFIE-".time().".".$ext_selfie;

            unlink("../assets/images/uploads/selfie/$foto_selfie");
            move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");

            $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_selfie='$new_name_selfie' WHERE users_id='$user_id'";
            mysqli_query($con, $qu_user);

        } else {

            $qu_user = "UPDATE users_edc SET nama_lengkap='$nama_lengkap', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code' WHERE users_id='$user_id'";
            mysqli_query($con, $qu_user);

        }


        if (!empty($_FILES['bukti_bayar']['name'])) {

            $old_name_bukti = $_FILES['bukti_bayar']['name'];
            $file_bukti     = $_FILES['bukti_bayar']['tmp_name'];
            $ext            = pathinfo($old_name_bukti, PATHINFO_EXTENSION);
            $new_name_bukti = "BUKTI-".time().".".$ext;
            $size_file      = $_FILES['bukti_bayar']['size'];
            $ext_allowed    = ["jpg", "png"];
    
            unlink("../assets/images/uploads/selfie/$foto_regis");
            move_uploaded_file($file_bukti, "../assets/images/uploads/bukti/$new_name_bukti");
            
    
            $qu_pembayaran = "UPDATE pembayaran_register SET jenis_topup='$topup_select', jumlah_topup='$jumlah_topup', no_voucher='$no_voucher', bukti_bayar='$new_name_bukti' WHERE users_id='$user_id'";
            mysqli_query($con, $qu_pembayaran);
    
        } else {
    
            $qu_pembayaran = "UPDATE pembayaran_register SET jenis_topup='$topup_select', jumlah_topup='$jumlah_topup', no_voucher='$no_voucher' WHERE users_id='$user_id'";  
            mysqli_query($con, $qu_pembayaran);
    
        }


        $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Data berhasil diubah.</div>';
        echo '<script>window.location="detail_register.php";</script>';




    }

?>

<!-- <script>window.location="detail_register.php";</script> -->