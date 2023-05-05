<?php include "db.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			width: 100%;
			border-collapse: collapse;
		}
		table , th ,td {
			border: 1px solid black;
			padding: 5px;
		}
		th{ text-align: left; }
	</style>
</head>
<body>
<?php 
$q = intval($_GET['q']);

$sql = "SELECT * FROM user WHERE `id` = '".$q."' ";
$result = mysqli_query($db,$sql);
echo "<h2>Selected Students Record</h2><table>
<tr>
<th>sr</th>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$row['sr']."</td>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "</tr>";
}
 ?>
</body>
</html>