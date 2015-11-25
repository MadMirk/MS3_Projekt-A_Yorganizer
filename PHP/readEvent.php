<?php
$datei = file("events.txt");
foreach($datei AS $ausgabeDAT)
{
	$zerlegung = explode("==", $ausgabeDAT);
	
	foreach($zerlegung AS $ausgabeEVE)
	{
		$event = explode("|", $ausgabeEVE);
		$tempID = $event[0]+1;
		
		echo "Titel: <b>$event[1]</b><br>
		Beschreibung: $event[2]<br>
		Datum: $event[3]<br>
		eigene Priorität: $event[4]<br>
		Fester Termin: $event[5]<br>
		<br>
		Noch ";
		include 'dateDiff.php'; 		
   }
   echo "<br><br>";
}
?>
