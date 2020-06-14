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
    <title>weekly salary</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

	<?php include "include/nav.php"; ?>


<h1><a href="view.php">view page</a></h1>


<?php
		// Get the list of results for this user
		$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);

    // Take some time to understand this query!
		$query  = "select * from salarysheet where `date` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) 		\n";
		/* $query = "SELECT * FROM `hotelmaintainance`
WHERE DATEPART(m, date) = DATEPART(m, DATEADD(m, -1, getdate()))
AND DATEPART(yyyy, date) = DATEPART(yyyy, DATEADD(m, -1, getdate()))  /n"; */



$stmt = $conn->prepare($query);
$id = logged_in_user();
$stmt->bindValue(1, $id);
$stmt->execute();
?>
<h2> Weekly Salary </h2>
<table>
<tr><th>Employeid </th><th>Name</th><th>designation</th><th>week</th><th>year</th><th>earnings</th><th>loading</th><th>tax</th><th>net salary</th>
<?php foreach($stmt as $row): ?>
<tr style="font-weight:<?php echo $weight;?>; color:<?php echo $color;?> ">
				<td><?php echo htmlentities($row['employeeid']); ?></td>
				<td><?php echo htmlentities($row['name']); ?></td>
				<td><?php echo htmlentities($row['designation']); ?></td>
        <td><?php echo htmlentities($row['week']); ?></td>

				<td><?php echo htmlentities($row['year']); ?></td>
        <td><?php echo htmlentities($row['earnings']); ?></td>
        <td><?php echo htmlentities($row['loading']); ?></td>
        <td><?php echo htmlentities($row['Tax']); ?></td>
        <td><?php echo htmlentities($row['Net salary']); ?></td>
        







			</tr>
		<?php
		endforeach;

		?>

</table>
</body>
</html>
