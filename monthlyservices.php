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
    <title>monthly service</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

	<?php include "include/nav.php"; ?>


<h1><a href="view.php">view page</a></h1>


<?php
		// Get the list of results for this user
		$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);

    // Take some time to understand this query!
		$query  = "SELECT * FROM service WHERE MONTH( DATE ) = MONTH( DATE_SUB(CURDATE(),INTERVAL 1 MONTH )) 		\n";
		/* $query = "SELECT * FROM `hotelmaintainance`
WHERE DATEPART(m, date) = DATEPART(m, DATEADD(m, -1, getdate()))
AND DATEPART(yyyy, date) = DATEPART(yyyy, DATEADD(m, -1, getdate()))  /n"; */



$stmt = $conn->prepare($query);
$id = logged_in_user();
$stmt->bindValue(1, $id);
$stmt->execute();
?>
<h2> monthly </h2>
<table>
<tr><th>Service id </th><th>Description</th><th>Date</th><th>Customer Name</th><th> Entry Name</th>
<?php foreach($stmt as $row): ?>
<tr style="font-weight:<?php echo $weight;?>; color:<?php echo $color;?> ">
				<td><?php echo htmlentities($row['service_id']); ?></td>
				<td><?php echo htmlentities($row['service_description']); ?></td>
				<td><?php echo htmlentities($row['date']); ?></td>
				<td><?php echo htmlentities($row['customer_name']); ?></td>
				<td><?php echo htmlentities($row['client_name']); ?></td>


			</tr>
		<?php
		endforeach;

		?>

</table>
</body>
</html>
