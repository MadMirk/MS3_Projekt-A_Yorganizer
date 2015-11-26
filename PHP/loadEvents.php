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
		
		$tempAllEvents[$a][0] = $event[0];
		$tempAllEvents[$a][1] = $event[1];
		$tempAllEvents[$a][2] = $event[2];
		$tempAllEvents[$a][3] = $event[3];
		$tempAllEvents[$a][4] = $event[4];
		$tempAllEvents[$a][5] = $event[5];
		
		//wird in createEvent.php benötigt, um die Identifikationsnummer der einzelnen Events hochzuzählen	
		$tempID = $event[0]+1;			
   }  
   echo "vorA".$a;
   $a+=1;
   echo "nachA".$a;
}
echo "COUNT".count($tempAllEvents);
echo "<br><br>".$tempAllEvents[0][1]."<br>";
echo "<br><br>".$tempAllEvents[1][1]."<br>";
echo "<br><br>".$tempAllEvents[2][1]."<br>";
?>
