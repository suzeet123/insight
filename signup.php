<?php
session_start();
require_once "include/auth.php";
?>
<html>
<head>
    <title> Sing Up </title>
	 <?php include "boostrap.php"; ?> 
</head>
<body>
<?php include "include/nav.php"; ?>

	<div class="content">
    <section>
		<form action="AddAccount.php" method="POST">
			<div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="Enter your Name">
    </div>

			<div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
			<div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of birth</label>
      <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter your Date of birth ">
  </div>
  <div class="form-group">
    <label for="role">Role</label>
    <input type="role" class="form-control" name="role" id="role" placeholder="role">
</div>
<div class="form-group">
<label for="contactnumber">Phone Number</label>
<input type="contactnumber" class="form-control" name="contactnumber" id="contactnumber" placeholder="contactnumber">
</div>

			</ul>
      <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
</section>
    <section>

  		     <a href=""><image class="show" src="show.jpg"></a>

  		</section>
	</div>

	<?php include "include/footer.php"; ?>

</body>
</html>
