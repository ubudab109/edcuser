<?php
ini_set('display_errors', 1);

$userdb = 'root';
$host = 'localhost';
$passdb = '';
$dbselect = 'db_edccash';

$baseurl = "";


$con = mysqli_connect($host, $userdb, $passdb) or die("Connecting to MySQL failed");;
mysqli_select_db($con, $dbselect);
