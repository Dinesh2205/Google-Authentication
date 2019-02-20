<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("135292409648-q5lg03gt444kggja4nh4sdnkf0lo04mn.apps.googleusercontent.com");
	$gClient->setClientSecret("1TGSB1Ry52wbkNt9bohKxvpm");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/internship/GoogleAuth/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
