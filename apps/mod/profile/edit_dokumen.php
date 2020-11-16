<?php 

    $user_id        = $_SESSION['user_id'];
    // $foto_ktp       = $_POST['foto_ktp'];
    // $foto_selfie    = $_POST['foto_selfie'];

     $qu_user = "SELECT * FROM users_edc WHERE users_id = $user_id";
    $rs_user        = mysqli_query($con, $qu_user);
    $rw_user        = mysqli_fetch_array($rs_user);
     $foto_ktp       = $rw_user['foto_ktp'];
     $foto_selfie    = $rw_user['foto_selfie'];

    
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

        // unlink("../assets/images/uploads/ktp/$foto_ktp");
        // unlink("../assets/images/uploads/selfie/$foto_selfie");

        move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");
        move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");

        $qu_user = "UPDATE users_edc SET foto_ktp='$new_name_ktp', foto_selfie='$new_name_selfie' WHERE users_id='$user_id'";
        $rs_user = mysqli_query($con, $qu_user);

    } else if (!empty($_FILES['foto_ktp']['name']) && empty($_FILES['foto_selfie']['name'])) {

        $old_name_ktp   = $_FILES['foto_ktp']['name'];
        $file_ktp       = $_FILES['foto_ktp']['tmp_name'];
        $ext_ktp        = pathinfo($old_name_ktp, PATHINFO_EXTENSION);
        $new_name_ktp   = "FOTO-".time().".".$ext_ktp; 

        move_uploaded_file($file_ktp, "../assets/images/uploads/ktp/$new_name_ktp");
        $qu_user = "UPDATE users_edc SET foto_ktp='$new_name_ktp' WHERE users_id='$user_id'";
        $rs_user = mysqli_query($con, $qu_user);
    } else {

        $old_name_selfie    = $_FILES['foto_selfie']['name'];
        $file_selfie        = $_FILES['foto_selfie']['tmp_name'];
        $ext_selfie         = pathinfo($old_name_selfie, PATHINFO_EXTENSION);
        $new_name_selfie    = "SELFIE-".time().".".$ext_selfie;

        move_uploaded_file($file_selfie, "../assets/images/uploads/selfie/$new_name_selfie");
        $qu_user = "UPDATE users_edc SET foto_selfie='$new_name_selfie' WHERE users_id=$user_id";
        $rs_user = mysqli_query($con, $qu_user);
    }

    $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Dokumen berhasil diubah!</div>';
?>

<script>window.location="index-menu-profile-page-index.html";</script>