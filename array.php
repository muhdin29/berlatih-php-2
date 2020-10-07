<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Array PHP</h1>

	<?php
	
	echo "hallo"; 
	
	 // tipe data array
	
	// $angka = [5, 10, 2, 3, 9]
	// $kotak = array('anjing', 'kucing', 'kura-kura','anjing');
	// $nama = ['himlan','endi','tiqa'];

	// print_r ($kotak);

	// echo $nama[2]

	// metode array
	// array_unique , _reverse , shufle , count , sort

	// shuffle ($kotak);
	// print_r (array_unique($kotak));
	// print_r ($kotak);

	// sort($kotak);
	// print_r($kotak);

	// echo count ($nama);

	// associative array

	// $data = array(	'nama' => "hilman" ,
	// 				'umur' => 21 ,
	// 				'kerja' => "pengacara" 
	// 			);
	// $data2 = array(	'istri' => "belum ada" ,
	// 				'laptop' => "chromebook" 
	// 			);
	// print_r($data);

	
	// $data ['nama'] = "Hilman Ramadhan";

	// echo "namanya adalah ".$data['nama'];

	// methode assosiatif array
	// array_values array_keys array_merge


	// print_r (array_keys($data));
	// echo "<br>";
	// print_r (array_values($data));
	// echo "<br>";
	// print_r (array_merge($data, $data2));
	// echo "<br>";
		
	$data = array(
				array ("programer","21","males"),
				array ("designer","24", "rajin"),
				array ('manager','34','males banget')

			);
		//  00 01 02
		//  10 11 12
		//  20 21 22

		$data [2][1] = '21';
		echo $data [2][1];

	?>



	</body>
</html>