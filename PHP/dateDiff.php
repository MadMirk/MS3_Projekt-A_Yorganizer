<?php
//FUNKTION --- Differenz zweier Daten in Tagen
	SESSION_START(); 
	
	$now = time();
    $_SESSION["deadline"] = strtotime((int)$_POST['Jahr']."-".(int)$_POST['Monat']."-".(int)$_POST['Tag']);
    $_SESSION["leftDays"] = $now - $_SESSION["deadline"];
	echo floor($_SESSION["leftDays"]/(60*60*24));
    	//Quelle DateDiff: http://stackoverflow.com/questions/2040560/finding-the-number-of-days-between-two-dates
    	//Quelle Variablen in mehreren voneinander unabhängigen PHP Scripten aurfurbar machen:
    	//http://www.php-kurs.info/tutorial-variablen_uebergeben_include.html
?>
