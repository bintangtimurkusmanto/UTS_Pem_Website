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
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form method="post" action="proses.php">
	<div class="form-group">
		<h2>Hello, <?php echo $_SESSION["nama"]; ?> tetap semangat ya.. you can do the best!! </h2>
		<h6>Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["skor"] ; ?></h6>
	</div>
	<div class="form-group">
		<label for="soal"><h4>Berapakah <?php echo $a; ?> + <?php echo $b; ?> = </h4></label>
		<input type="text" class="form-control" name="jawaban" required> 
	</div>
	<input type="submit" class="btn btn-primary" name="submit">
</form>
</div>
</body>
</html>