<?php
session_start();
require_once "include/config.php";
require_once "include/utils.php";
require_once "include/auth.php";
?>

<html>
<head>
    <title>feedback</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
</html>


<?php

		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		



	try {
    $conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO feedback(name,email,comment)
    VALUES ('$name', '$email', '$comment')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "your feedback has been sent  :)";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


	?>
<a href="login.php">login.php</a>








	