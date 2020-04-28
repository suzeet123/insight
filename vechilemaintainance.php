<?php session_start();
require_once "include/config.php";
require_once "include/auth.php";

// you have to be logged in to view this page
// This function is in utils.php
require_login();

?>
<!DOCTYPE html>
<html>
<head>
    <title> vechile Maintainance</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>
	<?php include "include/nav.php"; ?>


<button><a href="weeklyvechilemaintainance.php">Weekly maintenance</a></button>
<button><a href="monthlyvechilemaintainance.php">Monthly maintenance</a></button>
<button><a href="quaterlyvechilemaintainance.php">Quarterly maintenance</a></button>


	<?php include "include/footer.php"; ?>


		 <script>
		 </script>

</body>
</html>
