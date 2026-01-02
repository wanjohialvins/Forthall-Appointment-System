<?php 
/**
 * Logout Logic - Forthall Appointment System
 * Designed & Developed by eragondevs
 */

	session_start();

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-86400, '/');
	}

	session_destroy();

	// redirecting the user to the login page
	header('Location: login.php?action=logout');

 ?>