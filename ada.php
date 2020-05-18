<?php
session_start();
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
<p>
	Hallo <?php echo $_SESSION["nama"]; ?>, selamat datang kembali di permainan ini!!!<br>
	<input type="submit" value="Start Game"><br><br>
	Bukan Anda? <a href="reset.php">klik disini</a>
</p>
</form>
</body>
</html>