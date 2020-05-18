<?php
session_start();
include_once('koneksi.php');
	if (isset($_POST['submit'])) {
		if ($_SESSION['sum'] == $_POST['jawaban']) {

			$_SESSION['skor'] += 10;

			echo "Hello ".$_SESSION['nama'].", Selamat jawaban anda benar<br>";
			echo "Lives: ".$_SESSION['lives']."|Score: ".$_SESSION['skor'];
			echo "<br><a href='game.php'>Soal selanjutnya</a>";
		}
		else {

			$_SESSION['lives'] -= 1;
			$_SESSION['skor'] -= 2;

			if ($_SESSION['lives'] == 0) {
				$nama	= $_SESSION['nama'];
				$skor	= $_SESSION['skor'];

				$insert = mysqli_query($mysqli, "INSERT INTO hall_of_fame (nama, skor) VALUES ('$nama', '$skor')");

				header('location: hall.php');
			}

			echo "Hello ".$_SESSION['nama'].", sayang jawaban Anda salah... tetap semangat ya !!!<br>";
			echo "Lives: ".$_SESSION['lives']."|Score: ".$_SESSION['skor'];
			echo "<br><a href='game.php'>Soal selanjutnya</a>";
		}
	}
?>
