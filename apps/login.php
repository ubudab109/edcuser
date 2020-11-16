<?php

ini_set('display_errors',1);

?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="EDCCASH">
		<meta name="author" content="EDCCASH">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>EDCCASH</title>

		<!-- BOOTSTRAP CSS -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="../assets/css/style.css" rel="stylesheet"/>
		<link href="../assets/css/skin-modes.css" rel="stylesheet"/>

		<!-- SIDE-MENU CSS -->
		<link href="../assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

		<!-- SINGLE-PAGE CSS -->
		<link href="../assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

		<!--C3 CHARTS CSS -->
		<link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
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
							<img src="../assets/images/brand/logo.png" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							<form action="logins.php" method="post" enctype="multipart/form-data" class="login100-form validate-form">
								<span class="login100-form-title">
									Login
								</span>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="email" placeholder="Email">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
									<input class="input100" type="password" name="password" placeholder="Password">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
								</div>
								<div class="text-right pt-1">
									<p class="mb-0"><a href="#" data-toggle="modal" data-target="#forgot" class="text-primary ml-1">Forgot Password?</a></p>
								</div>
								<div class="container-login100-form-btn">
									<input name="btn-login" type="submit"  class="login100-form-btn btn-primary" value="Login">
								</div>
								<div class="text-center pt-3">
									<p class="text-dark mb-0">Not a member?<a href="register_user.php" class="text-primary ml-1">Sign UP now</a></p>
								</div>

							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

        <form action="forgot.php" enctype="multipart/form-data" method="post">
        <div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Lupa Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Cek Inbox atau Spam</small>
  </div>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>
        </form>
		<!-- JQUERY JS -->
		<script src="../assets/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>

		<!-- SPARKLINE JS -->
		<script src="../assets/js/jquery.sparkline.min.js"></script>

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

	</body>
</html>
