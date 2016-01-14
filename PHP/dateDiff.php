<?php
//FUNKTION --- Differenz zweier Daten in Tagen/Mren
	
	//aktuelle Zeit
	$now = time();
	
	//Fristtermin
    $deadline = strtotime($tempAllEvents[$i][3]);
    
    //Differenz zwischen aktueller Zeit und Fristtermin
    $leftDays = $now - $deadline;
    
    
    if(abs(floor($leftDays/(60*60*24))) >= 365)
    {		
		//echo round(abs(floor($leftDays/(60*60*24)))/365,2)." Jahre!.";
		//runterrechnen auf Jahre		
		$leftDays = abs(floor($leftDays/(60*60*24)));
	
	}
    elseif(abs(floor($leftDays/(60*60*24))) >= 30)
    {
		//echo round(abs(floor($leftDays/(60*60*24)))/30,2)." Monate!.";
		//runterrechnen auf Monate	
		$leftDays=abs(floor($leftDays/(60*60*24)));
	}
	
	else
	{
		//echo abs(floor($leftDays/(60*60*24)))." Tage!.";
		//runterrechnen auf Tage	
		$leftDays=abs(floor($leftDays/(60*60*24)));
	}
    	//Quelle DateDiff: http://stackoverflow.com/questions/2040560/finding-the-number-of-days-between-two-dates
    	//Quelle Variablen in mehreren voneinander unabhängigen PHP Scripten aurfurbar machen:
    	//http://www.php-kurs.info/tutorial-variablen_uebergeben_include.html
?>

<!--
=== Feedback Alpers, Dez 11 ===

Wenn Sie solche einfachen Berechnungen aus anderen Quellen übernehmen, brauchen Sie die
Quellen nicht zu benennen. 

Hier wie in den anderen PHP-Teilen gilt: Gut, schön übersichtlich.

=== Feedback Alpers, Ende ===
-->
