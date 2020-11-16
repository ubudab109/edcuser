<?php

session_start();
include('theme/fungsi.php');
include_once '../assets/dbconnect.php';
include_once '../assets/umild.php';

if(!isset($_SESSION['user_id']))
{
	header("Location:login.php");
}else if($_SESSION['kyc']=='0')
{
	header("Location:login.php");
}


include('theme/header.php');


?>


<?PHP
	if(empty($_GET['menu'])) {
		include_once "theme/dashboard.php";
	}
	else
	{
		$file = $_GET["page"];
		$includeFile = "mod/".$_GET['menu']. "/" . $file.'.php';
		if (file_exists($includeFile))
			{
				include_once($includeFile);
			}
		else
			{ echo("Script Not Found");	}
	}
?>

<?
	include('theme/footer.php');
?>
