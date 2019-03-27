<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>
<body style="background-image: url(gambar/wallpaper.png); background-attachment: fixed">
<div class="w3-white" id="timer" style="float: right; margin-right: 25px; position: fixed;"></div>
<!-- Body -->
<div class="w3-container w3-animate-opacity" style="margin: 0 192px 4px 192px;">
<!-- Header -->
<header class="w3-padding w3-yellow w3-center"><h1>Result</h1>
<a class="w3-btn w3-orange w3-card-4" id="home1" href="http://localhost/soal_ujiansim/index.html">Home</a>
</header>
<!-- Bagian Hasil -->
<div class=" w3-container w3-white w3-card-24 w3-padding-16" style="min-height: 650px">
<?php
error_reporting(0);

//koneksi database
include 'template/koneksi.php'; 

if($_POST["btn_nilai"]){
		//echo "Anda mengklik tombol!";
$jawaban = $_POST["jawaban"];
$benar = 0;

if(count($jawaban) < 1){ //mengecek apakah salah satu jawaban sudah dipilih atau tidak
	echo "<h2 class='w3-padding w3-red w3-card-4 w3-center w3-animate-zoom'>Anda belum menjawab soal!</h2>";
} else{ //jika sudah dipilih maka proses di bawah berjalan
foreach ($jawaban as $nomor => $nilai) {
		$data_soal = mysqli_query($link, "SELECT * FROM soal_pilihan WHERE nomor = '$nomor'");
		$data_jawab = mysqli_fetch_assoc($data_soal);
		if($data_jawab['jawaban'] == $nilai){
			$benar++;
		}
}

//proses penilaian
$jumlah_soal = mysqli_query($link, "SELECT * FROM soal_pilihan");
$jum_soal = $jumlah_soal->num_rows;//$jumlah_soal->num_rows; //30
$nilai_per_soal = 100 / $jum_soal; //100 / 30
$jawaban_salah = $jum_soal - $benar;
$skor_nilai = round($nilai_per_soal * $benar, 2);

//menampilkan nilai
echo "<div style='min-height: 550px' class=' w3-container w3-yellow w3-card-4'><h1>Hasil Jawaban Anda:</h1>";

echo "<div class='w3-row'>";
echo "<div class='w3-container w3-padding-32 w3-center w3-green w3-card-4 w3-animate-zoom w3-half'>";
echo "Jawaban yang benar: ";
echo "<h2>" .$benar. "</h2>";
echo "<img src='gambar/true.png' width='50px' alt='true'>";
echo "</div>";

echo "<div class='w3-container w3-padding-32 w3-center w3-red w3-card-4 w3-animate-zoom w3-half'>";
echo "Jawaban yang salah/tidak dipilih: ";
echo  "<h2>" .$jawaban_salah. "</h2>";
echo "<img src='gambar/false.png' width='50px' alt='false'><br>";

echo "</div>";
echo "</div>"; //end row

if($benar < 21){
	echo "<div class='w3-container w3-padding-32 w3-section w3-center w3-red w3-card-4 w3-animate-zoom'>";
	echo "<h2>Nilai: ".$skor_nilai."</h2>";
	echo "Anda Tidak Lulus!". '<p>';
	echo "<img src='gambar/false.png' width='50px' alt='false'><br>";
	echo "Maaf, Nilai Anda kurang dari 70, Anda tidak lulus pada simulasi ujian teori SIM C.";
	echo "</div>";
}else{
	echo "<div class='w3-container w3-padding-32 w3-section w3-center w3-green w3-card-4 w3-animate-zoom'>";
	echo "<h2>Nilai: ".$skor_nilai."</h2>";
	echo "Anda Lulus!" . '<p>';
	echo "<img src='gambar/true.png' width='50px' alt='true'><br>";
	echo "Selamat! Anda lulus pada simulasi ujian teori SIM C!";
	echo "</div>";
}


echo "</div>";
}
}
?>
<!-- Detail -->
<?php if(count($jawaban) >= 1){ ?>
<center><button id="rincian" class="w3-btn w3-blue w3-padding-8 w3-section">Detail</button></center>
<div id="detail" style="display: none">
<center><h1>Rincian</h1></center>
<table class="w3-table-all w3-card-4">
	<?php 
		$query = "SELECT * FROM soal_pilihan";
		$soal = mysqli_query($link, $query);
		$nmr = 1;
		if(mysqli_num_rows($soal) > 0){
			echo "<tr><th>Nomor</th> <th>Pertanyaan</th> <th>Jawaban Anda</th> <th>Jawaban yang benar</th>";
			while ($data = mysqli_fetch_assoc($soal)) {
						if ($data['jawaban'] != $jawaban[$nmr]) {
							echo "<tr><td style='background-color: #f44336; color: white'>".$nmr."</td>";
			 				echo "<td style='background-color: #f44336; color: white'>". $data['pertanyaan']. "<br>";
			 					echo "a. ". $data['jawab_a']. "<br>";
			 					echo "b. ". $data['jawab_b']. "<br>";
			 					echo "c. ". $data['jawab_c']. "<br>";
			 					echo "d. ". $data['jawab_d']. "<br>";
			 				echo "</td>";
			 				echo "<td style='background-color: #f44336; color: white'>"; echo $jawaban[$nmr]; "</td>";
			  				echo "<td style='background-color: #4CAF50; color: white'>". $data['jawaban']."</td>";
				  			echo "</tr>";
				  	} 
				  	else{
				  			echo "<tr><td>".$nmr."</td>";
			 				echo "<td>". $data['pertanyaan']. "<br>";
			 					echo "a. ". $data['jawab_a']. "<br>";
			 					echo "b. ". $data['jawab_b']. "<br>";
			 					echo "c. ". $data['jawab_c']. "<br>";
			 					echo "d. ". $data['jawab_d']. "<br>";
			 				echo "</td>";
			 				echo "<td>"; echo $jawaban[$nmr]; "</td>";
			  				echo "<td>". $data['jawaban']."</td>";
				  			echo "</tr>";
				  	}
				$nmr++;
		}
	}
	 ?>
</table>
<table id="summary" align="center" class="w3-table-all w3-hover-shadow w3-centered w3-section" style="width: 40%">
		<tr>
		<td>Jumlah Soal : </td><td>30</td>
		</tr>
		<tr>
		<td>Nilai per Soal : </td><td><?php echo round($nilai_per_soal, 2) ?></td>
		</tr>
		<tr>
		<td>Jawaban Benar : </td><td><?php echo "<span style='color: #4CAF50; font-weight: bold'>". $benar. "</span>"; ?></td>
		</tr>
		<tr>
		<td>Jawaban Salah : </td><td><?php echo "<span style='color: #f44336; font-weight: bold'>". $jawaban_salah. "</span>"; ?></td>
		</tr>
		<tr>
		<td>Nilai Anda: </td><td><?php if($benar < 21){echo "<span style='color: #f44336; font-weight: bold'>". $skor_nilai. "</span>";} else{echo "<span style='color: #4CAF50; font-weight: bold'>". $skor_nilai. "</span>";} ?> </td>
		</tr>
		<tr>
		<?php if($benar < 21){echo "<td colspan='2' id='result' style='background-color: #f44336; color: white'><span>Anda <b>Tidak Lulus</b> simulasi ujian SIM C!</span></td>";} else{echo "<td colspan='2' id='result' style='background-color: #4CAF50; color: white'><span>Anda <b>Lulus</b> simulasi ujian SIM C!</span></td>";} ?>
		</tr>
</table>

<?php } ?>

</div>
</div>
<script>
	$(document).ready(function(){
		$("#rincian").click(function(){
			$("#detail").slideToggle();
		});
		$("#summary").mouseenter(function(){
			for(var i = 0; i <= 3; i++){
			$("#result").fadeTo("fast", 0.6).fadeTo("fast", 1.0);
		}
		});
		$("#home1").click(function(){
			alert("Terima Kasih telah mengunjungi website ini!");
		})
	});
</script>
</body>
</html>