
<?php
session_start();
require_once "include/config.php";
require_once "include/utils.php";
require_once "include/auth.php";
?>
<?php
	// get_or_default is in utils.php
	// See what it does
	$name = get_or_default($_POST, 'name', '');
	$password = get_or_default($_POST, 'password', '');

	// What does this do?
	if($name and $password) {

		// Use the DB to authenticate a user

		// Exercise: Where do these variables come from?
		$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);

		// Exercise: What does the question mark mean?
		$query = "SELECT name, password FROM user WHERE name=?";

		$stmt = $conn->prepare($query);
		$stmt->bindValue(1, $name);

		// If the execution works properly
		if($stmt->execute())
		{
			// Grab the first row
			$row = $stmt->fetch();

			// If it exists
			if($row) {
				// Get the stored password
				$db_password = $row['password'];

				// Check whether the hash of the password is the same as
				// the one in the database
				if(password_verify($password, $db_password))
				{
					login($name);
					header('Location: view.php');
					exit;
				}
			}
		}

	//	mysqli_stmt_close($stmt);
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Royal Partners login</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
	 <?php include "boostrap.php"; ?> 

</head>
<body>
	<?php include "include/nav.php"; ?>

	<div class="content">
<section>
				<h1>Welcome to the Royal Partners</h1>
		<p>Here you can login to your portfolio</p>

		<?php if(is_logged_in()): ?>
			<h2>Currently logged in as <?php echo htmlentities(logged_in_user()); ?></h2>
			<form action="logout.php" method="POST">
				<button>Log out</button>
			</form>
		<?php else: ?>

		<form action="login.php" method="POST">
			<?php if($name) : ?>
				<div class="warning">Login failed, please try again</div>
			<?php endif; ?>
						<div class="form-group">
				<label for="name">name</label>
				<input type="name" class="form-control" name="name" id="name" placeholder="name">
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
<a href="Signup.php">Sign up for new account</a>
		<?php endif ?>

	</section>
	<section>

		     <a href=""><image class="show" src="show.jpg"></a>

		</section>
		</div>

	<?php include "include/footer.php"; ?>

	<script src="script/validate_login.js"></script>
</body>
</html>
