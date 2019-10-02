<?php
session_start();
require_once "include/auth.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Royal partners login</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
	   <?php include "boostrap.php"; ?> 
</head>
<body>
	<!-- Where is the navigation bar? -->

	<?php include "include/nav.php"; ?>

	<div class="content">
<section>
		<h1>Welcome to the Royal Partners</h1>
		<p>Here you can login to your portfolio</p>



		<?php
		// Exercise: where are is_logged_in() and logged_in_user() declared?
		if(is_logged_in()): ?>
			<h2>Currently logged in as <?php echo htmlspecialchars(logged_in_user()); ?></h2>
			<form action="logout.php" method="POST">
				<button>Log out</button>
			</form>
		<?php else: ?>

		<form action="login.php" method="POST">

			<div class="form-group">
				<label for="name">name</label>
				<input type="name" class="form-control" name="name" id="name" placeholder="Name">
			</div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

<p> Need a Account? </P>
<a href="Signup.php">Sign up for new account</a><br>
<a href="ree.php">forget password</a>
		<?php endif ?>

	</section>
	<section>

		     <a href=""><image class="show" src="show.jpg" alt="responsive image"></a>

		</section>
		</div>
		<div id="user_details"> </div>
	<?php include "include/footer.php"; ?>

	<script src="script/validate_login.js"></script>


</body>
</html>
