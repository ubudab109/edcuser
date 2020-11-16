<?php
    include "../assets/dbconnect.php";

    $admin_id   = $_SESSION['user_id'];

    $users_id   = $_POST['users'];
    $status     = $_POST['status_kyc'];
    $no_voucher = $_POST['no_voucher'];
    $tx_id      = $_POST['txid'];

    // echo $users_id;
    // echo $status;

    if ($status == "1") {
   echo     $qu_status = "UPDATE users_edc SET saldo_eddcash='200',status_cloud_edccash='1', kyc_status='$status', tanggal_cloud_eddcash=date(now() + INTERVAL 1 MONTH), approval_date=now(), approval_by='$admin_id' WHERE users_id ='$users_id'";
        mysqli_query($con, $qu_status);

        // bonus 250
        // 200 	-> user                 * masuk ke eddcash
        // 35 	-> reff                 * masuk ke saldo referral
        // 15	-> admin@edccash.com    * masuk ke eddcash
        // echo "<br/>";

        // TANGKAP users id dan reff id
        $qu_select_user     = "SELECT * FROM users_edc WHERE users_id='$users_id'";
        $rs_select_user     = mysqli_query($con, $qu_select_user);
        $rw_select_user     = mysqli_fetch_array($rs_select_user);
        $reff_id            = $rw_select_user['reff_id'];
        $username           = $rw_select_user['username'];




        // USER


        // REFF
        $qu_update_reff     = "UPDATE users_edc SET saldo_eddcash=saldo_eddcash+35 WHERE users_id='$reff_id'";
        mysqli_query($con, $qu_update_reff);
        // echo "<br/>";

        // ADMIN
        $qu_update_admin    = "UPDATE users_edc SET saldo_eddcash=saldo_eddcash+15 WHERE users_id='1807240002'";
        mysqli_query($con, $qu_update_admin);
        // echo "<br/>";

        // CEK NO VOUCHER

            // SELECT VOUCHER
            $qu_select_voucher  = "SELECT * FROM gen_voucher WHERE kode_voucher='$no_voucher'";
            $rs_select_voucher  = mysqli_query($con, $qu_select_voucher);
            $rw_select_voucher  = mysqli_fetch_array($rs_select_voucher);
            $used_voucher       = $rw_select_voucher['used_voucher'];
            $u_id               = $rw_select_voucher['users_id'];


                // UPDATE GEN VOUCHER
                $qu_update_voucher  = "UPDATE gen_voucher SET penguna_voucer='$users_id', used_date=now(), used_by='$username' WHERE kode_voucher='$no_voucher'";
                mysqli_query($con, $qu_update_voucher);
                // echo "<br/>";

                // USER PEMILIK VOUCHER
                $qu_pemilik_voucher     = "SELECT * FROM users_edc WHERE users_id='$u_id'";
                $rs_pemilik_voucher     = mysqli_query($con, $qu_pemilik_voucher);
                $rw_pemilik_voucher     = mysqli_fetch_array($rs_pemilik_voucher);
                $status_cloud_edccash   = $rw_pemilik_voucher['status_cloud_edccash'];
                $status_cloud_edccb     = $rw_pemilik_voucher['status_cloud_edccb'];

                // STATUS CLOUD EDCCASH
                if (empty($status_cloud_edccash)) {
                    $status_cloud_edccash = 0;
                } else {
                    $status_cloud_edccash -= 1;
                }


                // empty($status_cloud_edccash) ? $status_cloud_edccash = 0 : $status_cloud_edccash -= 1 ;
                // empty($status_cloud_edccb) ? $status_cloud_edccb = 0 : $status_cloud_edccb -= 1 ;

          echo      $qu_update_user = "UPDATE users_edc SET status_cloud_edccb=$status_cloud_edccb, status_cloud_edccash=$status_cloud_edccash, saldo_rupiah=saldo_rupiah+400000 WHERE users_id='$u_id'";
                mysqli_query($con, $qu_update_user);


        $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">User diterima!</div>';
        echo '<script>window.location="index-menu-user-page-index.html";</script>';



    } else {

        $qu_delete = "DELETE FROM users_edc WHERE users_id='$users_id'";
        mysqli_query($con, $qu_delete);

        $qu_pembayaran        = "SELECT * FROM pembayaran_register WHERE users_id='$users_id'";
        $rs_select_pembayaran = mysqli_query($con, $qu_pembayaran);
        $rs_pembayaran        = mysqli_fetch_array($rs_select_pembayaran);
        $jenis_topup          = $rs_pembayaran['jenis_topup'];

        if($jenis_topup == "eddccash"){
          $qu_update_voucher = "UPDATE gen_voucher SET used_voucher = '0' WHERE kode_voucher='$no_voucher'";
          mysqli_query($con, $qu_update_voucher);
        }
        elseif($jenis_topup == 'edccb'){
          $qu_update_voucher = "UPDATE tx_transaction SET used_status = '0' WHERE txid='$tx_id'";
          mysqli_query($con, $qu_update_voucher);
        }


        $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">User ditolak!</div>';
        echo '<script>window.location="index-menu-user-page-index.html";</script>';


    }

?>
