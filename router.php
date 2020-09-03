<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');

require_once(ROOT_DIR .'include/header.php');

if(!isset($_GET["page"])) {
	header('Location: ./router.php?page=404');
	} else {
	$page = $_GET['page'];
		if ($page=="home") {
	require_once(ROOT_DIR .'pages/home.php');
	} elseif ($page=="about") {
	require_once(ROOT_DIR .'pages/about.php');
	} elseif ($page=="contact") {
	require_once(ROOT_DIR .'pages/contact.php');
	}  else  {
	require_once(ROOT_DIR .'pages/404.php');
	}
}

require_once(ROOT_DIR .'include/sidebar.php');

require_once(ROOT_DIR .'include/footer.php');