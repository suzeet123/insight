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
    <title>feedback</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <?php include "boostrap.php"; ?> 

</head>
<body>
	<?php include "include/nav.php"; ?>


		<h1> feedback </h1>

<div Class="content">
		<form action="feedback.php" method="POST">
			 <ul>
			<div class="form-group">
        <label for="name">Full Name</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="Enter your Name">
    </div>
    <div class="form-group">
      <label for="email">Your Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your valid email">
    </div>
    <div class="form-group">
      <label for="comment">comment</label>
      <input type="comment" class="form-control" name="comment" id="ccomment" placeholder="Enter your comment">
  </div>
     
  
			</ul>
			<button type="submit" class="btn btn-primary">submit</button>
		</form>


</div>


	<?php include "include/footer.php"; ?>


		 <script>
		 </script>

</body>
</html>
