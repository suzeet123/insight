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
    <title>
	<?php echo htmlentities(logged_in_user());?></title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
	 
</head>
<body>
	<?php include "include/nav.php"; ?>

	
<button><a href="maintainance.php">maintainance</a></button>
<button><a href="pickanddrop.php">PIck& drop booking</a></button>
<button><a href="service.php">services</a></button>


	<?php include "include/footer.php"; ?>


		 <script>
		 </script>

</body>
</html>
