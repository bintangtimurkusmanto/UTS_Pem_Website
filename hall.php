<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hall of Fame</title>
</head>
<body>
<p>
	Hallo, <?php echo $_SESSION['nama']; ?>... Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.<br>
	Score Anda : <?php echo $_SESSION['skor']; ?>
</p>
<p>
	<a href="index.php">Main Lagi</a>
</p>
<h3>Hall of Fame</h3>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Score</td>
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
</body>
</html>