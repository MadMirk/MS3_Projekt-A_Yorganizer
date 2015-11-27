<?php
	include 'loadEvents.php';
	
	for($i = 0; $i < count($tempAllEvents); $i++)
	{
		echo "Titel: <b>".$tempAllEvents[$i][1]."</b><br>
		Beschreibung: ".$tempAllEvents[$i][2]."<br>
		Datum: ".$tempAllEvents[$i][3]."<br>
		eigene Priorität: ".$tempAllEvents[$i][4]."<br>
		Fester Termin: ".$tempAllEvents[$i][5]."<br>
		<br>
		Noch ";
		include 'dateDiff.php'; 	
	}	
?>
