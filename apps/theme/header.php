<!doctype htmll>
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
		<link rel="shortcut icon" type="image/x-icon" href="/apps/favicon.ico?v=1" />

		<!-- TITLE -->
		<title>EDCCASH –  EDCCASH secara nyata telah membuktikan dan memberikan kesejahteraan dan manfaat bagi para penggunanya</title>

		<!-- BOOTSTRAP CSS -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<!-- DATA TABLE CSS -->
		<link href="../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet"/>
		<!-- STYLE CSS -->
		<link href="../assets/css/style.css" rel="stylesheet"/>
		<link href="../assets/css/skin-modes.css" rel="stylesheet"/>
		<link href="../assets/css-dark/dark-style.css" rel="stylesheet"/>

        <!-- FILE UPLODE CSS -->
        <link href="../assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>

		<!-- SIDE-MENU CSS -->
		<link href="../assets/plugins/sidemenu/closed-sidemenu.css" rel="stylesheet">

		<!--C3 CHARTS CSS -->
		<link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="../assets/css/icons.css" rel="stylesheet"/>
<!--SWEET ALERT CSS-->
		<link href="../assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />

		<!-- SIDEBAR CSS -->
		<link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

        <!-- TABS STYLES -->
		<link href="../assets/plugins/tabs/tabs.css" rel="stylesheet" />

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />
	<!-- JQUERY JS -->
		<script src="../assets/js/jquery-3.4.1.min.js"></script>
        <script src="../assets/js/qrcode.min.js"></script>

	</head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178429507-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178429507-1');
</script>

     <?php

$ripening="select * from lock_server where autono='1'";
$rsripening=mysqli_query($con,$ripening);
$rwripening=mysqli_fetch_array($rsripening);

if($rwripening['status']=='1'){
  ?>
   <script>
window.location = "https://edccash.com/apps/ripening.html";
</script>

<?php
}
?>

 <?php

$ripening="select * from lock_server where autono='1'";
$rsripening=mysqli_query($con,$ripening);
$rwripening=mysqli_fetch_array($rsripening);

if($rwripening['']=='1'){


}



$users="select * from users_edc where users_id='$_SESSION[user_id]'";
$rsusers=mysqli_query($con,$users);
$rwusers=mysqli_fetch_array($rsusers);

$level=$rwusers['level'];
    //diskon by level
$otp=$rwusers['otp'];

if($level=='1'){
    $diskon='200';
}elseif($level=='2'){
    $diskon='400';
}elseif($level=='3'){
    $diskon='600';
}elseif($level=='4'){
    $diskon='800';
}elseif($level=='5'){
    $diskon='1000';
}elseif($level=='6'){
    $diskon='1200';
}elseif($level=='7'){
    $diskon='1400';
}elseif($level=='0'){
    $diskon='0';
}

//wallet address

$wallet_edccb=$rwusers['addres_edccblockchain'];
$dbpas=$rwusers['password'];

    if($wallet_edccb==''){
        $edccash = new Coinrpc('PeTVZ','OdAsW2PQgr1Dn1H','139.162.17.175','48210');

   $newwallet= $edccash->getnewaddress();


        $quupwallet="update users_edc set addres_edccblockchain='$newwallet' where users_id='$_SESSION[user_id]' ";
        mysqli_query($con,$quupwallet);

    }



$saldoedccash=$rwusers['saldo_eddcash'];
$ratejedccash=rateaset('eddccash','beli');
$ratediskon=rateaset('eddccash','beli')-$diskon;
$ratejualeddcash=rateaset('eddccash','jual');
$saldodalrupiah=$saldoedccash*$ratejedccash;
$saldomaksedcc=$saldoedccash-200;
$saldomaksidr=$saldomaksedcc*$ratejedccash;
$rateedccb=rateaset('edccb','jual');
$rateprizm=rateaset('prizm','jual');
$ratebtc=rateaset('btc','jual');

//saldo
$saldoreff=$rwusers['saldo_referral'];
$saldoedccb=$rwusers['saldo_eddcblockchain'];
$saldoedccbrupiah=$rwusers['saldo_eddcblockchain']*$rateedccb;
$saldo_rupiah=$rwusers['saldo_rupiah'];
$saldominingedccash=$rwusers['saldo_minig_edccash'];
$saldominingedb=$rwusers['saldo_minig_edcb'];




//tanggal cloud
$cloud_edcash=$rwusers['tanggal_cloud_eddcash'];
$cloud_edcb=$rwusers['tanggal_cloud_eddcb'];
$cloud_edccash_status=$rwusers['status_cloud_edccash'];
$cloud_edcb_status=$rwusers['status_cloud_edccb'];

