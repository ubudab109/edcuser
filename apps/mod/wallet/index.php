<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="card-order">
                    <h6 class="mb-2">Saldo EDCCASH</h6>
                    <h2 class="text-right "><i
                                class="pe-7s-cash icon-size float-left text-primary text-primary-shadow"></i><span>
            <?= angka($rwusers['saldo_eddcash']) ?>
            </span></h2>
                    <p class="mb-0">Jumlah dalam Rupiah<span class="float-right">
            <?= rupiah($saldodalrupiah) ?>
            </span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card ">
            <div class="card-body">
                <div class="card-widget">
                    <h6 class="mb-2">Saldo EDCCB</h6>
                    <h2 class="text-right"><i
                                class="pe-7s-cash icon-size float-left text-success text-success-shadow"></i><span>
            <?= angka($saldoedccb) ?>
            </span></h2>
                    <p class="mb-0">Jumlah dalam Rupiah<span class="float-right">
            <?= rupiah($saldoedccbrupiah) ?>
            </span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="card-widget">
                    <h6 class="mb-2">Mining EDCCASH</h6>
                    <h2 class="text-right"><i
                                class="icon-size icon icon-energy   float-left text-warning text-warning-shadow"></i><span>
            <?= angka($saldominingedccash) ?>
            </span></h2>
                    <p class="mb-0">Ripening:<span class="float-right"><?= rippeningeddcash($_SESSION['user_id']) ?> EDCCASH</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card ">
            <div class="card-body">
                <div class="card-widget">
                    <h6 class="mb-2">Mining EDCCB</h6>
                    <h2 class="text-right"><i
                                class="icon icon-energy icon-size float-left text-danger text-danger-shadow"></i><span>
            <?= angka($saldominingedb) ?>
            </span></h2>
                    <p class="mb-0">Ripening:<span class="float-right">
            <?= rippeningeddccb($_SESSION['user_id']) ?>
            EDCCB</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
</div>
<div class="btn-list">
    <button type="button" data-toggle="modal" data-target="#topup" class="btn btn-primary"><i
                class="fe fe-credit-card mr-2"></i>Topup EDCCASH
    </button>
    <button type="button" data-toggle="modal" data-target="#deposit" class="btn btn-primary"><i
                class="icon icon-briefcase mr-2"></i>Deposit EDCCB
    </button>
    <button type="button" data-toggle="modal" data-target="#send" class="btn btn-primary"><i
                class="icon icon-briefcase mr-2"></i>Send/Withdraw EDCCB
    </button>
    <button type="button" data-toggle="modal" data-target="#jual" class="btn btn-primary"><i
                class="icon icon-briefcase mr-2"></i>Jual Saldo EDCCASH
    </button>
    <button type="button" data-toggle="modal" data-target="#beli" class="btn btn-primary"><i
                class="icon icon-briefcase mr-2"></i>Beli Saldo EDCCASH
    </button>
    <button type="button" data-toggle="modal" data-target="#tukar" class="btn btn-primary"><i
                class="fe fe-zap mr-2"></i>Pindah Mining <i class="ti-wallet mr-2"></i></button>
</div>

<?
$qutopup = "select * from topup where users_id = '$_SESSION[user_id]' and status_topup='Pending' ";
$rstopup = mysqli_query($con, $qutopup);
$rowcek = mysqli_num_rows($rstopup);

