<?php
    include("../assets/dbconnect.php");
    session_start();

    $user_id = $_SESSION['user_id'];
    // echo $user_id;

    // IDENTITAS DIRI
    $nama           = $_POST["nama"];
    $no_ktp         = $_POST["no_ktp"];
    $tanggal        = $_POST["tanggal"];
    $bulan          = $_POST["bulan"];
    $tahun          = $_POST["tahun"];
    $jenis_kelamin  = $_POST["jenis_kelamin"];
    $alamat         = $_POST["alamat"];
    $no_hp          = $_POST["no_hp"];
    $tanggal_lahir  = date_create("$tahun/$bulan/$tanggal");
    $tgl_lahir      = date_format($tanggal_lahir, "Y/m/d");

    // DATA BANK
    $nama_bank          = $_POST['nama_bank'];
    $cabang_bank        = $_POST['cabang_bank'];
    $pemilik_rekening   = $_POST['pemilik_rekening'];
    $nomor_rekening     = $_POST['nomor_rekening'];
    $swift_code         = $_POST['swift_code'];


    // PEMBAYARAN
    // echo "<br/>";
    $topup_select       = $_POST['topup_select'];
    $jumlah_topup       = $_POST['jumlah_topup'];
    $no_voucher         = $_POST['no_voucher'];
    // "<br/>";



    // PERTAMA LACAK DULU JENIS TOP UP
    if ($topup_select == "eddccash") {
        $qu_select_gen = "SELECT * FROM gen_voucher WHERE kode_voucher='$no_voucher'";
        $rs_select_gen = mysqli_query($con, $qu_select_gen);
        $rw_select_gen = mysqli_fetch_array($rs_select_gen);
        $used_voucher  = $rw_select_gen['used_voucher'];


        // KALO VOUCHER TIDAK KOSONG
        if (!empty($rw_select_gen)) {

            // KALO VOUCHER BELUM DIGUNAKAN
            if ($used_voucher == 0) {

                // echo "voucher bisa digunakan";
                // echo "<br />";

                // UPLOAD DOKUMEN
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
                    $ext_allowed        = ['jpg', 'png'];

                    move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");
                    move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");

                    $qu_user = "UPDATE users_edc SET nama_lengkap='$nama', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_ktp='$new_name_ktp', foto_selfie='$new_name_selfie' WHERE users_id='$user_id'";
                    mysqli_query($con, $qu_user);

                    $qu_voucher = "UPDATE gen_voucher SET used_voucher = '1' WHERE kode_voucher = '$no_voucher'";
                    mysqli_query($con, $qu_voucher);

                }


                // BUKTI PEMBAYARAN
                if (!empty($_FILES['bukti_bayar']['name'])) {

                    $old_name_bukti = $_FILES['bukti_bayar']['name'];
                    $file_bukti     = $_FILES['bukti_bayar']['tmp_name'];
                    $ext            = pathinfo($old_name_bukti, PATHINFO_EXTENSION);
                    $new_name_bukti = "BUKTI-".time().".".$ext;
                    $size_file      = $_FILES['bukti_bayar']['size'];
                    $ext_allowed    = ["jpg", "png"];

                    move_uploaded_file($file_bukti, "../assets/images/uploads/bukti/$new_name_bukti");

                    echo $qu_pembayaran = "INSERT INTO pembayaran_register SET jenis_topup='$topup_select', jumlah_topup='$jumlah_topup', no_voucher='$no_voucher', bukti_bayar='$new_name_bukti', users_id='$user_id'";
                    mysqli_query($con, $qu_pembayaran);

                }

                $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Data berhasil ditambahkan.</div>';
                echo '<script>window.location="detail_register.php";</script>';



            // KALO VOUCHER SUDAH DIGUNAKAN
            } else {

                // echo "voucher sudah digunakan, coba gunakan voucher lain";
                // echo "<br />";

                $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Voucher sudah digunakan, silahkan gunakan voucher lain!</div>';
                echo '<script>window.location="register.php";</script>';

            }


        // KALO VOUCHER NGASAL
        } else {

            // echo "kode voucher tidak ada!";
            // echo "<br />";
            $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Kode voucher tidak terdaftar!</div>';
            echo '<script>window.location="register.php";</script>';

        }

    } else {

        // echo $topup_select;
        // echo "<br />";


        // UPLOAD DOKUMEN
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
            $ext_allowed        = ['jpg', 'png'];

            move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");
            move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");

            echo $qu_user = "UPDATE users_edc SET nama_lengkap='$nama', no_ktp='$no_ktp', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', pemilik_rekening='$pemilik_rekening', nomor_rekening='$nomor_rekening', swift_code='$swift_code', foto_ktp='$new_name_ktp', foto_selfie='$new_name_selfie' WHERE users_id='$user_id'";
            mysqli_query($con, $qu_user);
        }

        // BUKTI PEMBAYARAN
        if (!empty($_FILES['bukti_bayar']['name'])) {
            $old_name_bukti = $_FILES['bukti_bayar']['name'];
            $file_bukti     = $_FILES['bukti_bayar']['tmp_name'];
            $ext            = pathinfo($old_name_bukti, PATHINFO_EXTENSION);
            $new_name_bukti = "BUKTI-".time().".".$ext;
            $size_file      = $_FILES['bukti_bayar']['size'];
            $ext_allowed    = ["jpg", "png"];

            move_uploaded_file($file_bukti, "../assets/images/uploads/bukti/$new_name_bukti");
            echo $qu_pembayaran = "INSERT INTO pembayaran_register SET jenis_topup='$topup_select', jumlah_topup='$jumlah_topup', no_voucher='$no_voucher', bukti_bayar='$new_name_bukti', users_id='$user_id'";
            mysqli_query($con, $qu_pembayaran);

        }

        $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Data berhasil ditambahkan.</div>';
        echo '<script>window.location="detail_register.php";</script>';

    }




?>
<!-- <script>window.location="detail_register.php";</script> -->
