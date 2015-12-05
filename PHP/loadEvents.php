<?php
$datei = file("events.txt");
$tempAllEvents[]=[];
$a=0;
foreach($datei AS $ausgabeDAT)
{
	$zerlegung = explode("==", $ausgabeDAT);
	
	foreach($zerlegung AS $ausgabeEVE)
	{
		$event = explode("|", $ausgabeEVE);
		$tempAllEvents[$a] = array($event[0],$event[1],$event[2],$event[3],$event[4],$event[5],$event[6],"");
		
		//wird in createEvent.php benötigt, um die Identifikationsnummer der einzelnen Events hochzuzählen	
		$tempID = $event[0]+1;		
		$a+=1;	
   }    
}
$CountEvents = count($tempAllEvents);
include 'calculatePriority.php';
?>
