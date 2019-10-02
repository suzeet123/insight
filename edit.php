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
    <title>edit profile;?></title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <?php include "boostrap.php"; ?> 

</head>
<body>
	<?php include "include/nav.php"; ?>

	<div class="content">
		<h2>Currently logged in as <?php echo htmlentities(logged_in_user()); ?></h2>

<?php




			// Create connection
$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
$query= "select count(userId) from likes";
$stmt = $conn->prepare($query);


?>

		<h1> Edit your details </h1>

<div Class="content">
		<form action="EditProfile.php" method="POST">
			 <ul>
			<h2> user Profile </h2>
			<div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="Enter your Name">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of birth</label>
      <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter your Date of birth">
  </div>
    <div class="form-group">
      <label for="contactnumber">Contact Number</label>
      <input type="Integer" class="form-control" name="contactnumber" id="contactnumber" placeholder="Enter your update contact number">
  </div> 
  
			</ul>
			<button type="submit" class="btn btn-primary">edit</button>
		</form>


</div>


	<?php include "include/footer.php"; ?>


		 <script>
		 </script>

</body>
</html>
