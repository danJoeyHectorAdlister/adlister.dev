<?php
	require_once __DIR__ . '/../utils/Auth.php';

	Auth::logout();
	header("Location: http://adlister.dev/");
	die;
?>