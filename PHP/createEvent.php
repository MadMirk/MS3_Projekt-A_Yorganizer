<?php
SESSION_START();
//Das Script wird nur ausgeführt, sobald im Feld "eventname" etwas reingeschrieben wurde
if(isset($_POST['eventname'])) 
{
	//Datei zur Speicherung der einzelnen Events wird angelegt, wenn nicht vorhanden.
	$file = 'events.txt'; 
	
	//Wenn die Datei leer sein sollte, wird mit der ID=0 für das jeweilige Event begonnen
	if(filesize($file)==0)
	{
		$ID = 0; 
	}
	//ansonsten wird ein anderes php.script eingebunden, um die letzte ID zu ermitteln und um eins zu inkrementieren
	else
	{
		include 'loadEvents.php';
		$ID = $tempID;
	}	
	
	//Alle Inhalte des Formulars, sowie die ID werden nun in ein Array gespeichert
	$event = [
	0 => $ID,
	1 => $_POST['eventname'],
	2 => $_POST['description'],
	3 => $_POST['date'],
	4 => $_POST['sliderRelevance'],
	5 => $_POST['fixedDate'],
	6 => $_POST['datetask'],
	];
	
	//Wenn die Datei nicht leer ist, wird als Trennzeichen zwischen den Events ein "==" vorangesetzt
	if(filesize($file)!=0)
	{
		file_put_contents($file, "==", FILE_APPEND); 
	}
	
	//es werden nun alle Felder des Arrays nacheinander in die Textdatei geschrieben
	for($a = 0; $a < count($event); $a++)
	{
	   file_put_contents($file, $event[$a], FILE_APPEND); 
	   //solange das letze Feld nicht geschrieben ist, wird nach jedem Eintrag das Trennzeichen "|" in die Textdatei geschrieben
	   if($a < count($event)-1)
	   {
		file_put_contents($file, "|", FILE_APPEND); 
	   }
	}
}
//nach Beendigung des Scripts, wird man zur Startseite weitergeleitet.
//Das Weiterleiten auf die Startseite funktionert nur, wenn man auch von dieser Adresse auf die eventmanager.html gekommen ist.
//D.h. die Seite sollte nur unter unten angegebener Adresse aufgerufen werden
header('Location: http://localhost/index.html'); 

?>
