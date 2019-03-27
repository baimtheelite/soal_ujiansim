<!DOCTYPE html>
<html>
<head>
<title>Simulasi Ujian SIM C</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/myJs.js"></script>
	
</head>
<!-- Koneksi Database -->
<?php include 'template/koneksi.php'; ?>

<!-- Body -->
<body class="w3-light-blue">

<!-- The Timer -->
<div class="w3-white w3-card-4" id="timer" style="float: right; margin-right: 25px; position: fixed;"></div>

<!-- Container -->
<div class="w3-container w3-animate-opacity" style="margin: 0 192px 4px 192px;">

<!-- Header -->
<a onclick="back()" class="w3-btn w3-white w3-card-4" style="float:left;">Home</a>
<header class="w3-padding w3-card-16 w3-blue w3-center"><h1>Soal Ujian SIM C</header>

<!-- Tampilan Modal Waktu Habis -->
<div id='modal' class="w3-modal">
	<div class="w3-modal-content w3-animate-opacity">
		<header class="w3-container w3-red">
			<span class="w3-button w3-display-topright" onclick="document.getElementById('modal').style.display='none'">&times;</span>
			<h1>Time's Up!</h1>
		</header>
		<div class="w3-container w3-text-black">
			<p>Waktu telah habis! Silahkan klik tombol Submit.</p>
		</div>
	</div>
</div>

<!-- Bagian Soal -->
<div id="soal" class="w3-container w3-white w3-card-16 w3-padding-16" style="min-height: 650px">
<?php
echo "<form action='proses.php'method='post'>";
//soal nomor 1
$nomor = 1;
$query = "SELECT * FROM soal_pilihan WHERE nomor = 1";
$soal = mysqli_query($link, $query);
if (mysqli_num_rows($soal) > 0) {
	$data = mysqli_fetch_assoc($soal);
	echo "<div class='w3-hover-aqua'>";
	echo $nomor . ". ". $data['pertanyaan']. "<br>";
	echo "<img src='gambar/narrow-road.png' alt='penyempitan-jalan' width='100'><br>";
	echo "a. <input type='radio' value='a' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_a"]. "<br>";
	echo "b. <input type='radio' value='b' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_b"]. "<br>";
	echo "c. <input type='radio' value='c' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_c"]. "<br>";
	echo "d. <input type='radio' value='d' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_d"]. "<p>";
	echo "</div>";
}
//soal nomor 2
$nomor = 2;
$query = "SELECT * FROM soal_pilihan WHERE nomor = 2";
$soal = mysqli_query($link, $query);
if (mysqli_num_rows($soal) > 0) {
	$data = mysqli_fetch_assoc($soal);
	echo "<div class='w3-hover-aqua'>";
	echo $nomor . ". ". $data['pertanyaan']. "<br>";
	echo "<img src='gambar/go-ahead.png' alt='jalan-terus' width='100'><br>";
	echo "a. <input type='radio' value='a' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_a"]. "<br>";
	echo "b. <input type='radio' value='b' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_b"]. "<br>";
	echo "c. <input type='radio' value='c' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_c"]. "<br>";
	echo "d. <input type='radio' value='d' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_d"]. "<p>";
	echo "</div>";
}
//soal nomor 3
$nomor = 3;
$query = "SELECT * FROM soal_pilihan WHERE nomor = 3";
$soal = mysqli_query($link, $query);
if (mysqli_num_rows($soal) > 0) {
	$data = mysqli_fetch_assoc($soal);
	echo "<div class='w3-hover-aqua'>";
	echo $nomor . ". ". $data['pertanyaan']. "<br>";
	echo "<img src='gambar/dont-enter.png' alt='dilarang-masuk' width='100'><br>";
	echo "a. <input type='radio' value='a' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_a"]. "<br>";
	echo "b. <input type='radio' value='b' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_b"]. "<br>";
	echo "c. <input type='radio' value='c' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_c"]. "<br>";
	echo "d. <input type='radio' value='d' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_d"]. "<p>";
	echo "</div>";
}
//soal nomor 4
$nomor = 4;
$query = "SELECT * FROM soal_pilihan WHERE nomor = 4";
$soal = mysqli_query($link, $query);
if (mysqli_num_rows($soal) > 0) {
	$data = mysqli_fetch_assoc($soal);
	echo "<div class='w3-hover-aqua'>";
	echo $nomor . ". ". $data['pertanyaan']. "<br>";
	echo "<img src='gambar/turn-back.png' alt='putar-arah' width='100'><br>";
	echo "a. <input type='radio' value='a' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_a"]. "<br>";
	echo "b. <input type='radio' value='b' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_b"]. "<br>";
	echo "c. <input type='radio' value='c' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_c"]. "<br>";
	echo "d. <input type='radio' value='d' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_d"]. "<p>";
	echo "</div>";
}
//soal nomor 5-28
$nomor = 5;
$query = "SELECT * FROM soal_pilihan WHERE nomor BETWEEN 5 AND 28";
$soal = mysqli_query($link, $query);
if (mysqli_num_rows($soal) > 0) {
	while($data = mysqli_fetch_assoc($soal)) {
	echo "<div class='w3-hover-aqua'>";
	echo $nomor . ". ". $data['pertanyaan']. "<br>";
	echo "a. <input type='radio' value='a' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_a"]. "<br>";
	echo "b. <input type='radio' value='b' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_b"]. "<br>";
	echo "c. <input type='radio' value='c' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_c"]. "<br>";
	echo "d. <input type='radio' value='d' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_d"]. "<p>";
	echo "</div>";
	$nomor++;
	}
}

