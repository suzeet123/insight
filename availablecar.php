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
    <title>available car</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

	<?php include "include/nav.php"; ?>


<h1><a href="view.php">view page</a></h1>


<?php
		// Get the list of results for this user
		$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);

    // Take some time to understand this query!
		$query  = "SELECT * FROM `availablecar` 		\n";



$stmt = $conn->prepare($query);
$id = logged_in_user();
$stmt->bindValue(1, $id);
$stmt->execute();
?>
<h2> Available Car </h2>
<table>
<tr><th>	Available car </th><th>Date</th><td><th>Rego Number</th></td><td><th>Car Type</th></td><td><th>location</th></td>
<?php foreach($stmt as $row): ?>
<tr style="font-weight:<?php echo $weight;?>; color:<?php echo $color;?> ">
				<td><?php echo htmlentities($row['availablecar_id']); ?></td>
				<td><?php echo htmlentities($row['date']); ?></td><td></td>
				<td><?php echo htmlentities($row['Rego_number']); ?></td><td></td>
				<td><?php echo htmlentities($row['cartype']); ?></td><td></td>
				<td><?php echo htmlentities($row['location']); ?></td><td></td>

			</tr>
		<?php
		endforeach;

		?>

</table>
</body>
</html>
