<?php
session_start();
include_once('koneksi.php');
?>
<!DOCTYPE html>
<html>
<title>Mathematics Game</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body>
<div class="container">
<?php
	if (isset($_POST['submit'])) {
		if ($_SESSION['sum'] == $_POST['jawaban']) {

			$_SESSION['skor'] += 10;

			echo "<h2>Hello ".$_SESSION['nama'].", Selamat jawaban anda <font color='green'>benar</font><br></h2>";
			echo "<h6>Lives: ".$_SESSION['lives']."|Score: ".$_SESSION['skor']."</h6>";
			echo "<br><a href='game.php' class='btn btn-primary'>Soal selanjutnya</a>";
		}
		else {

			$_SESSION['lives'] -= 1;
			$_SESSION['skor'] -= 2;

			if ($_SESSION['lives'] <= 0) {
				$nama	= $_SESSION['nama'];
				$skor	= $_SESSION['skor'];

				$insert = mysqli_query($mysqli, "INSERT INTO hall_of_fame (nama, skor) VALUES ('$nama', '$skor')");

				//header('location: hall.php');
				echo "<script>location.href = 'hall.php';</script>";
			}

			echo "<h2>Hello ".$_SESSION['nama'].", sayang jawaban Anda <font color='red'>salah...</font> tetap semangat ya !!!<br></h2>";
			echo "<h6>Lives: ".$_SESSION['lives']."|Score: ".$_SESSION['skor']."</h6>";
			echo "<br><a href='game.php' class='btn btn-primary'>Soal selanjutnya</a>";
		}
	}
?>
</div>
</body>
</html>

