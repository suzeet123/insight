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
    <title>Service</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
	 
</head>
<body>
	<?php include "include/nav.php"; ?>

	
<button><a href="weeklyservices.php">Weekly Services</a></button>
<button><a href="monthlyservices.php">Monthly Services</a></button>
<button><a href="quaterlyservices.php">Quarterly Services</a></button>


	<?php include "include/footer.php"; ?>


		 <script>
		 </script>

</body>
</html>
