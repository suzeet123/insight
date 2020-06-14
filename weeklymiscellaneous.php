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
    <title>miscellaneous cost</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

	<?php include "include/nav.php"; ?>


<h1><a href="view.php">view page</a></h1>


<?php
		// Get the list of results for this user
		$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);

    // Take some time to understand this query!
		$query  = "select * FROM miscellaneouscost where `date` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)		\n";



$stmt = $conn->prepare($query);
$id = logged_in_user();
$stmt->bindValue(1, $id);
$stmt->execute();
?>
<h2> Weekly miscellaneous cost </h2>
<table>


<?php foreach($stmt as $row): ?>
<tr style="font-weight:<?php echo $weight;?>; color:<?php echo $color;?> ">
      <tr>   <th> Week </th>               <td><?php echo htmlentities($row['week']); ?></td></tr>
			<tr>  <th>	Rent </th>               <td><?php echo htmlentities($row['rent']); ?></td></tr>
      <tr>  <th>	Electricurt </th>        <td><?php echo htmlentities($row['electricity']); ?></tr>
			<tr>	<th>	Internet & phone </th>   <td><?php echo htmlentities($row['internet']); ?></td>
			<tr>	<th>	Insurance </th>          <td><?php echo htmlentities($row['insurance']); ?></td></tr>
			<tr>	<th>	Gadgets </th>            <td><?php echo htmlentities($row['gadgates']); ?></td></tr>
      <tr>  <th>	Office Supplies </th>    <td><?php echo htmlentities($row['officesupplies']); ?></td></tr>

      <tr>  <th>	Total </th>    <td><? total='rent';+'electricity'+$'internet'+'insurance'+'gadgates'+'officesupplies';
      echo "sum:",total ?></td></tr>

			</tr>
		<?php
		endforeach;

		?>

</table>
</body>
</html>
