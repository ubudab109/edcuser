<?php
session_start();
// var_dump($_SESSION);
// var_dump(session_start());
// die;
?>
<!doctype html>
<html lang="en" dir="ltr">
  <head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="EDCCASH –  EDCCASH secara nyata telah membuktikan dan memberikan kesejahteraan dan manfaat bagi para penggunanya">
		<meta name="author" content="EDCCASH">
		<meta name="keywords" content="EDCCASH">
		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.png" />

		<!-- TITLE -->
		<title>EDCCASH –  EDCCASH secara nyata telah membuktikan dan memberikan kesejahteraan dan manfaat bagi para penggunanya</title>

		<!-- BOOTSTRAP CSS -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="../assets/css/style.css" rel="stylesheet"/>
		<link href="../assets/css/skin-modes.css" rel="stylesheet"/>

		<!-- SIDE-MENU CSS -->
		<link href="../assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

		<!-- SIDEBAR CSS -->
		<link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- C3 CHARTS CSS -->
		<link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet">
	 	<!-- FILE UPLODE CSS -->
        <link href="../assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
		<!-- FORN WIZARD CSS -->
		<link href="../assets/plugins/formwizard/smart_wizard.css" rel="stylesheet">
		<link href="../assets/plugins/formwizard/smart_wizard_theme_arrows.css" rel="stylesheet">
		<link href="../assets/plugins/formwizard/smart_wizard_theme_circles.css"  rel="stylesheet">
		<link href="../assets/plugins/formwizard/smart_wizard_theme_dots.css" rel="stylesheet">
		<link href="../assets/plugins/forn-wizard/css/demo.css" rel="stylesheet">

		<!-- CUSTOM SCROLLBAR CSS -->
		<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">

		<!--- FONT ICONS CSS -->
		<link href="../assets/css/icons.css" rel="stylesheet"/>

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
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="../assets/images/brand/logo.png"  alt="logo">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6 col-md-6 mx-auto">
						<div class="card accordion-wizard">
									<div class="card-header">
										<h3 class="card-title">Form Pendaftaran Member</h3>
									</div>
									<div class="card-body">
										<?php
											if (isset($_SESSION['info'])) {
												echo $_SESSION['info'];
												unset($_SESSION['info']);
											}
										?>
										<form id="form" method="post" action="aksi_register.php" enctype="multipart/form-data">

											<div class="list-group">
												<div class="list-group-item py-4" id="step-1" data-acc-step>
													<h5 class="mb-0" data-acc-title>Identitas Diri</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label for="nama_lengkap">Nama Lengkap(Sesuai KTP) <i class="text-danger">*</i></label>
																<input type="text" class="form-control" name="nama" id="nama_lengkap" placeholder="masukan nama lengkap" required>
															</div>
                                        					<div class="form-group">
																<label for="exampleInputnumber">Nomor KTP <i class="text-danger">*</i></label>
																<input type="number" class="form-control" name="no_ktp" min="0" id="exampleInputnumber" placeholder="masukan nomor ktp" required>
															</div>
															<div class="form-group">
																<label class="form-label">Tanggal Lahir(Sesuai KTP) <i class="text-danger">*</i></label>
																<div class="row">
																	<div class="col-md-4">
																		<select class="form-control" name="tanggal" id="tanggal" required>
																			<option value="" hidden selected>Date</option>
																			<option value="1">01</option>
																			<option value="2">02</option>
																			<option value="3">03</option>
																			<option value="4">04</option>
																			<option value="5">05</option>
																			<option value="6">06</option>
																			<option value="7">07</option>
																			<option value="8">08</option>
																			<option value="9">09</option>
																			<option value="10">10</option>
																			<option value="11">11</option>
																			<option value="12">12</option>
																			<option value="13">13</option>
																			<option value="14">14</option>
																			<option value="15">15</option>
																			<option value="16">16</option>
																			<option value="17">17</option>
																			<option value="18">18</option>
																			<option value="19">19</option>
																			<option value="20">20</option>
																			<option value="21">21</option>
																			<option value="22">22</option>
																			<option value="23">23</option>
																			<option value="24">24</option>
																			<option value="25">25</option>
																			<option value="26">26</option>
																			<option value="27">27</option>
																			<option value="28">28</option>
																			<option value="29">29</option>
																			<option value="30">30</option>
																			<option value="31">31</option>
																		</select>
																	</div>
																	<div class="col-md-4">
																		<select class="form-control" name="bulan" id="bulan" required>
																			<option value="" hidden selected>Mon</option>
																			<option value="1">Jan</option>
																			<option value="2">Feb</option>
																			<option value="3">Mar</option>
																			<option value="4">Apr</option>
																			<option value="5">May</option>
																			<option value="6">June</option>
																			<option value="7">July</option>
																			<option value="8">Aug</option>
																			<option value="9">Sep</option>
																			<option value="10">Oct</option>
																			<option value="11">Nov</option>
																			<option value="12">Dec</option>
																		</select>
																	</div>
																	<div class="col-md-4">
																		<select class="form-control" name="tahun" id="tahun" required>
																			<option value="" hidden selected>Year</option>
																			<?php
