<?php 
    include "../../../assets/dbconnect.php";

    $id = $_POST['id'];

    $qu_user = "SELECT * FROM users_edc WHERE users_id='$id'";
    $rs_user = mysqli_query($con, "$qu_user");
    $rw_name= mysqli_fetch_array($rs_user);
    $rw_user = mysqli_num_rows($rs_user);

if($rw_user==0){
    
    
echo $rw_user;
}else {
      $member = array("nama"=>$rw_name['username']);
echo json_encode($member);
}
 
?>