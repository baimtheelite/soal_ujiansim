	$(document).ready(function(){
		var detik 	= 0;
		var menit 	= 1;
		var jam		= 0;
		function hitung(){
		var x = setTimeout(hitung, 1000);
				$('#timer').html(
						'<h6 align="center">Sisa waktu Anda <br>'+jam +':'+ menit + ':' + detik
					);
				if (menit < 10 && menit > 5 &&jam == 0){
				$("#timer").removeClass("w3-white").addClass("w3-red");
				}
				if(menit <= 5 && menit >= 3 && jam == 0){
					$("#timer").fadeTo('slow', 0.5).fadeTo('slow', 1.0);
				}else{	
				if(menit < 3 && menit >= 0 &&jam == 0){
					for(var i = 0; i <= 3; i++){
					$("#timer").fadeTo("fast", 0.5).fadeTo("fast", 1.0);
						}
					}
				}
				
				detik--;
				
				if(detik < 0){
					detik = 59;
					menit--;
				
				if(menit < 0){
					menit = 59;
					jam--;
				
				if(jam < 0){
					clearInterval(x);
					var dis = document.getElementById('soal');
					var submitBtn = document.getElementById('soal1');
					var modal = document.getElementById('modal');
					dis.style.pointerEvents= 'none';
					dis.className += ' w3-opacity-max';
					submitBtn.style.pointerEvents = 'visible';
					modal.style.display = 'block';
					$('#soal').keydown(false);	
				}
			}
		}
	}
	hitung();
});

function back(){
	var ask = window.confirm("Apakah Anda yakin untuk kembali ke halaman utama?\nSegala Pekerjaan yang telah Anda lakukan akan hilang\nPilih OK atau Cancel.");
		if(ask == true){
			document.location.href = "http://localhost/soal_ujiansim/home.html";
		}
}