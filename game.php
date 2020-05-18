<?php
session_start();
if (empty($_SESSION['nama'])) {
	$_SESSION['nama']  = $_POST['nama'];
}

$a = rand(0,20);
$b = rand(0,20);

$_SESSION['sum'] = $a + $b;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mathematics Game</title>
</head>
<body>
<form method="post" action="proses.php">
<p>
	Hello, <?php echo $_SESSION["nama"]; ?> tetap semangat ya.. you can do the best!! <br>
	Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["skor"] ; ?>
</p>
<p>
	Berapakah <?php echo $a; ?> + <?php echo $b; ?> = 
	<input type="text" name="jawaban" required> 
	<input type="submit" name="submit">

</p>
</form>
</body>
</html>