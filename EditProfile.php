<?php
session_start();
require_once "include/config.php";
require_once "include/utils.php";
require_once "include/auth.php";
?>

<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
</html>


<?php

		//$userid = $_POST['userid'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$date_of_birth = $_POST['date_of_birth'];
		$contactnumber = $_POST['contactnumber'];

     $salt = '$2y$07$' . base64_encode(openssl_random_pseudo_bytes(32));
    $hashed =  crypt($password, $salt);

	try {
    $conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  //$sql = "UPDATE user SET name = 'Sujit', contact number = 45454545 WHERE name = 'name'";
   $sql = "UPDATE user SET name = '$name', password = '$password', date_of_birth='$date_of_birth', contactnumber ='$contactnumber' WHERE name ='$name'";


	 $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " Profile setting has been changed successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;









	?>
	<h3><a href="view.php">royal partners</a></h3>
