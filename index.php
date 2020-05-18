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
</head>
<body>
<form method="post" action="game.php">
	<p>Masukkan Nama	: <input type="text" name="nama" required></p>
	<p>Masukkan Email	: <input type="Email" name="email" required></p>
	<p><input type="submit" name="submit"></p>
</form>
</body>
</html>