<?php
//menyambungkan database
$link = mysqli_connect('localhost', 'root', '', 'soal_ujian');

//mengecek apakah db terkoneksi atau tidak
if(!$link){
	echo "Maaf, tidak dapat disambungkan oleh server";
}
?>