//soal nomor 29
$nomor = 29;
$query = "SELECT * FROM soal_pilihan WHERE nomor = 29";
$soal = mysqli_query($link, $query);
if (mysqli_num_rows($soal) > 0) {
	$data = mysqli_fetch_assoc($soal);
	echo "<div class='w3-hover-aqua'>";
	echo $nomor . ". ". $data['pertanyaan']. "<br>";
	echo "<img src='gambar/go-left.png' alt='kiri' width='100'><br>";
	echo "a. <input type='radio' value='a' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_a"]. "<br>";
	echo "b. <input type='radio' value='b' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_b"]. "<br>";
	echo "c. <input type='radio' value='c' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_c"]. "<br>";
	echo "d. <input type='radio' value='d' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_d"]. "<p>";
	echo "</div>";
}
//soal nomor 30
$nomor = 30;
$query = "SELECT * FROM soal_pilihan WHERE nomor = 30";
$soal = mysqli_query($link, $query);
if (mysqli_num_rows($soal) > 0) {
	$data = mysqli_fetch_assoc($soal);
	echo "<div class='w3-hover-aqua'>";
	echo $nomor . ". ". $data['pertanyaan']. "<br>";
	echo "<img src='gambar/two-way.png' alt='dua-arah' width='100'><br>";
	echo "a. <input type='radio' value='a' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_a"]. "<br>";
	echo "b. <input type='radio' value='b' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_b"]. "<br>";
	echo "c. <input type='radio' value='c' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_c"]. "<br>";
	echo "d. <input type='radio' value='d' name='jawaban[".$data["nomor"]."]'/>". $data["jawab_d"]. "<p>";
	echo "</div>";
}
	
	
?>
</div> <!-- Akhir Bagian Soal -->
<input onclick="finish()" id='soal1' type='submit' class='w3-btn w3-white' style="margin-top: 10px" name='btn_nilai' value='Submit' title="Kirim">
</form>
<footer class="w3-white w3-center w3-card-4">
	<h2>Created by: Ibrahim</h2>
</footer>
</div>

<script>
	function back(){
	var ask = window.confirm("Apakah Anda yakin untuk kembali ke halaman utama?\nSegala Pekerjaan yang telah Anda lakukan akan hilang\nPilih OK atau Cancel.");
		if(ask == true){
			document.location.href = "http://localhost/soal_ujiansim/index.html";
		}else{
			return false;
		}
}
function finish(){
	var konfirmasi = window.confirm("Apakah Anda sudah memeriksa kembali jawaban Anda?");
	if(konfirmasi == false){
		return false;
	}
}
</script>

</body>
</html>