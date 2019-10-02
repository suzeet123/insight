<?php
session_start();
require_once "include/config.php";
require_once "include/utils.php";
require_once "include/auth.php";
?>

<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
</html>


<?php
	// get_or_default is in utils.php
	// See what it does

	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$date_of_birth = $_POST['date_of_birth'];
	$role = $_POST['role'];
	$contactnumber =$_POST['contactnumber'];

	$salt = '$2y$07$' . base64_encode(openssl_random_pseudo_bytes(32));
    $hashed =  crypt($password, $salt);





try {
    $conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user(name,email,password,date_of_birth, role, contactnumber)
    VALUES ('$name', '$email', '$hashed','$date_of_birth','$role', '$contactnumber')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Now you can Login using your user name :)";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


	?>
<a href="login.php">login.php</a>
