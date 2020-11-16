<?php

include "../assets/dbconnect.php";
include('mod/voucher/class.coupon.php');

// function generate($tes) {
//
//     $length         = 8;
//     $prefix         = $tes;
//     $suffix         = (isset($options['suffix']) ? self::cleanString(filter_var($options['suffix'], FILTER_SANITIZE_STRING)) : '' );
//     $useLetters     = (isset($options['letters']) ? filter_var($options['letters'], FILTER_VALIDATE_BOOLEAN) : true );
//     $useNumbers     = (isset($options['numbers']) ? filter_var($options['numbers'], FILTER_VALIDATE_BOOLEAN) : false );
//     $useSymbols     = (isset($options['symbols']) ? filter_var($options['symbols'], FILTER_VALIDATE_BOOLEAN) : false );
//     $useMixedCase   = (isset($options['mixed_case']) ? filter_var($options['mixed_case'], FILTER_VALIDATE_BOOLEAN) : false );
//     $mask           = 'XXXXXXXX-XXXXXXXX';
//
//     $uppercase    = ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'];
//     $lowercase    = ['q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'];
//     $numbers      = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
//     $symbols      = ['`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '\\', '|', '/', '[', ']', '{', '}', '"', "'", ';', ':', '<', '>', ',', '.', '?'];
//
//     $characters   = [];
//     $coupon = '';
//
//     if ($useLetters) {
//         if ($useMixedCase) {
//             $characters = array_merge($characters, $lowercase, $uppercase);
//         } else {
//             $characters = array_merge($characters, $uppercase);
//         }
//     }
//
//     if ($useNumbers) {
//         $characters = array_merge($characters, $numbers);
//     }
//
//     if ($useSymbols) {
//         $characters = array_merge($characters, $symbols);
//     }
//
//     if ($mask) {
//         for ($i = 0; $i < strlen($mask); $i++) {
//             if ($mask[$i] === 'X') {
//                 $coupon .= $characters[mt_rand(0, count($characters) - 1)];
//             } else {
//                 $coupon .= $mask[$i];
//             }
//         }
//     } else {
//         for ($i = 0; $i < $length; $i++) {
//             $coupon .= $characters[mt_rand(0, count($characters) - 1)];
//         }
//     }
//
//     return $prefix . $coupon . $suffix;
// }

$select = "SELECT kode_voucher FROM gen_voucher WHERE kode_voucher LIKE '%VOCREF-%'";

$fetch = mysqli_query($con, $select);
$arr = mysqli_fetch_array($fetch);
$num = mysqli_num_rows($fetch);

$select1 = "SELECT * FROM gen_voucher WHERE kode_voucher LIKE '%EDCCASH-%'";
$fetch1 = mysqli_query($con, $select1);
$arr1 = mysqli_fetch_array($fetch1);

// var_dump($arr);
// $dups = array();
// foreach(array_count_values($arr) as $val => $c){
//   if($c > 1){
//     var_dump($dups[] = $val);
//   }
//
// }

// $kode_voucher1 = $arr['kode_voucher'];
// $kode_voucher2 = $arr['kode_voucher'];

// $result = mysql_query("SELECT * FROM table WHERE key_id='$key_id'");
// $num_rows = mysql_num_rows($result);
//
// if ($num) {
//    trigger_error('It exists.', E_USER_WARNING);
// }

// $kodee = [];
//
// foreach($arr as $kode){
//   $kodee[] = [
//     $kode,
//   ];
//
//   var_dump($kode);
// }
// $row = [];
function array_has_dupes($array) {
   return count($array) !== count(array_unique($array));
}
$test = "SELECT kode_voucher FROM gen_voucher WHERE kode_voucher LIKE '%VOCREF-%' AND used_voucher = '1'";
$te = "SELECT txid, count(*) as count FROM tx_transaction GROUP BY txid";
$sa = mysqli_query($con, $te);

// $as = mysqli_fetch_array($sa);
//
// var_dump($as);
  $uppercase    = ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'];
  $length = 1;
// set_time_limit(20);
while($row = mysqli_fetch_row($sa)){
  // var_dump($row);
  // var_dump();
  // echo $random;

  $voucher1 = coupon::generate('VOCREF-');
  $count = $row[1];
  $raw = $row[0];


  $random = substr(str_shuffle('0123456789'),1,$length);
  $newStr = substr_replace($raw, $random, 23);
  // var_dump($newStr);
  // var_dump($raw);
  $rt = $row[1];
  // var_dump();
  if($rt > 1){
    var_dump($raw);
    // $sql = "UPDATE gen_voucher SET kode_voucher = '$newStr' WHERE used_voucher = '0' AND kode_voucher = '$raw'";
    //   "UPDATE t1 SET c=c+1 WHERE a=1;"
    //   // continue;
    //   // $sql = "INSERT INTO gen_voucher (kode_voucher) VALUES($raw) ON DUPLICATE KEY UPDATE kode_voucher = '$voucher1'"
    //   $test = mysqli_query($con, $sql);
    //   var_dump($test);
  }
  // var_dump($count);
  // $counting = count($row);
  //
  // // continue;
  // // break;
  // var_dump(rand($uppercase));
  //
  // if($count > 1){
  //   // continue;
  //   // sleep(2);
  //     // sleep(1);
  //     $sql = "UPDATE gen_voucher SET kode_voucher = '$newStr' WHERE used_voucher = '1' AND kode_voucher = '$raw'";
  //     // "UPDATE t1 SET c=c+1 WHERE a=1;"
  //     // continue;
  //     // $sql = "INSERT INTO gen_voucher (kode_voucher) VALUES($raw) ON DUPLICATE KEY UPDATE kode_voucher = '$voucher1'"
  //     $test = mysqli_query($con, $sql);
  //     var_dump($test);
  //
  //
  //   // var_dump($test);
  //
  // }
}

// $sql = rtrim($sql, ', ');
// $test = mysqli_query($con, $sql);
//
// mysql_query($sql);



// while($row = mysqli_fetch_row($fetch)){
//
//   $voucher1 = coupon::generate('VOCREF-');
//
//   // var_dump($row[0]);
//   $ini = $row[0];
//   var_dump(sizeof($ini));
//   if($ini > 1){
//     echo 'doble';
//   }
//   else{
//     // echo 'gak dobel';
//   }
//   // var_dump();
//   // $sql = "INSERT INTO gen_voucher SET kode_voucher = '$ini' ON DUPLICATE KEY UPDATE kode_voucher = $voucher1";
//   // $test = mysqli_query($con, $sql);
//   // "INSERT INTO gen_voucher(kode_voucher) VALUES (4,'Printer') ON DUPLICATE KEY UPDATE name = 'Central Printer'";
//   // var_dump($sql);
//
// }

// var_dump($kodee);
// die;
//
//
//
// // echo $arr1;
// // echo $arr[0]['kode_voucher'];


?>
