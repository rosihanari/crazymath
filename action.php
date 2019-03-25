<?php
	session_start();
	$x = rand(0, 10);
	$y = rand(0, 10);
	if (isset($_POST['submit'])){
		if ($_POST['x_old'] + $_POST['y_old'] == $_POST['hasil']){
			$_SESSION['score'] += 5;
			$status = true;
		} else {
			$_SESSION['score'] -= 1;
			$_SESSION['lives'] -= 1;
			$status = false;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crazy Math</title>
</head>
<body>
	<h1>Crazy Math</h1>
	<?php
		echo "<p>Lives: ".$_SESSION['lives']."</p>";
		echo "<p>Score: ".$_SESSION['score']."</p>";
	?>

	<?php
		if (isset($status)){
			if ($status == true){
				echo "<h3>Jawaban Anda benar</h3>";
			} else {
				echo "<h3>Jawaban Anda salah</h3>";
			}
		}
	?>

	<?php
		if ($_SESSION['lives'] == 0){
			echo "<h2>Game Over !!!</h2>";
			echo "<p><a href='index.php'>Ulangi Lagi</a></p>";
		} else {
	?>
	<form method="post" action="action.php">
		<?php
			echo "$x + $y = ";
		?>
		<input type="hidden" name="x_old" value="<?php echo $x;?>">
		<input type="hidden" name="y_old" value="<?php echo $y;?>">
		<input type="text" name="hasil">
		<input type="submit" name="submit">
	</form>
	<?php
		}
	?>
</body>
</html>
