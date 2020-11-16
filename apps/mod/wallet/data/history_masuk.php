<?php
ini_set('display_errors', 1);
session_start();
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
require('../../../theme/fungsi.php');
// DB table to use
$table = 'history_masuk';

// Table's primary key
$primaryKey = 'autono';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(

    array(
        'db'        => 'date_transaksi',
        'dt'        => 0,
        'formatter' => function ($tanggal, $row) {
            return tanggal($tanggal);
        }
    ),

    array('db' => 'id_transaksi', 'dt' => 1),
    array('db' => 'jenis_saldo', 'dt' => 2),
    array(
        'db'        => 'total_saldo',
        'dt'        => 3,
        'formatter' => function ($paket, $row) {
            return angka($paket);
        }
    ),
    array('db' => 'keterangan', 'dt' => 4)
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

require('../../../theme/ssp.class.php');

echo json_encode(
    SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, "users_id = '$_SESSION[user_id]'")
);
