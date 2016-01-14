<?php	
	//Für jedes Event wird Score anhand der Wertetabelle errechnet
	for($i = 0; $i < $CountEvents; $i++)
	{
		//Das php-Script errechnet die Tage, die zwischen jetzigen Datum un der Deadline des jeweiligen Events liegen
		include 'dateDiff.php';
		
		//umso weniger Zeit noch übrig ist, desto höher die Priorität
		switch (true) 
		{
			case ($leftDays<7):
				$tempAllEvents[$i][7] += 5;				
			break;
			
			case ($leftDays<14):			
				$tempAllEvents[$i][7] += 4;
			break;
			
			case ($leftDays<30):				
				$tempAllEvents[$i][7] += 3;
			break;
			case ($leftDays<60):				
				$tempAllEvents[$i][7] += 2;
			break;
			case ($leftDays<180):				
				$tempAllEvents[$i][7] += 1;
			break;
			case ($leftDays>=180):				
				$tempAllEvents[$i][7] += 0;
			break;
		}
		
		//Wenn es ein Fester Termin ist, der unter keinen Umständen verschoben werden kann, steigt die Priorität
		if($tempAllEvents[$i][5]=="fixedDateYes")
		{
			$tempAllEvents[$i][7] += 1;
		}
		else
		{
			$tempAllEvents[$i][7] += 0;
		}
		
		//Wenn das Event eine Aufgabe, anstatt ein Termin, steigt die Priorität
		if($tempAllEvents[$i][6]=="taskOn")
		{
			$tempAllEvents[$i][7] += 3;
		}
		else
		{
			$tempAllEvents[$i][7] += 0;
		}
		
		//Am Ende wird noch die Priorität des Eventerstellers hinzuaddiert.
		$tempAllEvents[$i][7] += $tempAllEvents[$i][4];
	}	
	
	/*Schlüssel zur Errechnung
	 * Priorty
	 * < 7days   +5
	 * < 14days	 +4
	 * < 30days  +3
	 * < 60days  +2
	 * < 180days +1
	 * 
	 * fixedDate +1
	 * task 	 +3
	 * 
	 * + ownPriority
	 */
?>		

<!--
=== Feedback Alpers, Dez 11 ===

Sehr gut, dass Sie hier den switch/case verwendet haben.

=== Feedback Alpers, Ende ===
-->
