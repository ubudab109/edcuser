<?php 
    include "../../../assets/dbconnect.php";

    // $user_sponsor = $_GET['id'];
    // $qu_member = "SELECT * FROM users_edc WHERE reff_id='$user_sponsor'";
    // $rs_member = mysqli_query($con, $qu_member);
    // $rw_member = mysqli_fetch_assoc($rs_member);

    $user = $_GET['id'];
    $qu_user = "SELECT * FROM users_edc WHERE users_id='$user'";
    $rs_user = mysqli_query($con, $qu_user);
    $rw_user = mysqli_fetch_assoc($rs_user);

    $user_sponsor = $rw_user['users_id'];
    $qu_member = "SELECT * FROM users_edc WHERE reff_id=$user_sponsor";
    $rs_member = mysqli_query($con, $qu_member);
    
    // $rw_member = mysqli_fetch_assoc($rs_member);
    while ($rw_member  = mysqli_fetch_assoc($rs_member)) {
        $data_member[] = $rw_member;
        $count = count($data_member);

        // !empty($count) ? $count = $count : $count = 0;
        // if (empty($count)) {
        //     $count = 0;
        // }
    }
    !empty($data_member) ? $data_member = $data_member : $data_member = 0;

    !empty($count) ? $count = $count : $count = 0;

    for ($i=0; $i < $count ; $i++) { 
        $user_id = $data_member[$i]['users_id'];
        
        $qu_hitung = "SELECT * FROM users_edc WHERE reff_id=$user_id";
        $rs_hitung = mysqli_query($con, $qu_hitung);
        $rw_hitung = mysqli_num_rows($rs_hitung);
        $count_member[$i] = $rw_hitung;
        
    }
        
    $hitung = mysqli_num_rows($rs_member);
    !empty($hitung) ? $hitung = $hitung : $hitung = 0;
    !empty($count_member) ? $count_member = $count_member : $count_member = 0;
    
    $arr = [
        "user"          => $rw_user,
        "total"         => $hitung,
        "member"        => $data_member,
        "hitung"        => $count_member
    ];

    $myJSON = json_encode($arr);
    
    print_r($myJSON);
?>