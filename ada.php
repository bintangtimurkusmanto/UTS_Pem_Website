<?php
session_start();
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
	<h2>
		Hallo <?php echo $_SESSION["nama"]; ?>, selamat datang kembali di permainan ini!!!
	<h2>
	<input type="submit" class="btn btn-primary" value="Start Game">

	<h5>Bukan Anda? <a href="reset.php" class="btn btn-danger">klik disini</a></h5>
	
</form>
</div>
</body>
</html>