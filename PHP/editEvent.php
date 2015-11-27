<form action="editEvent.php" method="Post">
    <p>EventID: <input type="text" name="EvID" /></p>
    <input type="submit" value="absenden" />
</form>

<?php

if(isset($_POST['EvID'])) 
{
	$pickedID = $_POST['EvID'];
	include 'loadEvents.php';

	echo '<form method="Post">
    <p>Name: <input type="text" name="Titel" value='.$tempAllEvents[$pickedID][1].' /></p>
    <p>Description <input type="text" name="Beschreibung" value='.$tempAllEvents[$pickedID][2].' /></p>
    <p>DeadlineTag: <input type="text" name="Datum"  value='.$tempAllEvents[$pickedID][3].'/></p>
    <p>Prioität: <input type="text" name="Priorität" value='.$tempAllEvents[$pickedID][4].'/></p>
    <p>festes Datum: <input type="text" name="FesterTermin" value='.$tempAllEvents[$pickedID][5].'/></p>
    <input type="submit" value="absenden" />
	</form>';
}//action="editEvent.php"

if(isset($_POST['Titel'])) 
{
	$pickedID = $_POST['EvID'];
	include 'loadEvents.php';
	$file = 'events2.txt';
	echo "PickedID".$pickedID."<br>";
	echo "EventCount".$tempAllEvents[0]."<br>";
	//Überschreiben des editieren Elementes im temporären Array
	$tempAllEvents[$pickedID][1] = $_POST['Titel'];
	$tempAllEvents[$pickedID][2] = $_POST['Beschreibung'];
	$tempAllEvents[$pickedID][3] = $_POST['Datum'];
	$tempAllEvents[$pickedID][4] = $_POST['Priorität'];
	$tempAllEvents[$pickedID][5] = $_POST['FesterTermin'];
	
	//komplettes neuschreiben der Textdatei mit allen Events
	for($a = 0; $a < count($tempAllEvents); $a++)
	{
		for($i = 0; $i < count($tempAllEvents[$a]); $i++)
		{			
			file_put_contents($file, $tempAllEvents[$a][$i]); 
			if($i < count($tempAllEvents[$a][$i])-1)
			{
				file_put_contents($file, "|"); 
			}
		}
		echo $tempAllEvents[$a][1]."<br>";
		
		if($a < count($tempAllEvents[$a])-1)
			{
				file_put_contents($file, "=="); 
			}
	}	
}

?>