if ($rowcek > '0') {
    ?>
    <div class="row pt-2">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pending Topup</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-nowrap w-100">
                            <thead>
                            <tr>
                                <th class="wd-15p">Tanggal</th>
                                <th class="wd-15p">ID Transaksi</th>
                                <th class="wd-20p">Jenis Topup</th>
                                <th class="wd-15p">Jumlah Topup</th>
                                <th class="wd-15p">Fee</th>
                                <th class="wd-10p">Total Kirim</th>
                                <th class="text-center">Upload Bukti Trasfer</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            while ($rwtopup = mysqli_fetch_array($rstopup)) {
                                ?>
                                <tr>
                                    <td><?= tanggal($rwtopup['day_create']) ?></td>
                                    <td><?= $rwtopup['id_transaksi'] ?></td>
                                    <td><?= $rwtopup['jenis_topup'] ?></td>
                                    <td><?= angka($rwtopup['jumlah_topup']) ?></td>
                                    <td><?= angka($rwtopup['fee_topup']) ?></td>
                                    <td><?= angka($rwtopup['afterfee_topup']) ?></td>
                                    <td class="text-center">
                                        <? if ($rwtopup['foto_topup'] == '') {
                                            echo $hasil = "<button data-toggle='modal' data-target='#uploadtopup' onClick='uploadtopup($rwtopup[autono])' class='btn btn-warning text-primary btn-sm'>Upload</button>";
                                        } else {
                                            echo "File Berhasil di upload";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- TABLE WRAPPER -->
            </div>
            <!-- SECTION WRAPPER -->
        </div>
    </div>
    <?
}

$qubeli = "select * from beli_edccash where users_pengirim = '$_SESSION[user_id]' and status IN ('Pending','Approve Jual') ";
$rsbeli = mysqli_query($con, $qubeli);
$rowcek = mysqli_num_rows($rsbeli);

if ($rowcek > '0') {
    ?>
    <div class="row pt-2">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aproval Pembelian EDCCASH</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="belieddc" class="table table-striped table-bordered text-nowrap w-100">
                            <thead>
                            <tr>
                                <th class="wd-15p">Tanggal</th>
                                <th class="wd-15p">ID Transaksi</th>
                                <th class="wd-20p">ID Pengirim</th>
                                <th class="wd-15p">Total Beli</th>
                                <th class="wd-10p">Total Kirim</th>
                                <th class="wd-10p">Fee</th>
                                <th class="wd-25p">Bukti/Aproval</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?
                            while ($rwbeli = mysqli_fetch_array($rsbeli)) {
                                ?>
                                <tr>
                                    <td><?= tanggal($rwbeli['date_beli']) ?></td>
                                    <td><?= $rwbeli['id_transaksi'] ?></td>
                                    <td><?= $rwbeli['users_pengirim'] ?></td>
                                    <td><?= rupiah($rwbeli['jumlah_rupiah']) ?></td>
                                    <td><?= angka($rwbeli['before_fee']) ?></td>
                                    <td><?= angka($rwbeli['fee_transaksi']) ?></td>
                                    <td>
                                        <? if($rwbeli['status'] == 'Pending') { ?>
                                            <button data-toggle="modal" data-target="#approveJual"
                                                onClick="approve('<?= $rwbeli['autono'] ?>', '<?= $rwbeli['users_id'] ?>', '<?= $rwbeli['beli_by'] ?>','<?= $rwbeli['jumlah_rupiah'] ?>')"
                                                class='btn btn-warning text-primary btn-sm approve'>
                                                <!-- di ganti approve -->
                                                <span style="color: white;">Approve jual</span>
                                            </button>
                                        <? } else if ($rwbeli['status'] == 'Approve Jual') {
                                                if(!empty($rwbeli['foto_beli'])){
                                                    echo $hasil = "Sedang diproses Admin";
                                                }else{
                                                    echo $hasil = "Sedang menunggu proses transfer oleh pembeli";
                                                }
                                        } else {
                                            echo $hasil = "Pembayaran sedang di proses Admin";
                                        } ?>
                                    </td>
                                </tr>
                            <? } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- TABLE WRAPPER -->
            </div>
            <!-- SECTION WRAPPER -->
        </div>
    </div>
<? }
$qubeli = "select * from beli_edccash where users_id = '$_SESSION[user_id]' and status IN ('Pending', 'Approve Jual', 'Declined') ";
$rsbeli = mysqli_query($con, $qubeli);
$rowcek = mysqli_num_rows($rsbeli);

if ($rowcek > '0') {

    ?>
    <div class="row pt-2">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pending Beli EDCCASH</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="belieddc" class="table table-striped table-bordered text-nowrap w-100">
                            <thead>
                            <tr>
                                <th class="wd-15p">Tanggal</th>
                                <th class="wd-15p">ID Transaksi</th>
                                <th class="wd-20p">ID Pengirim</th>
                                <th class="wd-15p">Total Beli</th>
                                <th class="wd-10p">Total Diterima</th>
                                <th class="wd-10p">Fee</th>
                                <th class="wd-25p">Upload Bukti Trasfer</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($rwbeli = mysqli_fetch_array($rsbeli)) {
                                ?>
                                <tr>
                                    <td><?= tanggal($rwbeli['date_beli']) ?></td>
                                    <td><?= $rwbeli['id_transaksi'] ?></td>
                                    <td><?= $rwbeli['users_pengirim'] ?></td>
                                    <td><?= rupiah($rwbeli['jumlah_rupiah']) ?></td>
                                    <td><?= angka($rwbeli['after_fee']) ?></td>
                                    <td><?= angka($rwbeli['fee_transaksi']) ?></td>
                                    <td> 
                                        <? if ($rwbeli['status'] == 'Pending') {
                                            echo $hasil = "Menunggu Approve Penjual";
                                        } else if($rwbeli['status'] == 'Declined'){
                                            echo $hasil = "Pembelian ditolak";
                                        } 
                                        else if ($rwbeli['status'] == 'Approve Jual') {
                                                if(empty($rwbeli['foto_beli'])){
                                                    echo $hasil = "<button data-toggle='modal' data-target='#uploadbeli' onClick='uploadbeli($rwbeli[autono])' class='btn btn-warning text-primary btn-sm'>Upload</button>";
                                                }
                                                else{
                                                    echo $hasil = 'Sedang Diproses Admin';
                                                }
                                            
                                        } else {
                                            echo "File Berhasil di upload";
                                        }
                                        ?>   </td>
                                </tr>
                            <? } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- TABLE WRAPPER -->
            </div>
            <!-- SECTION WRAPPER -->
        </div>
    </div>
<? } ?>
<div class="row pt-2">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">History</h3>
            </div>
            <div class="card-body p-6">
                <div class="panel panel-primary">
                    <div class="tab_wrapper first_tab">
                        <ul class="tab_list">
                            <li>Data TOPUP</li>
                            <li>Data Jual Saldo</li>
                            <li>Data Beli Saldo</li>
                            <li>Data Pindah Mining</li>
                            <li>Data EDCCB</li>
                        </ul>
                        <div class="content_wrapper">
                            <div class="tab_content active">
                                <div class="table-responsive">
                                    <table id="datatopup" class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">Tanggal</th>
                                            <th class="wd-15p">ID Transaksi</th>
                                            <th class="wd-20p">Jenis Topup</th>
                                            <th class="wd-15p">Jumlah Topup</th>
                                            <th class="wd-15p">Fee</th>
                                            <th class="wd-10p">Total Kirim</th>
                                            <th class="wd-25p">Keterangan</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table id="datajual" class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">Tanggal</th>
                                            <th class="wd-15p">ID Transaksi</th>
                                            <th class="wd-20p">ID Penerima</th>
                                            <th class="wd-15p">Fee</th>
                                            <th class="wd-10p">Total Dikirim</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table id="databeli" class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">Tanggal</th>
                                            <th class="wd-15p">ID Transaksi</th>
                                            <th class="wd-20p">ID Pengirim</th>
                                            <th class="wd-15p">Total Beli</th>
                                            <th class="wd-10p">Total Diterima</th>
                                            <th class="wd-25p">Status</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table id="datatukar" class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">Tanggal</th>
                                            <th class="wd-15p">ID Transaksi</th>
                                            <th class="wd-20p">Jenis Aset</th>
                                            <th class="wd-15p">Jumlah Aset</th>
                                            <th class="wd-20p">Fee Infak + Server</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table id="dataedccb" class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">Tanggal</th>
                                            <th class="wd-15p">ID Transaksi</th>
                                            <th class="wd-20p">Alamat Address</th>
                                            <th class="wd-15p">Jumlah Aset</th>
                                            <th class="wd-20p">Status</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION WRAPPER -->
    </div>
</div>
<!-- ROW-1 CLOSED -->

<?php
$qublockchain = "select * from tx_pending where user_id = '$_SESSION[user_id]' and deleted='0' ";
$rsblockchain = mysqli_query($con, $qublockchain);
$row1cek = mysqli_num_rows($rsblockchain);

if ($row1cek > '0') {
    ?>
    <div class="row pt-2">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pending Deposit EDCCB</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="belieddc" class="table table-striped table-bordered text-nowrap w-100">
                            <thead>
                            <tr>
                                <th class="wd-15p">Tanggal</th>
                                <th class="wd-15p">tx id</th>
                                <th class="wd-20p">Address</th>
                                <th class="wd-15p">Balance</th>
                                <th class="wd-10p">Konfirmasi</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?
                            while ($rwblockchain = mysqli_fetch_array($rsblockchain)) {
                                ?>
                                <tr>
                                    <td><?= tanggal($rwblockchain['date_tx']) ?></td>
                                    <td><?= $rwblockchain['txid'] ?></td>
                                    <td><?= $rwblockchain['address'] ?></td>
                                    <td><?= angka($rwblockchain['balance']) ?></td>
                                    <td><?= $rwblockchain['confirmation'] ?>/5</td>

                                </tr>
                            <? } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- TABLE WRAPPER -->
            </div>
            <!-- SECTION WRAPPER -->
        </div>
    </div>
<? } ?>
<div class="row pt-2">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Saldo Keluar/Masuk</h3>
            </div>
            <div class="card-body p-6">
                <div class="panel panel-primary">
                    <div class="tab_wrapper first_tab">
                        <ul class="tab_list">
                            <li>Data SALDO MASUK</li>
                            <li>Data SALDO KELUAR</li>
                        </ul>
                        <div class="content_wrapper">
                            <div class="tab_content active">
                                <div class="table-responsive">
                                    <table id="saldo-masuk" class="table table-striped table-bordered text-nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">Tanggal</th>
                                        <th class="wd-15p">ID Transaksi</th>
                                        <th class="wd-20p">Jenis Saldo</th>
                                        <th class="wd-15p">TOTAL SALDO</th>
                                        <th class="wd-10p">Keterangan</th>

                                    </tr>
                                    </thead>
                                </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                <table id="saldo-keluar" class="table table-striped table-bordered text-nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">Tanggal</th>
                                        <th class="wd-15p">ID Transaksi</th>
                                        <th class="wd-20p">Jenis Saldo</th>
                                        <th class="wd-15p">TOTAL SALDO</th>
                                        <th class="wd-10p">Keterangan</th>

                                    </tr>
                                    </thead>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="card-body">
                <div class="table-responsive">
                    <table id="alltransaksi" class="table table-striped table-bordered text-nowrap w-100">
                        <thead>
                        <tr>
                            <th class="wd-15p">Tanggal</th>
                            <th class="wd-15p">ID Transaksi</th>
                            <th class="wd-20p">Jenis Saldo</th>
                            <th class="wd-15p">Saldo Masuk</th>
                            <th class="wd-15p">Saldo Keluar</th>
                            <th class="wd-10p">Keterangan</th>

                        </tr>
                        </thead>

                    </table>
                </div>
            </div> -->
            <!-- TABLE WRAPPER -->
        </div>
        <!-- SECTION WRAPPER -->
    </div>
</div>

<form action="index.php?menu=wallet&page=topup" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="topup" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TOPUP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="topup">Topup Dengan</label>
                        <select id="topupselec" name="topupselec" class="form-control "
                                data-placeholder="Pilih Pembayaran">
                            <option label="Pilih Pembayaran">Pilih Pembayaran</option>
                            <option value="voucherbtc">Voucher Bitcoin</option>
                            <option value="btc">Bitcoin</option>
                            <option value="prizm">Prizm</option>
                            <option value="edccb">EDCC Blockchain</option>
                        </select>
                    </div>
                    <div id="formtopup"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="modal fade" id="deposit" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">DEPOSIT EDCC BLOCKCHAIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Barcode</label>
                    <div class="col-md-5 col-6 mx-auto" id="qrcode"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Wallet EDCC Blockchain</label>
                    <input type="text" readonly class="form-control" id="edccbaddress" placeholder="address">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onClick="copyaddress()" class="btn btn-primary">Copy Address</button>
            </div>
        </div>
    </div>
</div>

<form action="index-menu-wallet-page-jual.html" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="jual" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">JUAL EDCCASH</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="saldoeddch">Jumlah Saldo EDCCASH</label>
                            <input type="text" readonly value="<?= number_format($saldoedccash) ?>" class="form-control"
                                   id="saldoeddch" placeholder="0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dalamrupiah">Jumlah Dalam Rupiah</label>
                            <input type="text" class="form-control" value="<?= number_format($saldodalrupiah) ?>"
                                   readonly id="dalamrupiah" placeholder="0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="makseddc">Jumlah EDCCASH Maksimum Dijual</label>
                            <input type="text" readonly value="<?= number_format($saldomaksedcc) ?>"
                                   class="form-control" id="makseddc" placeholder="0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="maksrupiah">Jumlah Maksimum Dalam Rupiah</label>
                            <input type="text" readonly value="<?= number_format($saldomaksidr) ?>" class="form-control"
                                   id="maksrupiah" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="membertujuan1">ID Member tujuan</label>
                        <input type="text" required class="form-control" id="membertujuan1" onChange="cekmember1()"
                               name="membertujuan" placeholder="Contoh: 12345678910">
                        <div id="error_member1"></div>
                    </div>
                    <div class="form-group">
                        <label for="jualidr">Jumlah Rupiah</label>
                        <input type="text" required min="1" max="<?= $saldomaksidr ?>" onKeyUp="jualedcc()"
                               class="form-control" name="jualidr" id="jualidr"
                               placeholder="Masukan jumlah Rupiah yang ingin dijual">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="feejual">Fee EDCCASH</label>
                            <input type="text" readonly class="form-control" id="feejual" name="feejual"
                                   placeholder="0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="feeidrjual">Fee Dalam IDR</label>
                            <input type="text" readonly class="form-control" id="feeidrjual" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="totjual">Total EDCCASH dijual</label>
                        <input type="text" readonly class="form-control" name="totjual" id="totjual" placeholder="0">
                    </div>
                    <label class="text-danger">Harap periksa ID Member tujuan anda pastikan sudah benar jika sudah di
                        kirim transaksi ini tidak bisa di batalkan!!!</label>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" required name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">OTP</label>
                        <input type="text" required name="otp_code" class="form-control" placeholder="Masukan OTP">
                        <br>
                        <button type="button" id="otp" class="btn btn-warning"
                                onClick="otpreq('<?= $_SESSION['user_id'] ?>')"> Request OTP
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn1" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="index-menu-wallet-page-beli.html" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="beli" tabindex="-1" role="dialog" aria-labelledby="beli" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">BELI EDCCASH</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="membertujuan2">ID Pemberi</label>
                        <input type="number" required class="form-control" name="membertujuan" onChange="cekmember2()"
                               id="membertujuan2" placeholder="Contoh: 12345678910">
                        <div id="error_member2"></div>
                    </div>
                    <div class="form-group">
                        <label for="beliidr">Jumlah Rupiah</label>
                        <input type="text" required min="1" onKeyUp="beliedcc()" class="form-control" name="beliidr"
                               id="beliidr" placeholder="Masukan jumlah Rupiah yang ingin dibeli">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="feebeli">Fee EDCCASH</label>
                            <input type="text" readonly class="form-control" name="feebeli" id="feebeli"
                                   placeholder="0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="feeidrbeli">Fee Dalam IDR</label>
                            <input type="text" readonly class="form-control" id="feeidrbeli" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="totbeli">Total EDCCASH Di Terima</label>
                        <input type="text" readonly class="form-control" name="totbeli" id="totbeli" placeholder="0">
                    </div>
                    <label class="text-danger">Harap periksa ID Member tujuan anda pastikan sudah benar jika sudah di
                        kirim transaksi ini tidak bisa di batalkan!!!</label>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" style="display:none" id="btn2" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="index-menu-wallet-page-tukar.html" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="tukar" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">PINDAH MINING </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tukarmining">Pilih Saldo Mining</label>
                        <select id="tukarmining" name="tukarmining" class="form-control">
                            <option>Pilih Saldo Mining</option>
                            <option value="edccash">Saldo Mining EDCCASH</option>
                            <option value="edccb">Saldo Mining EDCC BLOKCHAIN</option>
                        </select>
                    </div>
                    <div id="detailminig"></div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Pindah</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="index-menu-wallet-page-uploadtopup.html" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="uploadtopup" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload Bukti Pembayaran </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <input type="file" name="topupbuktibayar" id="topupbuktibayar" class="dropify"
                           data-allowed-file-extensions="jpg png" data-max-file-size="4M"/>
                    <input type="text" hidden="" id="transaksi" name="transaksi">
                    <div class="memmbername">Upload Bukti Pembayaran anda</div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submitupload" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="index-menu-wallet-page-uploadbeli.html" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="uploadbeli" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload Bukti Pembayaran </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <input type="file" name="belibuktibayar" id="belibuktibayar" class="dropify"
                           data-allowed-file-extensions="jpg png" data-max-file-size="4M"/>
                    <input type="text" hidden="" id="belitransaksi" name="belitransaksi">
                    <div class="memmbername">Upload Bukti Pembayaran anda</div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submituploadbeli" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="index-menu-wallet-page-aprove.html" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="approveJual" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Approval Beli EDCCASH
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <!-- <img id="fotobeli" src="" class="img-responsive"> -->
                    <div class="form-group">
                        <label for="usersPembeli" >ID Pembeli</label>
                        <input required id="usersPembeli" class="form-control" name="usersPembeli" type="text" readonly disabled>
                    </div>
                    <div class="form-group">
                        <label for="namaPembeli" >Nama Pembeli</label>
                        <input required id="namaPembeli" name="namaPembeli" class="form-control" type="text" readonly disabled>
                    </div>
                    <div class="form-group">
                        <label for="jumlahRupiah" >Jumlah Rupiah</label>
                        <input required id="jumlahRupiah" name="jumlahRupiah" class="form-control" type="text" readonly disabled>
                    </div>
                    <div class="form-group">
                        <label for="aprrovalJual" >Jumlah Rupiah</label>
                        <select name="approveJual" id="aprrovalJual" class="form-control">
                            <option value="Approve Jual">Terima</option>
                            <option value="Declined">Tolak</option>
                        </select>
                    </div>
                    <input required id="transbeli" name="transbeli" type="hidden">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Aprove</button>

                </div>
            </div>
        </div>
    </div>
</form>

<form action="index-menu-wallet-page-send.html" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="send" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">WITHDRAW/SEND EDCC BLOCKCHAIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="address">Address EDCC Blockchain</label>
                        <input type="text" required class="form-control" name="address" id="address"
                               placeholder="Contoh: EbzBvB3J6RTrPTLHJTMNRbHBbqvZDjXYUj">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="totaleddcc">Jumlah EDCC Blockchain</label>
                        <input type="text" required step=".001" class="form-control" onKeyUp="sendbalance()"
                               name="totaleddcc" id="totaleddcc" placeholder="0">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="feesend">Fee EDCC Blockchain</label>
                            <input type="text" required readonly class="form-control" name="feesend" id="feesend"
                                   placeholder="0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="feeidrsend">Fee Dalam IDR</label>
                            <input type="text" required readonly class="form-control" id="feeidrsend" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="totsend">Total yang dikirim</label>
                        <input type="text" readonly class="form-control" name="totsend" id="totsend" placeholder="0">
                    </div>
                    <label class="text-danger">Harap periksa alamat(Address EDCC Blockchain) tujuan anda pastikan sudah
                        benar jika sudah di kirim transaksi ini tidak bisa di batalkan!!!</label>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" required class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>

    var edccb_saldo = '<?=angka($saldoedccb)?>';

    function otpreq(id) {

        $.ajax({
            type: "POST",
            data: {data: id},
            url: "otp.php",
            success: function (data) {

                alert('OTP dikirim ke email anda');
                $('#otp').prop('disabled', true);
            }
        });
    }


    function cekmember1() {
        var id_member = $('#membertujuan1').val();
        if (id_member == "") {
            $("#error_member1").html("");
            $("#btn1").hide();
        } else {
            $.ajax({
                url: "mod/wallet/cek_member.php",
                type: "POST",
                dataType: "json",
                data: "id=" + id_member,
                success: (res) => {

                    if (res == 0) {
                        $("#error_member1").html(`<p class="text-danger">Member tidak terdaftar</p>`);
                        $("#btn1").hide();

                    } else {
                        $("#error_member1").html(`<p class="text-success">` + res.nama + `</p>`);
                        $("#btn1").show();
                    }
                }
            });
        }
    }

    function cekmember2() {
        var id_member2 = $('#membertujuan2').val();
        if (id_member2 == "") {
            $("#error_member2").html("");
            $("#btn2").hide();
        } else {
            $.ajax({
                url: "mod/wallet/cek_member.php",
                type: "POST",
                dataType: "json",
                data: "id=" + id_member2,
                success: (res) => {
                    if (res == 0) {
                        $("#error_member2").html(`<p class="text-danger">Member tidak terdaftar</p>`);
                        $("#btn2").hide();

                    } else {
                        $("#error_member2").html(`<p class="text-success">` + res.nama + `</p>`);
                        $("#btn2").show();
                    }
                }
            });
        }
    }

</script>


<script>
    $(document).ready(function () {
        var table = $('#dataedccb').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "mod/wallet/data/datawdsend.php",
            "order": [[0, "desc"]]

        });

    });

    // $(document).ready(function () {
    //     var table = $('#alltransaksi').DataTable({
    //         "processing": true,
    //         "serverSide": true,
    //         "deferRender": true,
    //         "ajax": "mod/wallet/data/allhistory.php",
    //         "order": [[0, "desc"]]

    //     });

    // });

    $(document).ready(function () {
        var table = $('#saldo-masuk').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": "mod/wallet/data/history_masuk.php",
            "order": [[0, "desc"]]

        });

    });

    $(document).ready(function () {
        var table = $('#saldo-keluar').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": "mod/wallet/data/history_keluar.php",
            "order": [[0, "desc"]]

        });

    });

    $(document).ready(function () {
        var table = $('#sendwd').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": "mod/wallet/data/datawdsend.php",
            "order": [[0, "desc"]]

        });

    });

    $(document).ready(function () {
        var table = $('#datatopup').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": "mod/wallet/data/datatopup.php",
            "order": [[0, "desc"]]

        });

    });

    $(document).ready(function () {
        var table = $('#datajual').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": "mod/wallet/data/datajual.php",
            "order": [[0, "desc"]]

        });

    });

    $(document).ready(function () {
        var table = $('#databeli').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": "mod/wallet/data/databeli.php",
            "order": [[0, "desc"]]

        });

    });

    $(document).ready(function () {
        var table = $('#datatukar').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": "mod/wallet/data/datatukar.php",
            "order": [[0, "desc"]]

        });

    });

    function approve(id, id_pembeli, nama_pembeli, jumlah_rupiah) {
        console.log(id_pembeli)
        $("#transbeli").val(id);
        $("#usersPembeli").val(id_pembeli);
        $("#namaPembeli").val(nama_pembeli)
        $("#jumlahRupiah").val(jumlah_rupiah)
        
    }

    function beliedcc() {

        var totalbeli = $("#beliidr").val();
        var eddcget = totalbeli / rateedccashidr;
        var feidr = totalbeli * feetransaksi;
        var feedcc = feidr / ratejualedccash;
        $("#totbeli").val(eddcget.toLocaleString("en-US"));
        $("#feeidrbeli").val(feidr.toLocaleString("en-US"));
        $("#feebeli").val(feedcc.toLocaleString("en-US"));

    }

    function jualedcc() {

        var totalbeli = $("#jualidr").val();
        var eddcget = totalbeli / ratejualedccash;
        var feidr = totalbeli * feetransaksi;
        var feedcc = feidr / ratejualedccash;
        $("#totjual").val(eddcget.toLocaleString("en-US"));
        $("#feeidrjual").val(feidr.toLocaleString("en-US"));
        $("#feejual").val(feedcc.toLocaleString("en-US"));

    }


    window.onload = function () {
        var adresscur = '<?=$wallet_edccb?>';

        $("#edccbaddress").val(adresscur);

        $('#qrcode').empty();
        new QRCode(document.getElementById("qrcode"), adresscur);

    }

    function copyaddress() {
        var copyText = document.getElementById("edccbaddress");
        copyText.select();
        document.execCommand("Copy");
        alert("address copied: " + copyText.value);
    }


    function uploadtopup(id) {
        $("#transaksi").val(id);
    }

    $("#topupbuktibayar").change(function () {

        $("#submitupload").show();
    });

    function uploadbeli(id) {
        $("#belitransaksi").val(id);
    }

    $("#belibuktibayar").change(function () {

        $("#submituploadbeli").show();
    });

    $("#tukarmining").change(function () {
        var jenis = $(this).val();
        $("#detailminig").empty().append();
        var tukaredccash = '<div class="form-group ">' +
            '<label for="saldoedccash">Jumlah Mining EDCCASH</label>' +
            '<input type="number" step=".001" name="saldotukar" class="form-control"   id="saldoedccash" />' +
            '</div>' +
            '</div>';

        var tukaredccb = '<div class="form-group ">' +
            '<label for="saldoblockcain">Jumlah Mining EDCC Blockchain</label>' +
            '<input type="number" step=".001" name="saldotukar" class="form-control"   id="saldoblockcain" />' +
            '</div>' +

            '</div>';
        if (jenis == 'edccash') {
            $("#detailminig").append(tukaredccash);
        } else if (jenis == 'edccb') {
            $("#detailminig").append(tukaredccb);
        }
    });

    $('#totaleddcc').keypress(function (event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $('#jualidr').keypress(function (event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $('#beliidr').keypress(function (event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
</script>
<script src="../assets/js/formwal.js"></script>