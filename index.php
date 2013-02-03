<? session_save_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . "session_store"); ?>
<? if (session_id() == "") @session_start(); ?>
<!DOCTYPE html PUBLIC "-//OPENWAVE//DTD XHTML Mobile 1.0//EN"
 "http://www.openwave.com/dtd/xhtml-mobile10.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width; height=100%; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;" />
		<link href="http://www.plurk.com/apple-touch-icon.png" rel="apple-touch-icon" />
		<title>Davy's Plurk Helper</title>
		<link href="./stylesheets/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="container">
<?php include "navi.php"?>
			<div id="main">
<? if (isset($_GET['logout'])): ?>
<?php
session_destroy();
$pos = strpos($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$uri = substr($_SERVER["REQUEST_URI"], 0, $pos);
header("Location: http://" . $_SERVER['HTTP_HOST'] . $uri); ?>
<? elseif (isset($_SESSION['logined'])): ?>
				<div id="post_area">
				</div>
<? elseif (isset($_GET['login']) || isset($_GET['oauth_verifier'])): ?>
<? include dirname(__FILE__) . DIRECTORY_SEPARATOR . "_login.php"; ?>
<? else: ?>
				<div id="login_tip">
					<a href="?login" class="button">
						Login with Plurk
					</a>
				</div>
<? endif;?>
			</div>
<?php include "footer.php"?>
		</div>
<? print_r($_SESSION); ?>
	</body>
</html>
