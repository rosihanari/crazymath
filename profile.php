<?php
include 'dbconfig.php';
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$id = $_GET['id'];
$query = "SELECT * FROM scores WHERE id = '$id'";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crazy Math User Profile</title>
</head>
<body>
	<h1>Crazy Math User Profile</h1>
	<?php
		$data = mysqli_fetch_array($result);
		echo "<h2>Username: ".$data['username']."</h2>";
		echo "<img src='foto/".$data['foto']."'>";
	?>
</body>
</html>