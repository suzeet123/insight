<?php
session_start();
require_once "include/auth.php";
?>
<?php

// The logout form doesn't actually send anything
// so just check the method
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Call logout() from utils.php
	logout();
}

// Always redirect the browser back to index.php
// regardless of whether the logout request was a POST
header('Location: index.php');