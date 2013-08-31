<?php
	ob_start('ob_gzhandler');
	header('Vary: Accept-Encoding');
	$cache_expire = 0;
	header("Pragma: private");
	header("Pragma: no-cache");
	header("Pragma: no-store");
	header('Expires: ' . date('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');

	/* CONSTANTES */
	define('Dropbox', 'https://dl.dropbox.com/u/57960869/Altiviaot/portafolio/');
	define('env', 'development');
	//define('env', 'production');
	//define('env', 'test');

	include('connect.php');
?>