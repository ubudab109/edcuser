<!doctype html>
<html lang="en" dir="ltr">
  <head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="EDCCASH –  EDCCASH secara nyata telah membuktikan dan memberikan kesejahteraan dan manfaat bagi para penggunanya">
		<meta name="author" content="EDCCASH">
		<meta name="keywords" content="EDCCASH">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="/apps/favicon.ico?v=1" />

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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- CUSTOM SCROLLBAR CSS -->
		<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">

		<!--- FONT ICONS CSS -->
		<link href="../assets/css/icons.css" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />
        <style>
            body {
                color: white;
            }
            .fa {
                font-size: 70px;
            }
        </style>

	</head>

	<body>


		<?php
			include "../assets/dbconnect.php";
		
			$verify 	= $_GET['verify_email'];
			$qu_select 	= "SELECT * FROM users_edc WHERE verify_code='$verify'";
			$rs_select	= mysqli_query($con, $qu_select);
			$count		= mysqli_num_rows($rs_select);

			if (!empty($count)) {
				$qu_update = "UPDATE users_edc SET verify_email_status='1' WHERE verify_code='$verify'";
				mysqli_query($con, $qu_update);
			}
		?>
		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page text-center">
                <h2 style="color:#fff">Sukses</h2>
                <!-- <img src="http://osmhotels.com//assets/check-true.jpg"> -->
                <i class="fa fa-thumbs-up"></i>
                <!-- <h3>Terima kasih sudah melakukan registrasi.</h3> -->
				<h3 style="font-size:20px;color:#999999;">Email Sudah Diverifikasi.</h3>
				<p>Silahkan Melakukan Login Dengan Mengklik Tombol di Bawah.</p>
				<!-- <div class="row"> -->
					<div class="col-6 mx-auto">
						<a class="btn btn-success" href="login.php">Login</a>
					</div>
				<!-- </div> -->
                <!-- <a href="" class="btn btn-success">Log in</a> -->
			</div>
			<!-- END PAGE -->
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="../assets/js/jquery-3.4.1.min.js"></script>
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

	</body>
</html>
