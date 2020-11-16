<?php
    session_start();

    session_destroy();

    echo"<script>window.location.href = 'login.php'; alert('Anda telah keluar.')</script>";
    exit();

?>