for($i=date('Y'); $i>=date('Y')-80; $i-=1){
echo"<option value='$i'> $i </option>";
}
?>
																		</select>
																	</div>
																</div>
															</div>
                                        					 <div class="form-group">
																<label for="exampleInputnumber">Jenis Kelamin <i class="text-danger">*</i></label>
																<div class="col-md-4">
																	<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
																		<option value="0">Laki-Laki</option>
																		<option value="1">Perempuan</option>
																	</select>
																</div>
															</div>
                                        					<div class="form-group">
																<label class="form-label">Alamat <i class="text-danger">*</i></label>
																<textarea class="form-control" rows="6" name="alamat" id="alamat" required placeholder="Masukan alamat........."></textarea>
															</div>
                                        					<div class="form-group">
																<label for="exampleInputnumber">Nomor Handphone <i class="text-danger">*</i></label>
																<input type="number" class="form-control" name="no_hp" min="0" id="no_hp" placeholder="masukan nomor hp" required>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-4" id="step-2" data-acc-step>
													<h5 class="mb-0" data-acc-title>Data Bank</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label for="nama_bank">Nama Bank <i class="text-danger">*</i></label>
																<input type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Masukan nama bank" required>
															</div>
                                        					<div class="form-group">
																<label for="cabang_bank">Cabang <i class="text-danger">*</i></label>
																<input type="text" class="form-control" id="cabang_bank" name="cabang_bank" placeholder="Masukan cabang bank" required>
															</div>
                                        					<div class="form-group">
																<label for="pemilik_rekening">Nama Pemilik Rekening (sesuai KTP) <i class="text-danger">*</i></label>
																<input type="text" class="form-control" name="pemilik_rekening" id="pemilik_rekening" placeholder="Nama pemilik rekening" required>
															</div>
                                     						<div class="form-group">
																<label for="nomor_rekening">Nomor Rekening <i class="text-danger">*</i></label>
																<input type="number" class="form-control" id="nomor_rekening" name="nomor_rekening" min="0" placeholder="Nomor rekening" required>
															</div>
                                     						<div class="form-group">
																<label for="swift_code">Swift Code <i class="text-danger">*</i></label>
																<input type="text" class="form-control" id="swift_code" name="swift_code" placeholder="Swift code" required>
															</div>
														</div>
													</div>
												</div>
                        <div class="list-group-item py-4" id="step-3" data-acc-step>
													<h5 class="mb-0" data-acc-title>Upload Dokumen</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="row ">
																<div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
                                                    				<input type="file" id="ktp-user" class="dropify" data-max-file-size="4M" name="foto_ktp" />
                                                     				<div class="memmbername">KTP</div>
																</div>
																<div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
																	<input type="file" class="dropify" id="user-selfie" data-max-file-size="4M" name="foto_selfie" required/>
                                    								<div class="memmbername">Selfie</div>
																</div>
															</div>
															</div>
														</div>
													</div>
												</div>
                                                <div class="list-group-item py-4" id="step-4" data-acc-step>
													<h5 class="mb-0" data-acc-title>Pembayaran</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
          														<label for="topup">Topup Dengan <i class="text-danger">*</i></label>
          															<select id="topupselec" class="form-control" name="topup_select" data-placeholder="Pilih Pembayaran" required>
          															  <option value="" hidden selected>Pilih Pembayaran</option>
          															  <option value="eddccash">EDCCASH Voucher (instant)</option>
          															</select>
        													</div>
        													<div id="formtopup"></div>
														</div>
													</div>
												</div>
                                            	<div class="list-group-item py-4" id="step-5" data-acc-step>
													<h5 class="mb-0" data-acc-title>Bukti Pembayaran</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
                                                    			<input type="file" class="dropify" id="bukti_bayar" data-max-file-size="1M" name="bukti_bayar" required />
                                    							<div class="memmbername">Bukti Pembayaran</div>
															</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->


		<?php
			include "../assets/dbconnect.php";


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

