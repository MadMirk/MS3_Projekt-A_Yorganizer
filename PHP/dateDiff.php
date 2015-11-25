<?php
//FUNKTION --- Differenz zweier Daten in Tagen
	
	$now = time();
    $deadline = strtotime($event[3]); //strtotime((int)$_POST['Jahr']."-".(int)$_POST['Monat']."-".(int)$_POST['Tag']);
    $leftDays = $now - $deadline;
    if(abs(floor($leftDays/(60*60*24))) >= 365)
    {
		echo round(abs(floor($leftDays/(60*60*24)))/365,2);
		echo " Jahre!<br><br><br>";
	
	}
    elseif(abs(floor($leftDays/(60*60*24))) >= 30)
    {
		echo round(abs(floor($leftDays/(60*60*24)))/30,2);
		echo " Monate!<br><br><br>";
	}
	
	else
	{
		echo abs(floor($leftDays/(60*60*24)));
		echo " Tage!<br><br><br>";
	}
    	//Quelle DateDiff: http://stackoverflow.com/questions/2040560/finding-the-number-of-days-between-two-dates
    	//Quelle Variablen in mehreren voneinander unabhängigen PHP Scripten aurfurbar machen:
    	//http://www.php-kurs.info/tutorial-variablen_uebergeben_include.html
?>
