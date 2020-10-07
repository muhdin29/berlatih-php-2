<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Muhdin nge php</title>
	</head>
	<body>
		
		<h1> Logika di PHP </h1>


		<?php 
		// ------- tipe data boolean -------
		// $hasil = true;
		// $hasil2 = false;

		// ------- if dan else -------------
		// operator logika == === > >= < <= !=
		// $password = '1234';
		// $password2 = 1234;

		// if( $password === $password2) {
		// 	echo ' anda berhasil masuk!';
		// }else{
		// 	echo ' gagal! password anda tidak tepat!';
		// }

		// ------- Else if -------------------

		// $uang_programmer = 	1000;
		// $keyboard = 		2000;
		// $uang_designer	=	500;

		// // true atau false
		// $hasil = true;
		// $hasil2 = false;
		
		// // && atau ||

		// if ($uang_programmer > $keyboard || $uang_programmer + $uang_designer > $keyboard) {
		// 	echo "Bisa beli keyboard";
		// }else{
		// 	echo 'tidak bisa beli';
		// }


		// if ($uang_programmer > $keyboard) {
		// 	echo 'Beli Saja!';
		// }elseif ($uang_designer > $keyboard) {
		// 	echo "Pinjam Designer! ";
		// 	// -- if bercabang
		// 	if($uang_designer > $keyboard)
		// 	echo "mampu beli ".floor($uang_designer/$keyboard);

		// }else{
		// 	echo "Nabung lagi";
		// }

		// ------------ Switch Case --------------

		$nama	=	'Hilman';

		switch ($nama) {
			case 'Endy':
				echo "Namanya Endi";
				break;
			case 'Tiqa':
				echo "Namanya Tiqa";
				break;

			default:
				echo "Dia anak baru namanya ".$nama;
				break;
		}

		?>
		
	</body>
</html> 