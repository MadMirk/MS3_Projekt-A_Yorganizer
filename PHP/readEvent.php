<?php
$datei = file("events.txt");
foreach($datei AS $ausgabeDAT)
{
	$zerlegung = explode("==", $ausgabeDAT);
	
	foreach($zerlegung AS $ausgabeEVE)
	{
		$event = explode("|", $ausgabeEVE);

		echo "Titel: <b>$event[0]</b><br>
		Beschreibung: $event[1]<br>
		Datum: $event[2]<br>
		eigene Priorität: $event[3]<br>
		Fester Termin: $event[4]<br>";
   }
   echo "<br><br>";
}
?>
