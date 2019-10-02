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
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
	 
</head>
<body>
	<?php include "include/nav.php"; ?>

	
<div class="content">
		<h2>Currently logged in as <?php echo htmlentities(logged_in_user()); ?></h2>


		<form action="logout.php" method="POST">
			<button>Log out</button>
  <button><a href="edit.php">Edit profile</a></button>



	<?php include "include/footer.php"; ?>


		 <script>
		 </script>

</body>
</html>
