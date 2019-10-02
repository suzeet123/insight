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

	<?php include "include/nav.php"; ?>


<h1><a href="view.php">view page</a></h1>


<?php
		// Get the list of results for this user
		$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);

    // Take some time to understand this query!
		$query  = "SELECT * FROM `user` where name==?	\n";
		




$stmt = $conn->prepare($query);
$id = logged_in_user();
$stmt->bindValue(1, $id);
$stmt->execute();
?>
<h2>My Details </h2>
<table>
<tr><th>Name </th><th>Email</th><th>Date of Birth</th><th>Role</th><th> Contact Number</th>
<?php foreach($stmt as $column): ?>
<tr style="font-weight:<?php echo $weight;?>; color:<?php echo $color;?> ">
				<td><?php echo htmlentities($column['name']); ?></td>
				<td><?php echo htmlentities($column['email']); ?></td>
				<td><?php echo htmlentities($column['date_of_birth']); ?></td>
				<td><?php echo htmlentities($column['role']); ?></td>
				<td><?php echo htmlentities($column['contactnumber']); ?></td>


			</tr>
		<?php
		endforeach;

		?>

</table>
</body>
</html>
