<?php 
    include_once '../assets/dbconnect.php';

    $user_id = $_SESSION['user_id'];
    $password_lama = $_POST['password_lama'];
    $password_baru1 = $_POST['password_baru1'];
    $password_baru2 = $_POST['password_baru2'];

    echo $qu_user = "SELECT * FROM users_edc WHERE users_id=$user_id";
    $rs_user = mysqli_query($con, $qu_user);
    $rw_user = mysqli_fetch_array($rs_user);

    echo "<pre>";
    var_dump($rw_user);
    echo "</pre>";
    $db_pas = $rw_user['password'];

    echo hash_equals($db_pas, crypt($password_lama, $db_pas));

    if (hash_equals($db_pas, crypt($password_lama, $db_pas))) {

        if ($password_lama == $password_baru1) {

            // echo "password baru tidak boleh sama dengan password lama!";
            $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">password baru tidak boleh sama dengan password lama!</div>';
            
        } else {

            if ($password_baru1 !== $password_baru2) {

                // echo "password baru tidak cocok";
                $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Password baru tidak cocok!</div>';
            
            } else {

                $password_baru = crypt($password_baru1);
                $dbpas = '$1$S.MhAxBD$rw6174JKTiHjnF20C/h1u1';
                
                if (hash_equals($dbpas, crypt($password_baru1,  $dbpas))) {
                    echo "Password verified!";
                }

                
                echo $qu_pass = "UPDATE users_edc SET password='$password_baru' WHERE users_id='$user_id'";
                mysqli_query($con, $qu_pass);

                $_SESSION['info'] = '<div class="alert alert-success mx-2" role="alert">Password berhasil diubah!</div>';

            }

        }

    } else {

        $_SESSION['info'] = '<div class="alert alert-danger mx-2" role="alert">Password lama tidak cocok!</div>';

    }
?>

<script>window.location="index-menu-profile-page-index.html";</script>