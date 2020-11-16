<?php

session_start();
include "../assets/dbconnect.php";
//   var_dump($_SESSION['user_id']);
$userId = $_SESSION['user_id'];
$qu_user = "SELECT * FROM users_edc WHERE users_id = '$userId'";
$rs_user = mysqli_query($con, $qu_user);
$rw_user = mysqli_fetch_array($rs_user);
if ($rw_user['no_ktp'] != null) {
	echo "<script>window.location.href = 'login.php'; alert('Anda Telah Melakukan Registrasi. Silahkan Tunggu Approval Admin')</script>";
	session_destroy();
}

?>
<!doctype html>
<html lang="en" dir="ltr">

<head>

	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="analytics dashboard, bootstrap 4 web app admin template, bootstrap admin panel, bootstrap admin template, bootstrap dashboard, bootstrap panel, Application dashboard design, dashboard design template, dashboard jquery clean html, dashboard template theme, dashboard responsive ui, html admin backend template ui kit, html flat dashboard template, it admin dashboard ui, premium modern html template">

	<!-- FILE UPLODE CSS -->
	<link href="../assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.png" />

	<!-- TITLE -->
	<title>Volgh – Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template</title>

	<!-- BOOTSTRAP CSS -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- STYLE CSS -->
	<link href="../assets/css/style.css" rel="stylesheet" />
	<link href="../assets/css/skin-modes.css" rel="stylesheet" />

	<!-- SIDE-MENU CSS -->
	<link href="../assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

	<!-- SINGLE-PAGE CSS -->
	<link href="../assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

	<!--C3 CHARTS CSS -->
	<link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

	<!-- CUSTOM SCROLL BAR CSS-->
	<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--- FONT-ICONS CSS -->
	<link href="../assets/css/icons.css" rel="stylesheet" />

	<!-- COLOR SKIN CSS -->
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body>

	<!-- BACKGROUND-IMAGE -->
	<div class="login-img">

		<!-- GLOABAL LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOABAL LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="">
				<!-- CONTAINER OPEN -->
				<div class="col-12 mx-auto my-5">
					<div class="text-center">
						<img src="../assets/images/brand/logo.png" alt="logo">
					</div>
				</div>
				<div class="container-fluid mt-3">
					<div class="col-lg-7 col-sm-12 col-12 mx-auto">
						<div class="card">
							<div class="card-header">
								<div class="col-12">
									<h4 class="d-inline">Detail Pendaftaran Member</h4>
									<a href="logout.php" class="btn btn-danger pull-right">Log out</a>
								</div>
							</div>
							<div class="card-body">

								<?php
								// DATA DIRI
								$user_id = $_SESSION['user_id'];
								$qu_user = "SELECT * FROM users_edc WHERE users_id='$user_id'";
								$rs_user = mysqli_query($con, $qu_user);
								$rw_user = mysqli_fetch_array($rs_user);

								$rw_user['jenis_kelamin'] == 0 ? $jenis_kelamin = "Laki-Laki" : $jenis_kelamin = "Perempuan";

								$date 	= date('d', strtotime($rw_user['tanggal_lahir']));
								$month 	= date('m', strtotime($rw_user['tanggal_lahir']));
								$year 	= date('Y', strtotime($rw_user['tanggal_lahir']));
								?>
								<div class="card">
									<div class="container-fluid py-5 px-5">
										<div class="row">
											<div class="col-12">
												<?php
												if (isset($_SESSION['info'])) {
													echo $_SESSION['info'];
													unset($_SESSION['info']);
												}
												?>
												<h4 class="text-center my-5">Identitas Diri</h4>
												<div class="form-group">
													<label for="nama_lengkap">Nama Lengkap</label>
													<input type="text" class="form-control" id="nama_lengkap" value="<?= $rw_user['nama_lengkap']; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="no_ktp">Nomor KTP</label>
													<input type="email" class="form-control" id="no_ktp" value="<?= $rw_user['no_ktp']; ?>" readonly>
												</div>
												<div class="form-group">
													<label class="form-label">Tanggal Lahir(Sesuai KTP)</label>
													<div class="row">
														<div class="col-md-4 my-2">
															<select class="form-control" disabled>
																<option value="0" <?= $date == "0" ? "selected" : ""; ?>>Date</option>
																<option value="1" <?= $date == "1" ? "selected" : ""; ?>>01</option>
																<option value="2" <?= $date == "2" ? "selected" : ""; ?>>02</option>
																<option value="3" <?= $date == "3" ? "selected" : ""; ?>>03</option>
																<option value="4" <?= $date == "4" ? "selected" : ""; ?>>04</option>
																<option value="5" <?= $date == "5" ? "selected" : ""; ?>>05</option>
																<option value="6" <?= $date == "6" ? "selected" : ""; ?>>06</option>
																<option value="7" <?= $date == "7" ? "selected" : ""; ?>>07</option>
																<option value="8" <?= $date == "8" ? "selected" : ""; ?>>08</option>
																<option value="9" <?= $date == "9" ? "selected" : ""; ?>>09</option>
																<option value="10" <?= $date == "10" ? "selected" : ""; ?>>10</option>
																<option value="11" <?= $date == "11" ? "selected" : ""; ?>>11</option>
																<option value="12" <?= $date == "12" ? "selected" : ""; ?>>12</option>
																<option value="13" <?= $date == "13" ? "selected" : ""; ?>>13</option>
																<option value="14" <?= $date == "14" ? "selected" : ""; ?>>14</option>
																<option value="15" <?= $date == "15" ? "selected" : ""; ?>>15</option>
																<option value="16" <?= $date == "16" ? "selected" : ""; ?>>16</option>
																<option value="17" <?= $date == "17" ? "selected" : ""; ?>>17</option>
																<option value="18" <?= $date == "18" ? "selected" : ""; ?>>18</option>
																<option value="19" <?= $date == "19" ? "selected" : ""; ?>>19</option>
																<option value="20" <?= $date == "20" ? "selected" : ""; ?>>20</option>
																<option value="21" <?= $date == "21" ? "selected" : ""; ?>>21</option>
																<option value="22" <?= $date == "22" ? "selected" : ""; ?>>22</option>
																<option value="23" <?= $date == "23" ? "selected" : ""; ?>>23</option>
																<option value="24" <?= $date == "24" ? "selected" : ""; ?>>24</option>
																<option value="25" <?= $date == "25" ? "selected" : ""; ?>>25</option>
																<option value="26" <?= $date == "26" ? "selected" : ""; ?>>26</option>
																<option value="27" <?= $date == "27" ? "selected" : ""; ?>>27</option>
																<option value="28" <?= $date == "28" ? "selected" : ""; ?>>28</option>
																<option value="29" <?= $date == "29" ? "selected" : ""; ?>>29</option>
																<option value="30" <?= $date == "30" ? "selected" : ""; ?>>30</option>
																<option value="31" <?= $date == "31" ? "selected" : ""; ?>>31</option>
															</select>
														</div>
														<div class="col-md-4 my-2">
															<select class="form-control" disabled>
																<option value="0" <?= $month == "0" ? "selected" : ""; ?>>Mon</option>
																<option value="1" <?= $month == "1" ? "selected" : ""; ?>>Jan</option>
																<option value="2" <?= $month == "2" ? "selected" : ""; ?>>Feb</option>
																<option value="3" <?= $month == "3" ? "selected" : ""; ?>>Mar</option>
																<option value="4" <?= $month == "4" ? "selected" : ""; ?>>Apr</option>
																<option value="5" <?= $month == "5" ? "selected" : ""; ?>>May</option>
																<option value="6" <?= $month == "6" ? "selected" : ""; ?>>June</option>
																<option value="7" <?= $month == "7" ? "selected" : ""; ?>>July</option>
																<option value="8" <?= $month == "8" ? "selected" : ""; ?>>Aug</option>
																<option value="9" <?= $month == "9" ? "selected" : ""; ?>>Sep</option>
																<option value="10" <?= $month == "10" ? "selected" : ""; ?>>Oct</option>
																<option value="11" <?= $month == "11" ? "selected" : ""; ?>>Nov</option>
																<option value="12" <?= $month == "12" ? "selected" : ""; ?>>Dec</option>
															</select>
														</div>
														<div class="col-md-4 my-2">
															<select class="form-control" disabled>
																<option value="0" <?= $year == "0" ? "selected" : ""; ?>>Year</option>
																<option value="2018" <?= $year == "2018" ? "selected" : ""; ?>>2018</option>
																<option value="2017" <?= $year == "2017" ? "selected" : ""; ?>>2017</option>
																<option value="2016" <?= $year == "2016" ? "selected" : ""; ?>>2016</option>
																<option value="2015" <?= $year == "2015" ? "selected" : ""; ?>>2015</option>
																<option value="2014" <?= $year == "2014" ? "selected" : ""; ?>>2014</option>
																<option value="2013" <?= $year == "2013" ? "selected" : ""; ?>>2013</option>
																<option value="2102" <?= $year == "2102" ? "selected" : ""; ?>>2102</option>
																<option value="2012" <?= $year == "2012" ? "selected" : ""; ?>>2012</option>
																<option value="2011" <?= $year == "2011" ? "selected" : ""; ?>>2011</option>
																<option value="2010" <?= $year == "2010" ? "selected" : ""; ?>>2010</option>
																<option value="2009" <?= $year == "2009" ? "selected" : ""; ?>>2009</option>
																<option value="2008" <?= $year == "2008" ? "selected" : ""; ?>>2008</option>
																<option value="2007" <?= $year == "2007" ? "selected" : ""; ?>>2007</option>
																<option value="2006" <?= $year == "2006" ? "selected" : ""; ?>>2006</option>
																<option value="2005" <?= $year == "2005" ? "selected" : ""; ?>>2005</option>
																<option value="2004" <?= $year == "2004" ? "selected" : ""; ?>>2004</option>
																<option value="2003" <?= $year == "2003" ? "selected" : ""; ?>>2003</option>
																<option value="2002" <?= $year == "2002" ? "selected" : ""; ?>>2002</option>
																<option value="2001" <?= $year == "2001" ? "selected" : ""; ?>>2001</option>
																<option value="1999" <?= $year == "1999" ? "selected" : ""; ?>>1999</option>
																<option value="1998" <?= $year == "1998" ? "selected" : ""; ?>>1998</option>
																<option value="1997" <?= $year == "1997" ? "selected" : ""; ?>>1997</option>
																<option value="1996" <?= $year == "1996" ? "selected" : ""; ?>>1996</option>
																<option value="1995" <?= $year == "1995" ? "selected" : ""; ?>>1995</option>
																<option value="1994" <?= $year == "1994" ? "selected" : ""; ?>>1994</option>
																<option value="1993" <?= $year == "1993" ? "selected" : ""; ?>>1993</option>
																<option value="1992" <?= $year == "1992" ? "selected" : ""; ?>>1992</option>
																<option value="1991" <?= $year == "1991" ? "selected" : ""; ?>>1991</option>
																<option value="1990" <?= $year == "1990" ? "selected" : ""; ?>>1990</option>
																<option value="1989" <?= $year == "1989" ? "selected" : ""; ?>>1989</option>
																<option value="1988" <?= $year == "1988" ? "selected" : ""; ?>>1988</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="jenis_kelamin">Jenis Kelamin</label>
													<input type="text" class="form-control" id="jenis_kelamin" value="<?= $jenis_kelamin; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="alamat">Alamat</label>
													<textarea class="form-control" id="alamat" rows="3" readonly><?= $rw_user['alamat']; ?></textarea>
												</div>
												<div class="form-group">
													<label for="no_hp">Nomor Handphone</label>
													<input type="number" class="form-control" id="no_hp" value="<?= $rw_user['no_hp']; ?>" readonly>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="container py-5 px-5">
										<div class="row">
											<div class="col-12">
												<h4 class="text-center my-5">Data Bank</h4>
												<div class="form-group">
													<label for="nama_bank">Nama Bank</label>
													<input type="text" class="form-control" id="nama_bank" value="<?= $rw_user['nama_bank']; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="cabang">Cabang</label>
													<input type="text" class="form-control" id="cabang" value="<?= $rw_user['cabang_bank']; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="pemilik_rekening">Pemilik Rekening</label>
													<input type="text" class="form-control" id="pemilik_rekening" value="<?= $rw_user['pemilik_rekening']; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="nomor_rekening">Nomor Rekening</label>
													<input type="text" class="form-control" id="nomor_rekening" value="<?= $rw_user['nomor_rekening']; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="swift_code">Swift Code</label>
													<input type="text" class="form-control" id="swift_code" value="<?= $rw_user['swift_code']; ?>" readonly>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="container py-5 px-5">
										<div class="row">
											<div class="col-12">
												<h4 class="text-center my-5">Upload Dokumen</h4>
												<div class="row my-5">
													<div class="col-md-5 col-sm-10 pl-1 pr-1 m-t-5 m-b-5 mx-auto my-5">
														<a href="#" class="member">
															<img src="../assets/images/uploads/ktp/<?= $rw_user['foto_ktp']; ?>" alt="" height="198px">
															<div class="memmbername">KTP</div>
														</a>
													</div>
													<div class="col-md-5 col-sm-10 pl-1 pr-1 m-t-5 m-b-5 mx-auto my-5">
														<a href="#" class="member">
															<img src="../assets/images/uploads/selfie/<?= $rw_user['foto_selfie']; ?>" alt="" height="198px">
															<div class="memmbername">Selfie</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


								<?php
								$qu_regis = "SELECT * FROM pembayaran_register WHERE users_id='$user_id'";
								$rs_regis = mysqli_query($con, $qu_regis);
								$rw_regis = mysqli_fetch_array($rs_regis);
								?>

								<div class="card">
									<div class="container py-5 px-5">
										<div class="row">
											<div class="col-12">
												<h4 class="text-center my-5">Pembayaran Register</h4>
												<div class="form-group">
													<label for="topup">Topup Dengan</label>
													<select id="topupselec2" class="form-control" data-placeholder="Pilih Pembayaran" required disabled>
														<!-- <option label="Pilih Pembayaran"></option> -->
														<option value="eddccash" <?= $rw_regis['jenis_topup'] == "eddccash" ? "selected" : ""; ?>>EDCCASH Voucher (instant)</option>
														<option value="voucherbtc" <?= $rw_regis['jenis_topup'] == "voucherbtc" ? "selected" : ""; ?>>Voucher Bitcoin</option>
														<option value="btc" <?= $rw_regis['jenis_topup'] == "btc" ? "selected" : ""; ?>>Bitcoin</option>
														<option value="prizm" <?= $rw_regis['jenis_topup'] == "prizm" ? "selected" : ""; ?>>Prizm</option>
														<option value="edccb" <?= $rw_regis['jenis_topup'] == "edccb" ? "selected" : ""; ?>>EDCC Blockchain</option>
													</select>
												</div>
												<div id="formtopup2"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="container py-5 px-5">
										<div class="row">
											<div class="col-12">
												<h4 class="text-center my-5">Bukti Pembayaran</h4>
												<div class="row my-5">
													<div class="col-md-5 col-sm-10 pl-1 pr-1 m-t-5 m-b-5 mx-auto my-5">
														<a href="#" class="member">
															<img src="../assets/images/uploads/bukti/<?= $rw_regis['bukti_bayar'] ?>" alt="" height="198px">
															<div class="memmbername">Bukti Bayar</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-info pull-right" data-toggle='modal' data-target='#modal-default'>Ubah Data</a>
							</div>
						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
		</div>
		<!-- END PAGE -->


		<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
			<div class="modal-dialog modal-lg" id="modal-dialog">
				<form method="post" action="ubah_data_regis.php" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Edit Data</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" id="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12 col-md-12">
										<div class="card">
											<div class="container-fluid py-5 px-5">
												<div class="row">
													<div class="col-12">
														<h4 class="text-center my-5">Identitas Diri</h4>
														<div class="form-group">
															<label for="nama_lengkap">Nama Lengkap</label>
															<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $rw_user['nama_lengkap']; ?>">
														</div>
														<div class="form-group">
															<label for="no_ktp">Nomor KTP</label>
															<input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?= $rw_user['no_ktp']; ?>">
														</div>
														<div class="form-group">
															<label class="form-label">Tanggal Lahir(Sesuai KTP)</label>
															<div class="row">
																<div class="col-md-4 my-2">
																	<select class="form-control" name="tanggal">
																		<option value="0" <?= $date == "0" ? "selected" : ""; ?>>Date</option>
																		<option value="1" <?= $date == "1" ? "selected" : ""; ?>>01</option>
																		<option value="2" <?= $date == "2" ? "selected" : ""; ?>>02</option>
																		<option value="3" <?= $date == "3" ? "selected" : ""; ?>>03</option>
																		<option value="4" <?= $date == "4" ? "selected" : ""; ?>>04</option>
																		<option value="5" <?= $date == "5" ? "selected" : ""; ?>>05</option>
																		<option value="6" <?= $date == "6" ? "selected" : ""; ?>>06</option>
																		<option value="7" <?= $date == "7" ? "selected" : ""; ?>>07</option>
																		<option value="8" <?= $date == "8" ? "selected" : ""; ?>>08</option>
																		<option value="9" <?= $date == "9" ? "selected" : ""; ?>>09</option>
																		<option value="10" <?= $date == "10" ? "selected" : ""; ?>>10</option>
																		<option value="11" <?= $date == "11" ? "selected" : ""; ?>>11</option>
																		<option value="12" <?= $date == "12" ? "selected" : ""; ?>>12</option>
																		<option value="13" <?= $date == "13" ? "selected" : ""; ?>>13</option>
																		<option value="14" <?= $date == "14" ? "selected" : ""; ?>>14</option>
																		<option value="15" <?= $date == "15" ? "selected" : ""; ?>>15</option>
																		<option value="16" <?= $date == "16" ? "selected" : ""; ?>>16</option>
																		<option value="17" <?= $date == "17" ? "selected" : ""; ?>>17</option>
																		<option value="18" <?= $date == "18" ? "selected" : ""; ?>>18</option>
																		<option value="19" <?= $date == "19" ? "selected" : ""; ?>>19</option>
																		<option value="20" <?= $date == "20" ? "selected" : ""; ?>>20</option>
																		<option value="21" <?= $date == "21" ? "selected" : ""; ?>>21</option>
																		<option value="22" <?= $date == "22" ? "selected" : ""; ?>>22</option>
																		<option value="23" <?= $date == "23" ? "selected" : ""; ?>>23</option>
																		<option value="24" <?= $date == "24" ? "selected" : ""; ?>>24</option>
																		<option value="25" <?= $date == "25" ? "selected" : ""; ?>>25</option>
																		<option value="26" <?= $date == "26" ? "selected" : ""; ?>>26</option>
																		<option value="27" <?= $date == "27" ? "selected" : ""; ?>>27</option>
																		<option value="28" <?= $date == "28" ? "selected" : ""; ?>>28</option>
																		<option value="29" <?= $date == "29" ? "selected" : ""; ?>>29</option>
																		<option value="30" <?= $date == "30" ? "selected" : ""; ?>>30</option>
																		<option value="31" <?= $date == "31" ? "selected" : ""; ?>>31</option>
																	</select>
																</div>
																<div class="col-md-4 my-2">
																	<select class="form-control" name="bulan">
																		<option value="0" <?= $month == "0" ? "selected" : ""; ?>>Mon</option>
																		<option value="1" <?= $month == "1" ? "selected" : ""; ?>>Jan</option>
																		<option value="2" <?= $month == "2" ? "selected" : ""; ?>>Feb</option>
																		<option value="3" <?= $month == "3" ? "selected" : ""; ?>>Mar</option>
																		<option value="4" <?= $month == "4" ? "selected" : ""; ?>>Apr</option>
																		<option value="5" <?= $month == "5" ? "selected" : ""; ?>>May</option>
																		<option value="6" <?= $month == "6" ? "selected" : ""; ?>>June</option>
																		<option value="7" <?= $month == "7" ? "selected" : ""; ?>>July</option>
																		<option value="8" <?= $month == "8" ? "selected" : ""; ?>>Aug</option>
																		<option value="9" <?= $month == "9" ? "selected" : ""; ?>>Sep</option>
																		<option value="10" <?= $month == "10" ? "selected" : ""; ?>>Oct</option>
																		<option value="11" <?= $month == "11" ? "selected" : ""; ?>>Nov</option>
																		<option value="12" <?= $month == "12" ? "selected" : ""; ?>>Dec</option>
																	</select>
																</div>
																<div class="col-md-4 my-2">
																	<select class="form-control" name="tahun">
																		<option value="0" hidden selected>Year</option>
																		<?php
																		for ($i = date('Y'); $i >= date('Y') - 80; $i -= 1) {
																			echo "<option value='$i'> $i </option>";
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="jenis_kelamin">Jenis Kelamin</label>
															<div class="col-md-4">
																<select class="form-control" name="jenis_kelamin">
																	<option value="Laki-laki" <?= $jenis_kelamin == "Laki-laki" ? "selected" : ""; ?>>Laki-Laki</option>
																	<option value="Perempuan" <?= $jenis_kelamin == "Perempuan" ? "selected" : ""; ?>>Perempuan</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="alamat">Alamat</label>
															<textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $rw_user['alamat']; ?></textarea>
														</div>
														<div class="form-group">
															<label for="no_hp">Nomor Handphone</label>
															<input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= $rw_user['no_hp']; ?>">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="container py-5 px-5">
												<div class="row">
													<div class="col-12">
														<h4 class="text-center my-5">Data Bank</h4>
														<div class="form-group">
															<label for="nama_bank">Nama Bank</label>
															<input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?= $rw_user['nama_bank']; ?>">
														</div>
														<div class="form-group">
															<label for="cabang">Cabang</label>
															<input type="text" class="form-control" id="cabang" name="cabang_bank" value="<?= $rw_user['cabang_bank']; ?>">
														</div>
														<div class="form-group">
															<label for="pemilik_rekening">Pemilik Rekening</label>
															<input type="text" class="form-control" id="pemilik_rekening" name="pemilik_rekening" value="<?= $rw_user['pemilik_rekening']; ?>">
														</div>
														<div class="form-group">
															<label for="nomor_rekening">Nomor Rekening</label>
															<input type="text" class="form-control" id="nomor_rekening" name="nomor_rekening" value="<?= $rw_user['nomor_rekening']; ?>">
														</div>
														<div class="form-group">
															<label for="swift_code">Swift Code</label>
															<input type="text" class="form-control" id="swift_code" name="swift_code" value="<?= $rw_user['swift_code']; ?>">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="container py-5 px-5">
												<div class="row">
													<div class="col-12">
														<h4 class="text-center my-5">Upload Dokumen</h4>
														<div class="row my-5">
															<div class="col-md-5 col-sm-10 pl-1 pr-1 m-t-5 m-b-5 mx-auto my-5">
																<a href="#" class="member">
																	<img src="../assets/images/uploads/ktp/<?= $rw_user['foto_ktp']; ?>" alt="" height="198px">
																	<div class="memmbername">KTP</div>
																	<input type="file" class="dropify" data-max-file-size="1M" name="foto_ktp" />
																	<div class="memmbername">KTP</div>
																</a>
															</div>
															<div class="col-md-5 col-sm-10 pl-1 pr-1 m-t-5 m-b-5 mx-auto my-5">
																<a href="#" class="member">
																	<img src="../assets/images/uploads/selfie/<?= $rw_user['foto_selfie']; ?>" alt="" height="198px">
																	<div class="memmbername">Selfie</div>
																	<input type="file" class="dropify" data-max-file-size="1M" name="foto_selfie" />
																	<div class="memmbername">Selfie</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="container py-5 px-5">
												<div class="row">
													<div class="col-12">
														<h4 class="text-center my-5">Pembayaran Register</h4>
														<div class="form-group">
															<label for="topup">Topup Dengan</label>
															<select id="topupselec" class="form-control" name="topup_select" data-placeholder="Pilih Pembayaran" required>
																<!-- <option label="Pilih Pembayaran"></option> -->
																<option value="eddccash" <?= $rw_regis['jenis_topup'] == "eddccash" ? "selected" : ""; ?>>EDCCASH Voucher (instant)</option>
																<option value="voucherbtc" <?= $rw_regis['jenis_topup'] == "voucherbtc" ? "selected" : ""; ?>>Voucher Bitcoin</option>
																<option value="btc" <?= $rw_regis['jenis_topup'] == "btc" ? "selected" : ""; ?>>Bitcoin</option>
																<option value="prizm" <?= $rw_regis['jenis_topup'] == "prizm" ? "selected" : ""; ?>>Prizm</option>
																<option value="edccb" <?= $rw_regis['jenis_topup'] == "edccb" ? "selected" : ""; ?>>EDCC Blockchain</option>
															</select>
														</div>
														<div id="formtopup"></div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="container py-5 px-5">
												<div class="row">
													<div class="col-12">
														<h4 class="text-center my-5">Bukti Pembayaran</h4>
														<div class="row my-5">
															<div class="col-md-5 col-sm-10 pl-1 pr-1 m-t-5 m-b-5 mx-auto my-5">
																<a href="#" class="member">
																	<img src="../assets/images/uploads/bukti/<?= $rw_regis['bukti_bayar'] ?>" alt="" height="198px">
																	<div class="memmbername">Bukti Bayar</div>
																	<input type="file" class="dropify" data-max-file-size="1M" name="bukti_bayar" />
																	<div class="memmbername">Bukti Bayar</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-success pull-left" id="form_button">Submit</button>
						</div>
					</div>
				</form>
				<!-- /.modal-content -->
			</div>
		</div>
		<!-- /.modal-dialog -->



	</div>
	<!-- BACKGROUND-IMAGE CLOSED -->

	<!-- JQUERY JS -->
	<script src="../assets/js/jquery-3.4.1.min.js"></script>

	<!-- BOOTSTRAP JS -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>

	<!-- CHART-CIRCLE JS -->
	<script src="../assets/js/circle-progress.min.js"></script>

	<!-- RATING STAR JS -->
	<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

	<!-- INPUT MASK JS -->
	<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

	<!-- CUSTOM SCROLL BAR JS-->
	<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- CUSTOM JS-->
	<script src="../assets/js/custom.js"></script>


	<!-- FILE UPLOADES JS -->
	<script src="../assets/plugins/fileuploads/js/fileupload.js"></script>
	<script src="../assets/plugins/fileuploads/js/file-upload.js"></script>


	<?php
	// VOUCHER BTC
	$qu_voucherbtc		= "SELECT * FROM setting_address WHERE jenis_aset='voucherbtc'";
	$rs_voucherbtc		= mysqli_query($con, $qu_voucherbtc);
	$rw_voucherbtc		= mysqli_fetch_array($rs_voucherbtc);
	$email_voucher		= $rw_voucherbtc['email_aset'];

	// BTC
	$qu_btc		= "SELECT * FROM setting_address WHERE jenis_aset='btc'";
	$rs_btc		= mysqli_query($con, $qu_btc);
	$rw_btc		= mysqli_fetch_array($rs_btc);
	$alamat_btc	= $rw_btc['alamat_aset'];

	// PRIZM
	$qu_prizm		= "SELECT * FROM setting_address WHERE jenis_aset='prizm'";
	$rs_prizm		= mysqli_query($con, $qu_prizm);
	$rw_prizm		= mysqli_fetch_array($rs_prizm);
	$alamat_prizm	= $rw_prizm['alamat_aset'];
	$public_key		= $rw_prizm['public_key'];

	// EDCB
	$qu_edccb		= "SELECT * FROM setting_address WHERE jenis_aset='edccb'";
	$rs_edccb		= mysqli_query($con, $qu_edccb);
	$rw_edccb		= mysqli_fetch_array($rs_edccb);
	$alamat_edccb	= $rw_edccb['alamat_aset'];

	?>


	<script>
		if ($("#topupselec option:selected").val() == "btc") {

			$("#formtopup").append(`<div class="form-group" />
          				<label for="exampleInputEmail1">Alamat Bitcoin</label>
          				<input type="text" class="form-control" value="1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX" name="alamat_btc" id="exampleInputEmail1" placeholder="Nomor Voucher Bitcoin" value="<? $alamat_btc ?>" readonly required />
        			</div>
            		<div class="form-group" />
          				<label for="exampleInputEmail1">Jumlah BTC</label>
          				<input type="text" class="form-control" value="0.345" id="exampleInputEmail1" name="jumlah_topup" placeholder="Nomor Voucher Bitcoin" value="<?= $rw_regis['jumlah_topup'] ?>" required />
					</div>`);

		} else if ($("#topupselec option:selected").val() == "eddccash") {

			$("#formtopup").append(`<div class="form-group" />
        		  		<label for="exampleInputEmail1">No Voucher</label>
        		  		<input type="text" class="form-control" id="voucher_edccash" name="no_voucher" placeholder="Nomor Voucher EDCCASH" value="<?= $rw_regis['no_voucher'] ?>" required />
					</div>`);

		} else if ($("#topupselec option:selected").val() == "voucherbtc") {

			$("#formtopup").append(`<div class="form-group" />
          				<label for="exampleInputEmail1">Alamat email Tujuan Voucher</label>
          				<input type="text" class="form-control" value="<?= $email_voucher ?>" id="exampleInputEmail1" name="email_tujuan" placeholder="Nomor Voucher Bitcoin" readonly required />
        			</div>
            		<div class="form-group" />
          				<label for="exampleInputEmail1">No Voucher</label>
          				<input type="text" class="form-control" id="exampleInputEmail1" name="no_voucher" placeholder="Nomor Voucher Bitcoin" value="<?= $rw_regis['no_voucher'] ?>" required />
        			</div>`);
		} else if ($("#topupselec option:selected").val() == "prizm") {
			$("#formtopup").append(`
					<div class="form-group">
          				<label for="exampleInputEmail1">Adress PRIZM</label>
          				<input type="text" class="form-control" readonly value="<?= $alamat_prizm ?>" id="exampleInputEmail1" />
        			</div>
            		<div class="form-group ">
          				<label for="exampleInputEmail1">Public Key PRIZM</label>
          				<input type="text" class="form-control" readonly value="<?= $public_key ?>" id="exampleInputEmail1" />
        			</div>
            		<div class="form-group">
          				<label for="exampleInputEmail1">Jumlah PRIZM</label>
          				<input type="number" class="form-control" onKeyUp="rateprizm()" name="jumlah_topup"  id="totalprizm" value="<?= $rw_regis['jumlah_topup'] ?>" required />
        			</div>
        			<div class="form-group">
          				<label for="exampleInputEmail1">Jumlah EDCCASH</label>
          				<input type="text" class="form-control" readonly name="totaleddcc" id="totaleddcc" placeholder="0" />
        			</div>
        			<div class="form-row">
        				<div class="form-group col-md-6">
          					<label for="exampleInputEmail1">FEE IDR</label>
          					<input type="text" class="form-control" readonly name="feeidr" id="feeidr" placeholder="0" />
        				</div>
            			<div class="form-group col-md-6">
          					<label for="exampleInputEmail1">FEE EDCCASH</label>
          					<input type="text" class="form-control" readonly name="feeedc"  id="feeedc" placeholder="0" />
        				</div>
					</div>
				`);
		} else if ($("#topupselec option:selected").val() == "edccb") {
			$("#formtopup").append(`
					<div class="form-group" />
          				<label for="exampleInputEmail1">Alamat EDCCB</label>
          				<input type="text" class="form-control" value="<?= $alamat_edccb ?>" name="alamat_btc" id="exampleInputEmail1" placeholder="Alamat EDCCB" readonly required />
        			</div>
            		<div class="form-group" />
          				<label for="exampleInputEmail1">Jumlah EDCCB</label>
          				<input type="text" class="form-control" value="<?= $rw_regis['jumlah_topup'] ?>" id="exampleInputEmail1" name="jumlah_topup" placeholder="Jumlah EDCC Blockchain" required />
        			</div>
				`)
		}

		$("#topupselec").change(function() {
			var jenis = $(this).val();
			$("#formtopup").empty().append();
			var vbtcform = '<div class="form-group" />' +
				'<label for="exampleInputEmail1">Alamat email Tujuan Voucher</label>' +
				'<input type="text" class="form-control" readonly value="<?= $email_voucher ?>" id="exampleInputEmail1" name="email_tujuan" placeholder="Nomor Voucher Bitcoin" required />' +
				'</div>' +
				'<div class="form-group" />' +
				'<label for="exampleInputEmail1">No Voucher</label>' +
				'<input type="text" class="form-control" id="exampleInputEmail1" name="no_voucher" placeholder="Nomor Voucher Bitcoin" required />' +
				'</div>';
			var btcform = '<div class="form-group" />' +
				'<label for="exampleInputEmail1">Alamat Bitcoin</label>' +
				'<input type="text" class="form-control" value="<?= $alamat_btc ?>" name="alamat_btc" id="exampleInputEmail1" placeholder="Nomor Voucher Bitcoin" readonly required />' +
				'</div>' +
				'<div class="form-group" />' +
				'<label for="exampleInputEmail1">Jumlah BTC</label>' +
				'<input type="text" class="form-control" value="0.345" id="exampleInputEmail1" name="jumlah_topup" placeholder="Nomor Voucher Bitcoin" required />' +
				'</div>';
			var edcvform = '<div class="form-group" />' +
				'<label for="exampleInputEmail1">No Voucher</label>' +
				'<input type="text" class="form-control" id="voucher_edccash" name="no_voucher" placeholder="Nomor Voucher EDCCASH" required />' +
				'<small id="error_voucher"></small>' +
				'</div>';
			var prizmform = '<div class="form-group ">' +
				'<label for="exampleInputEmail1">Adress PRIZM</label>' +
				'<input type="text" class="form-control" readonly value="<?= $alamat_prizm ?>" id="exampleInputEmail1" />' +
				'</div>' +
				'<div class="form-group ">' +
				'<label for="exampleInputEmail1">Public Key PRIZM</label>' +
				'<input type="text" class="form-control" readonly value="<?= $public_key ?>" id="exampleInputEmail1" />' +
				'</div>' +
				'<div class="form-group">' +
				'<label for="exampleInputEmail1">Jumlah PRIZM</label>' +
				'<input type="number" class="form-control" onKeyUp="rateprizm()" name="jumlah_topup"  id="totalprizm" placeholder="0" />' +
				'</div>' +
				'<div class="form-group">' +
				'<label for="exampleInputEmail1">Jumlah EDCCASH</label>' +
				'<input type="text" class="form-control" readonly name="totaleddcc" id="totaleddcc" placeholder="0" />' +
				'</div>' +
				'<div class="form-row">' +

				'<div class="form-group col-md-6">' +
				'<label for="exampleInputEmail1">FEE IDR</label>' +
				'<input type="text" class="form-control" readonly name="feeidr" id="feeidr" placeholder="0" />' +
				'</div>' +
				'<div class="form-group col-md-6">' +
				'<label for="exampleInputEmail1">FEE EDCCASH</label>' +
				'<input type="text" class="form-control" readonly name="feeedc"  id="feeedc" placeholder="0" />' +
				'</div>' +
				'</div>';
			var edcform = '<div class="form-group" />' +
				'<label for="exampleInputEmail1">Alamat EDCCB</label>' +
				'<input type="text" class="form-control" value="<?= $alamat_edccb ?>" name="alamat_btc" id="exampleInputEmail1" placeholder="Alamat EDCCB" readonly required />' +
				'</div>' +
				'<div class="form-group" />' +
				'<label for="exampleInputEmail1">Jumlah EDCCB</label>' +
				'<input type="text" class="form-control" value="0.345" id="exampleInputEmail1" name="jumlah_topup" placeholder="Jumlah EDCC Blockchain" required />' +
				'</div>';

			if (jenis == 'btc') {
				$("#formtopup").append(btcform);
			} else if (jenis == 'eddccash') {
				$("#formtopup").append(edcvform);
				$("#form_button").hide();
			} else if (jenis == 'voucherbtc') {
				$("#formtopup").append(vbtcform);
			} else if (jenis == 'prizm') {
				$("#formtopup").append(prizmform);
			} else if (jenis == 'edccb') {
				$("#formtopup").append(edcform);
			}

			$("#voucher_edccash").keyup(() => {
				var voucher = $('#voucher_edccash').val();
				if (voucher == "") {
					$("#error_voucher").html("");
					$("#form_button").hide();
				} else {
					$.ajax({
						url: "cek_voucher.php",
						type: "POST",
						data: "voucher=" + voucher,
						success: (res) => {
							if (res == 0) {
								$("#error_voucher").html(`<p class="text-success">Voucher bisa digunakan.</p>`);
								$("#form_button").show();
							} else if (res == 1) {
								$("#error_voucher").html(`<p class="text-danger">Voucher sudah digunakan, silahkan gunakan voucher lain.</p>`);
								$("#form_button").hide();
							} else if (res == 2) {
								$("#error_voucher").html(`<p class="text-danger">Kode voucher salah.</p>`);
								$("#form_button").hide();
							}
						}
					});
				}
			});

		});


		if ($("#topupselec2 option:selected").val() == "btc") {

			$("#formtopup2").append(`<div class="form-group" />
          				<label for="exampleInputEmail1">Alamat Bitcoin</label>
          				<input type="text" class="form-control" value="1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX" id="exampleInputEmail1" placeholder="Nomor Voucher Bitcoin" value="<?= $alamat_btc ?>" readonly />
        			</div>
            		<div class="form-group" />
          				<label for="exampleInputEmail1">Jumlah BTC</label>
          				<input type="text" class="form-control" value="0.345" id="exampleInputEmail1" placeholder="Nomor Voucher Bitcoin" value="<?= $rw_regis['jumlah_topup'] ?>" readonly />
					</div>`);

		} else if ($("#topupselec2 option:selected").val() == "eddccash") {

			$("#formtopup2").append(`<div class="form-group" />
        		  		<label for="exampleInputEmail1">No Voucher</label>
        		  		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Voucher EDCCASH" value="<?= $rw_regis['no_voucher'] ?>" readonly />
					</div>`);

		} else if ($("#topupselec2 option:selected").val() == "voucherbtc") {

			$("#formtopup2").append(`<div class="form-group" />
          				<label for="exampleInputEmail1">Alamat email Tujuan Voucher</label>
          				<input type="text" class="form-control" value="<?= $email_voucher ?>" id="exampleInputEmail1" placeholder="Nomor Voucher Bitcoin" readonly />
        			</div>
            		<div class="form-group" />
          				<label for="exampleInputEmail1">No Voucher</label>
          				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Voucher Bitcoin" value="<?= $rw_regis['no_voucher'] ?>" readonly />
					</div>`);

		} else if ($("#topupselec2 option:selected").val() == "prizm") {
			$("#formtopup2").append(`
					<div class="form-group">
          				<label for="exampleInputEmail1">Adress PRIZM</label>
          				<input type="text" class="form-control" readonly value="<?= $alamat_prizm ?>" id="exampleInputEmail1" />
        			</div>
            		<div class="form-group ">
          				<label for="exampleInputEmail1">Public Key PRIZM</label>
          				<input type="text" class="form-control" readonly value="<?= $public_key ?>" id="exampleInputEmail1" />
        			</div>
            		<div class="form-group">
          				<label for="exampleInputEmail1">Jumlah PRIZM</label>
          				<input type="number" class="form-control" onKeyUp="rateprizm()" id="totalprizm" value="<?= $rw_regis['jumlah_topup'] ?>" readonly />
        			</div>
        			<div class="form-group">
          				<label for="exampleInputEmail1">Jumlah EDCCASH</label>
          				<input type="text" class="form-control" readonly name="totaleddcc" id="totaleddcc" placeholder="0" />
        			</div>
        			<div class="form-row">
        				<div class="form-group col-md-6">
          					<label for="exampleInputEmail1">FEE IDR</label>
          					<input type="text" class="form-control" readonly name="feeidr" id="feeidr" placeholder="0" />
        				</div>
            			<div class="form-group col-md-6">
          					<label for="exampleInputEmail1">FEE EDCCASH</label>
          					<input type="text" class="form-control" readonly name="feeedc"  id="feeedc" placeholder="0" />
        				</div>
					</div>
				`);
		} else if ($("#topupselec2 option:selected").val() == "edccb") {
			$("#formtopup2").append(`
					<div class="form-group" />
          				<label for="exampleInputEmail1">Alamat EDCCB</label>
          				<input type="text" class="form-control" value="<?= $alamat_edccb ?>" name="alamat_btc" id="exampleInputEmail1" placeholder="Alamat EDCCB" readonly required />
        			</div>
            		<div class="form-group" />
          				<label for="exampleInputEmail1">Jumlah EDCCB</label>
          				<input type="text" class="form-control" value="<?= $rw_regis['jumlah_topup'] ?>" id="exampleInputEmail1" placeholder="Jumlah EDCC Blockchain" readonly required />
        			</div>
				`)
		}
	</script>

	<script>
		setTimeout(() => {
			// let alert = document.querySelector(".alert");
			let alert = $(".alert");
			alert.remove();
		}, 4000);
	</script>
</body>

</html>