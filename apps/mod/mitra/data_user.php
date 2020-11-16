<?php
 
 session_start();

require( '../../theme/fungsi.php' );
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

    $user_id = $_SESSION['user_id'];
 
    function modal($id) {
        include '../../../assets/dbconnect.php';


        $link = "<a href='#' class='btn btn-success detail' onclick='clickButton($id)' data-id='$id' data-toggle='modal' data-target='#modal-default'>Detail</a>";
        // $link = "<a href='#' class='btn btn-success' data-toggle='modal' data-target='#modal-default' onclick='clickModal($id)'>Detail</a>"; 
        return $link;
    }

    function count_member($user) {
        include "../../../assets/dbconnect.php";

        $qu_user = "SELECT * FROM users_edc WHERE reff_id ='$user'";
        $rs_user = mysqli_query($con, $qu_user);
        // $rw_user = mysqli_fetch_array($rs_user);

        return mysqli_num_rows($rs_user);
    }


    
    // DB table to use
    $table = 'users_edc';
    
    // Table's primary key
    $primaryKey = 'users_id';
    
    // Array of database columns which should be read and sent back to DataTables.
    // The `db` parameter represents the column name in the database, while the `dt`
    // parameter represents the DataTables column identifier. In this case simple
    // indexes

    $columns = array(
        array(  'db' => 'users_id', 'dt' => 0 ),
        array(  'db' => 'username',  'dt' => 1 ),
        array(  'db' => 'email_users', 'dt' => 2),
        array(  'db' => 'saldo_eddcash', 'dt' => 3 ),
        // array( 'db' => 'nama_lengkap', 'dt' => 3 ),
        array(  'db' => 'saldo_eddcblockchain', 'dt' => 4 ),
        // array( 'db' => 'nama_bank', 'dt' => 5)
        array(  'db' => 'users_id',
                'dt' => 5,
                'formatter' => function($d, $row) {
                    return count_member($d);
                }),
        array(  'db' => 'users_id', 
                'dt' => 6,
                'formatter' => function($d, $row) {
                    return modal($d);
                } )
    );

 

    // SQL server connection information
    $sql_details = array(
     'user' => $userdb,
    'pass' => $passdb,
    'db'   => $dbselect,
    'host' => $host
    );

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
// $id = $_SESSION['user_id'];
echo json_encode(
    SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, "reff_id = '$user_id'")
);