function rateaset($jenis,$type){

    global $con;

    $qurep="select * from setting_rate where jenis_aset='$jenis'";
    $rsrep=mysqli_query($con,$qurep);
    $rwrep=mysqli_fetch_array($rsrep);
if($type=='jual'){
    $hasil = $rwrep['harga_jual'];
}else {
    $hasil = $rwrep['harga_beli'];
}

return $hasil;

}

$uangdaftar=5000000;
$ratebtc =rateaset(btc,jual);
$bayarbtc =$uangdaftar/$ratebtc;

$rateprizm=rateaset(prizm,jual);
$bayarprizm =$uangdaftar/$rateprizm;

$rateedccb=rateaset(edccb,jual);
$bayaredccb =$uangdaftar/$rateedccb;

		?>


		<!-- JQUERY JS -->
		<script src="../assets/js/jquery-3.4.1.min.js"></script>
    <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->
    <script>
    $(document).ready(function(){
      $('#step-1').ready(function(){
        $('#step-1 .float-right').addClass('hidden');
          function validateNextButton() {
            var buttonDisabled = $('#nama_lengkap').val().trim() === '' || $('#exampleInputnumber').val() == ''
            || $('#tanggal :selected').val() == '' || $('#bulan :selected').val() == '' || $('#tahun :selected').val() == ''
            || $('#jenis_kelamin').val().trim() === '' || $('#alamat').val().trim() === '' ||
            $('#no_hp').val() == '';
            if(buttonDisabled){
              $('#step-1 .float-right').addClass('hidden');
            }
            else{
              $('#step-1 .float-right').removeClass('hidden');
            }
          }
          $('#nama_lengkap').on('keyup', validateNextButton);
          $('#exampleInputnumber').on('keyup', validateNextButton);
          $('#tanggal :selected').on('keyup', validateNextButton);
          $('#bulan :selected').on('keyup', validateNextButton);
          $('#tahun :selected').on('keyup', validateNextButton);
          $('#jenis_kelamin').on('keyup', validateNextButton);
          $('#alamat').on('keyup', validateNextButton);
          $('#no_hp').on('keyup', validateNextButton);
          });
      });
    $(document).ready(function(){
      $('#step-2').ready(function(){
        $('#step-2 .float-right').addClass('hidden');

        function validateNextButtonTwo() {
          var buttonDisabled = $('#nama_bank').val() == '' || $('#cabang_bank').val() == ''
          || $('#pemilik_rekening').val() == '' || $('#nomor_rekening ').val() == '' || $('#swift_code').val() == '';
          if(buttonDisabled){
            $('.float-right').addClass('hidden');
          }
          else{
            $('.float-right').removeClass('hidden');
          }
        }
        $('#nama_bank').on('keyup', validateNextButtonTwo);
        $('#cabang_bank').on('keyup', validateNextButtonTwo);
        $('#pemilik_rekening').on('keyup', validateNextButtonTwo);
        $('#nomor_rekening').on('keyup', validateNextButtonTwo);
        $('#swift_code').on('keyup', validateNextButtonTwo);
      });
    })

    $(document).ready(function(){
      $('#step-3').ready(function(){
        $('#step-3 .float-right').hide();
        function validateNextButtonThree(){
          var ktp = $("#ktp-user").val();
          var selfie = $('#user-selfie').val();
          var buttonDisabled = ktp == "" || selfie == "";
          if(buttonDisabled){
            $('#step-3 .float-right').hide();

          }else{
            // alert('test');
            $('#step-3 .float-right').show();

          }
        }
        $('#ktp-user').on('change',validateNextButtonThree);
        $('#user-selfie').on('change',validateNextButtonThree);


      })
    })
    $(document).ready(function(){
      $('#step-5').ready(function(){
        $('#step-5 .float-right').hide();
        function validateNextButtonFour() {
          var bukti_bayar = $('#bukti_bayar').val();
          var buttonDisabled = bukti_bayar == "";
          if(buttonDisabled){
            $('input[type="submit"]').hide();
          }
          else{
            $('input[type="submit"]').show();
          }
        }
        $('#bukti_bayar').on('change',validateNextButtonFour);

        $('.dropify-clear').click(function(){
          $('input[type="submit"]').hide();

        })
      })
    })


    </script>
		<script>
    $('#step-4').ready(function(){
      $("#step-4 .float-right").hide();

    })
        $("#topupselec").change(function () {
          var jenis = $(this).val();


            $("#formtopup").empty().append();
            var vbtcform='<div class="form-group" />'+
                '<label for="exampleInputEmail1">Alamat email Tujuan Voucher</label>'+
                '<input type="text" class="form-control" readonly value="<?= $email_voucher ?>" id="exampleInputEmail1" name="email_tujuan" placeholder="Nomor Voucher Bitcoin" required />'+
              '</div>'+
                '<div class="form-group" />'+
                '<label for="exampleInputEmail1">No Voucher</label>'+
                '<input type="text" class="form-control" id="exampleInputEmail1" name="no_voucher" placeholder="Nomor Voucher Bitcoin" required />'+
              '</div>';
            var btcform='<div class="form-group" />'+
                '<label for="exampleInputEmail1">Alamat Bitcoin</label>'+
                '<input type="text" class="form-control" value="<?= $alamat_btc ?>" name="alamat_btc" id="exampleInputEmail1" placeholder="Nomor Voucher Bitcoin" readonly required />'+
              '</div>'+
                '<div class="form-group" />'+
                '<label for="exampleInputEmail1">Jumlah BTC</label>'+
                '<input type="text" class="form-control" readonly value="<?=round($bayarbtc,4)?>" id="exampleInputEmail1" name="jumlah_topup" placeholder="Nomor Voucher Bitcoin" required />'+
              '</div>';
            var edcvform='<div class="form-group" />'+
                '<label for="exampleInputEmail1">No Voucher</label>'+
                '<input type="text" class="form-control" id="voucher_edccash" name="no_voucher" placeholder="Nomor Voucher EDCCASH" required />'+
          '<small id="error_voucher"></small>'
          '</div>';
        var prizmform='<div class="form-group ">'+
                '<label for="exampleInputEmail1">Adress PRIZM</label>'+
                '<input type="text" class="form-control" readonly value="<?= $alamat_prizm ?>" id="exampleInputEmail1" />'+
              '</div>'+
                '<div class="form-group ">'+
                  '<label for="exampleInputEmail1">Public Key PRIZM</label>'+
                  '<input type="text" class="form-control" readonly value="<?= $public_key ?>" id="exampleInputEmail1" />'+
              '</div>'+
                '<div class="form-group">'+
                  '<label for="exampleInputEmail1">Jumlah PRIZM</label>'+
                  '<input type="number" class="form-control" readonly value="<?=round($bayarprizm,4)?>"  name="jumlah_topup"  id="totalprizm" placeholder="0" />'+
              '</div>'+

        '</div>';
        var edcform='<div class="form-group" />'+
                '<label for="exampleInputEmail1">Alamat EDCCB</label>'+
                '<input type="text" class="form-control" value="<?= $alamat_edccb ?>" name="alamat_btc" id="exampleInputEmail1" placeholder="Alamat EDCCB" readonly required />'+
              '</div>'+
                '<div class="form-group" />'+
                '<label for="exampleInputEmail1">Jumlah EDCCB</label>'+
                '<input type="text" class="form-control" readonly value="<?=round($bayaredccb,4)?>" id="exampleInputEmail1" name="jumlah_topup" placeholder="Jumlah EDCC Blockchain" required />'+
              '</div>'+
              '<div class="form-group" />'+
              '<label for="id-users">Masukkan User ID</label>'+
              '<input type="number" class="form-control" id="id-users" name="user_id" placeholder="Users ID" required />'+
              '<small id="error_user"></small>'+
            '</div>'+
            '<div class="form-group" />'+
            '<label for="id-transaksi">Masukkan ID Transaksi</label>'+
            '<input type="text" class="form-control" id="id-transaksi" name="txid" placeholder="ID Transaksi" required />'+
            '<small id="error_transaksi"></small>'+
            '</div>';
            if(jenis=='btc'){
              $("#formtopup").append(btcform);
            }else if(jenis=='eddccash'){
           $("#formtopup").append(edcvform);
           $("#step-4 .float-right").hide();
            }else if(jenis=='voucherbtc'){
                 $("#formtopup").append(vbtcform);
                    $("#step-4 .float-right").show();
            }else if(jenis=='prizm'){
                 $("#formtopup").append(prizmform);
                    $("#step-4 .float-right").show();
            } else if (jenis=='edccb') {
              $("#formtopup").append(edcform);
                    $("#step-4 .float-right").hide();
        }


        $("#voucher_edccash").keyup(()=> {
          var voucher = $('#voucher_edccash').val();
          if (voucher == "") {
            $("#error_voucher").html("");
            $("#step-4 .float-right").hide();
          } else {
            $.ajax({
              url		: "cek_voucher.php",
              type	: "POST",
              data	: "voucher="+voucher,
              success	: (res)=>{
                if (res == 0) {
                  $("#error_voucher").html(`<p class="text-success">Voucher bisa digunakan.</p>`);
                  $("#step-4 .float-right").show();
                } else if (res == 1) {
                  $("#error_voucher").html(`<p class="text-danger">Voucher sudah digunakan, silahkan gunakan voucher lain.</p>`);
                  $("#step-4 .float-right").hide();
                } else if (res == 2) {
                  $("#error_voucher").html(`<p class="text-danger">Kode voucher salah.</p>`);
                  $("#step-4 .float-right").hide();
                }
              }
            });
          }
        });
      });



    </script>
		<!-- BOOTSTRAP JS -->
		<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>

		<!-- RATING STAR JS-->
		<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- CHARTJS CHART JS-->
		<script src="../assets/plugins/chart/Chart.bundle.js"></script>
		<script src="../assets/plugins/chart/utils.js"></script>

		<!-- C3 CHART JS -->
		<script src="../assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="../assets/plugins/charts-c3/c3-chart.js"></script>

		<!-- INPUT MASK JS-->
		<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- CUSTOM SCROLLBAR JS-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- SIDE-MENU JS-->
		<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- SIDEBAR JS -->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<!-- FILE UPLOADES JS -->
        <script src="../assets/plugins/fileuploads/js/fileupload.js"></script>
        <script src="../assets/plugins/fileuploads/js/file-upload.js"></script>
		<!-- FORN WIZARD JS-->
		<script src="../assets/plugins/formwizard/jquery.smartWizard.js"></script>
		<script src="../assets/plugins/formwizard/fromwizard.js"></script>

		<!-- ACCORDION-WIZARD FORM JS -->
		<script src="../assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>

		<!-- ADVANCED FORM JS -->
		<script src="../assets/js/advancedform.js"></script>

		<!-- CUSTOM JS -->
		<script src="../assets/js/custom.js"></script>

		<script>
			setTimeout(() => {
			  // let alert = document.querySelector(".alert");
			  let alert = $(".alert");
			  alert.remove();
			}, 4000);
		</script>

	</body>
</html>
