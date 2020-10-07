<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Muhdin nge php</title>
	</head>
	<body>
		
		<h1> Loop PHP </h1>


		<?php 
		// ----1) Pengulangan ----

		// for (Variableawal(mulai); batas(syarat); perubahan)
		
		$hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];

		// for($i = 0; $i < count($hewan); $i++){
		// 	echo "----------------------";
		// 	echo $hewan[$i];
		// 	echo "----------------------<br>";
		// }

		// -----2) Foreach --------

		// foreach ($hewan as $h) {
		// 	echo "----------------------";
		//  	echo $h;
		//  	echo "----------------------<br>";
		// }
		

		// $data = [	'nama' => 'hilman' ,
		// 			'umur' => 24 ,
		// 			'sifat' => 'malas' ,
		// 		];

		// 	foreach ($data as $key => $value) {
				
		// 		echo $value."<br>";
				
		// 	}
			
		// -------3) While & Do While ---------

		// while(syarat)

		$i = 7;

		// while ( $i < count($hewan) ) {
		// 	echo $hewan [$i]."<br>";
		// 	$i++;
		// }

		do{
			echo "------";
			echo $hewan[$i]."<br>";
			$i++;
		}while ( $i < count($hewan));

		?>
		
	</body>
</html>