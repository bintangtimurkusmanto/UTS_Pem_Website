<?php
session_start();
if (!empty($_SESSION['nama'])) {
	header('location: ada.php');
}
$_SESSION["lives"] = 5;
$_SESSION["skor"] = 0;
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
<form method="post" action="game.php">
	<div class="form-group">
		<label for="nama">Nama:</label>
		<input type="text" class="form-control" placeholder="Masukkan nama" name="nama" required>
	</div>
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="Email" class="form-control" placeholder="Masukkan Email" name="email" required></p>
	</div> 
	<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>
</body>
</html>