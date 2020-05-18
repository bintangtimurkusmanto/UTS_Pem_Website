<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hall of Fame</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

	<h2>
		Hallo, <?php echo $_SESSION['nama']; ?>... Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.
	</h2>
	<h6>
		Score Anda : <?php echo $_SESSION['skor']; ?>
	</h6>
	<a href="index.php" class="btn btn-primary">Main Lagi</a>
</div>
<div class="container">
	<h4 align="center">Hall of Fame</h4>
	<br>
	<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Score</th>
		</tr>
		<?php
		include_once('koneksi.php');
		$no = 1;

		$sql = mysqli_query($mysqli, "SELECT * FROM hall_of_fame ORDER BY hall_of_fame.skor DESC LIMIT 10");
		while($data = mysqli_fetch_array($sql)){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['skor']."</td>";
			echo "</tr>";
		}

		while ($no <= 10) {
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>	-	</td>";
			echo "<td>	-	</td>";
			echo "</tr>";
		}
		?>
	</table>
</div>
</body>
</html>