<?php
//Der Inhalt der Datei events.txt wird in eine Variable gespeichert
$datei = file("events.txt");

//Erzeugung des Arrays, wo am Ende alle Events gespeichert werden. 
//Da jedes Event mehrere Felder benötigt und es mehrere Events gibt, verwende ich ein 2-Dimensionales Array
$tempAllEvents[]=[];

//Inkrementierungsvariable zum hochzählen innerhlab der zweiten Schleife
$a=0;

//Mit zwei Schleifen und den "explode" Befehl, trenne ich die Zeichenkette anhand der definierten Trennzeichen
foreach($datei AS $ausgabeDAT)
{
	$zerlegung = explode("==", $ausgabeDAT);
	
	foreach($zerlegung AS $ausgabeEVE)
	{
		$event = explode("|", $ausgabeEVE);
		
		//Nach dem Trennen werden die einzelnen Werte für das jeweilige Event, in das mehrdimensionale Array geschrieben
		$tempAllEvents[$a] = array($event[0],$event[1],$event[2],$event[3],$event[4],$event[5],$event[6],"");
		
		//wird in createEvent.php benötigt, um die Identifikationsnummer der einzelnen Events hochzuzählen	
		$tempID = $event[0]+1;		
		$a+=1;	
   }    
}
//es wird die Gesamtzahl der vorhandenen Events in eine Variable gespeichert, da diese an verschiedensten Stellen gebraucht wird
//allerdings kostet das zählen Zeit und Leistung, weshalb sich das speichern in eine Variabel lohnt.
//Gerade wenn man den Wert inSchleifen benutzt, würde bei jedem Schleifendurchlauf gezählt werden müssen.
$CountEvents = count($tempAllEvents);

//Aufrufen eines Scriptes, um die Priorität der einzelnen Events zu berechnen
include 'calculatePriority.php';
?>
