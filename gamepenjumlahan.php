<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game CrazyMath</title>
</head>
<body>
	<h1>Crazy Math</h1>
	<form method="post" action="action.php">
		<input type="submit" name="submit2" value="Start !!">
	</form>
	<?php
		$_SESSION['lives'] = 5;
		$_SESSION['score'] = 0;
	?>
</body>
</html>