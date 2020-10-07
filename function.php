<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Muhdin nge php</title>
	</head>
	<body>
		
		<h1> Logika di PHP </h1>


		<?php 
		// ----------Fungsi--------
		



		function print_text($text, $angka){
			$text = "Gedung ".$text." ".$angka;
			echo "----------- ";
			echo $text;
			echo " -----------";

		}
		function jarak(){
			echo "<br>";
		}
		// print_text("Koding",21);
		// jarak();
		// print_text("Merawat",22);
		// jarak();
		// print_text("Mengemudi",23);
		// jarak();

		// ----- Return Fungsi -------

		 // function menghitung($x, $y){
		 // 	$z = $x + $y;
		 // 	return $z;
		 // }

		// $hasil = menghitung(2, 5) * 10;
		// echo "Hasil dari penjumlahan ". $hasil;
		
		$a = 2;
		$b = 3;

		function menghitung(){
			// global $a, $b;
			$c = $GLOBALS['a'] + $GLOBALS['b'];
			return $c;
		}

		// echo menghitung();

		// ---- Anonymous function ----
		
		$ngetik = function($text){
			echo $text;
		};

		// $greeting = $ngetik ;

		// $ngetik( 'selamat datang semuanya 123 ');

		// --- Callback Function ---

		 function berteriak($callback){
		 	echo "HALLOOOOOOO <br>";
		 	// $callback();

		 	if (is_callable($callback)) {
		 		call_user_func($callback,' Selamat Datang');
		 	}else{
		 		echo ' dia bukan fungsi';
		 	}


		 	
		 }	

		//  berteriak (function()){
		//  echo ' saya anonymous, alias ngga punya teman';}

		$panggil = function($text){ 
			echo $text;
		};


		berteriak($panggil);

		?>


	</body>
</html>  