$wallet_edccb
?>
<script type="application/javascript">

    var emailbtc='<?=adresdepo('voucherbtc','non')?>';
    var addressbtc='<?=adresdepo('btc','non')?>';
    var addressprizm='<?=adresdepo('prizm','0')?>';
    var keyprizm='<?=adresdepo('prizm','pubkey')?>';




    var rateedccb=<?=$rateedccb?>;
    var rateedccashidr=<?=$ratejedccash?>;
    var ratejualedccash=<?=$ratejualeddcash?>;
    var rateedccasdsikon=<?=$ratediskon?>;
    var ratepriz=<?=$rateprizm?>;;
    var feetransaksi=0.003;
    var ratebit=<?=$ratebtc?>;;

    </script>
	<body class="dark-mode app sidebar-mini">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1" href="index.php">
							<img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
							<img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
							<img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
							<img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
						</a><!-- LOGO -->
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
					</div>
                    <div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">

							<div class="user-info">
								<h6 class=" mb-0 text-dark"><?=$_SESSION['nama']?> </h6>
								<span class="text-muted app-sidebar__user-name text-sm">ID:<?=$_SESSION['user_id']?></span>
                              <div class="wideget-user-rating">
                                  <?php
for ($x = 1; $x <= $level; $x++) {
  echo '<i class="fa fa-star text-warning"></i>';
}
?>


														</div>
							</div>
						</div>

					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">

							<div class="user-info">
								<h6 class=" mb-0 text-dark">Aktif</h6>
								<span class="text-muted app-sidebar__user-name text-sm">Status Keanggotaan</span>
							</div>
						</div>

					</div>
					<div class="sidebar-navs text-center">
						<ul class="nav  nav-pills-circle">

							<li class="nav-item" data-toggle="tooltip" data-placement="top" title="Wallet">
								<a href="index-menu-wallet-page-index.html" class="nav-link text-center m-2">
									<i class="ti-wallet"></i>
								</a>
							</li>
							<li class="nav-item" data-toggle="tooltip" data-placement="top" title="Cloud">
								<a href="index-menu-cloud-page-index.html" class="nav-link text-center m-2">
									<i class="fe fe-monitor"></i>
								</a>
							</li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Mitra">
								<a href="index-menu-mitra-page-index.html" class="nav-link text-center m-2">
									<i class="fe fe-users"></i>
								</a>
							</li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
								<a href="logout.php" class="nav-link text-center m-2">
									<i class="fe fe-power"></i>
								</a>
							</li>
						</ul>
					</div>
					<ul class="side-menu">
						<li><h3>Main</h3></li>
                        <li>
							<a class="side-menu__item" href="index.php"><i class="side-menu__icon  ti-crown"></i><span class="side-menu__label">Dashboard</span></a>
						</li>

						<li><h3>Wallet</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-wallet"></i><span class="side-menu__label">Wallet</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li ><a href="index-menu-wallet-page-index.html" class="slide-item "> Deposit &amp; Withdraw</a></li>
                                <li ><a href="index-menu-voucher-page-index.html" class="slide-item "> Redeem/Create Voucher</a></li>
                                 <li ><a href="index-menu-rupiah-page-index.html" class="slide-item "> Saldo Virtual</a></li>

							</ul>
						</li>

						<li><h3>Cloud Mining</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-monitor"></i><span class="side-menu__label">Mining</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="index-menu-cloud-page-index.html" class="slide-item"> Cloud Managment</a></li>


							</ul>
						</li>


						<li><h3>Kemitraan</h3><li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Mitra</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="index-menu-mitra-page-index.html" class="slide-item">Daftar Mitra</a></li>

							</ul>
						</li>

						<li><h3>Profile & Setting</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Profile Users</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="index-menu-profile-page-index.html" class="slide-item"> Profile & Password</a></li>

							</ul>
						</li>


						<li><h3>E-Commerce</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="index-menu-commerce-page-index.html" class="slide-item"> Edccash store</a></li>

							</ul>
						</li>
						<li><h3>External Exchanger</h3></li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-bar-chart"></i><span class="side-menu__label">Exchange/Market</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="https://www.bitz.so/en/exchange/edcc_btc" class="slide-item"> BITZ</a></li>
								<li><a href="https://crex24.com/" class="slide-item"> CREX24</a></li>

							</ul>
						</li>
					</ul>
				</aside>
				<!--/APP-SIDEBAR-->

				<!-- Mobile Header -->
				<div class="mobile-header">
					<div class="container-fluid">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<a class="header-brand" href="index.php">
								<img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
								<img src="../assets/images/brand/logo-3.png" class="header-brand-img desktop-logo mobile-light" alt="logo">
							</a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons">
								<button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
								</button>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" data-toggle="dropdown" class="nav-link icon ">

											<i class="fe fe-align-right"></i>

									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0"><?=$_SESSION['nama']?></h5>
												<small class="text-muted">ID: <?=$_SESSION['user_id']?></small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>

										<a class="dropdown-item" href="logout.php">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="app-content">
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle close-toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->

							<div class="d-flex  ml-auto header-right-icons header-search-icon">
								<!-- SEARCH -->
								<div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-maximize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->

							</div>
						</div>
						<!-- PAGE-HEADER END -->
