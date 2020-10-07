<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Muhdin</title>
	</head>
	<body>
		
		<?php 
		// Belajar PHP
		/* 
		bisa memberikan
		komentar berbaris
		baris
		*/

		// variabel pada php

		/*
			$x = "Sekolah Muhdin";
			$A23 = "text";

			echo "<h1>$x</h1>"; //echo atau print
			echo "Halo ".$x."<br>";
			echo "Member ".$A23;
		*/

		// tipe data -string
		/*	
			$nama = "Sekolahnya Muhdin";
			$nama2 = "Bermain Coding";
			echo $nama." ".$nama2."<br>";
			echo "Selamat datang di \$nama ";
		*/

		// 1. integer 2. float
			
			$angka = 1000;
			$angka2 = 100;
			$angka3 =2.223;

			// echo $angka + $angka2;
		
		// ------- Operator aritmatik
			// + - * / % ++ --
			
			// nama = nilai
			// $angka = $angka + $angka2;
			// $angka += $angka2;

		// ------- Math Methode
		// round rand(min,max) max min
		// echo "angka hari ini adalah ".rand(5,11);
		
		// ------- String method
		// strlen && str_word_count
		// str_repeat(text, times); str_shuffle(text)

		$text = "Hai Semuanya di sini ";
		echo strlen($text)."<br>";
		echo str_word_count($text)."<br>";
		echo str_repeat( str_replace("Hai", "Hello", $text),10 )."<br>";
		echo str_repeat("Hello", 8);
		?>
		halo Semuanya !

	</body>
</html>