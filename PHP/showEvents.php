<?php
	include 'loadEvents.php';
	
	//Sortierung des Arrays nach Priorität
	$sortArray = array(); 
    foreach($tempAllEvents as $key => $array) 
    { 
        $sortArray[$key] = $array[7]; 
    } 
    array_multisort($sortArray, SORT_DESC, SORT_NUMERIC, $tempAllEvents); 
	
	//Ausgabe des Arrays
	for($i = 0; $i < $CountEvents; $i++)
	{
		echo "Titel: <b>".$tempAllEvents[$i][1]."</b><br>
		Beschreibung: ".$tempAllEvents[$i][2]."<br>
		Datum: ".$tempAllEvents[$i][3]."<br>
		eigene Priorität: ".$tempAllEvents[$i][4]."<br>
		Fester Termin: ".$tempAllEvents[$i][5]."<br>
		<br>
		Noch ";
		include 'dateDiff.php'; 
		echo $leftDays." Tage!<br>
		Priorität: ".$tempAllEvents[$i][7]."<br><br>";	
	}	
?>
