//Test HTML-CODE
<form action="createEvent.php" method="Post">
    <p>Name: <input type="text" name="Titel" /></p>
    <p>Description <input type="text" name="Beschreibung" /></p>
    <p>DeadlineTag: <input type="text" name="Tag" /></p>
	<p>DeadlineMonat: <input type="text" name="Monat" /></p>
	<p>DeadlineJahr: <input type="text" name="Jahr" /></p>
    <p>Prioität: <input type="text" name="Priorität" /></p>
    <p>festes Datum: <input type="text" name="FesterTermin" /></p>
    <input type="submit" value="absenden" />
</form>

<?php
SESSION_START();
if(isset($_POST['Titel'])) 
{
	$file = 'events.txt';
	
	if(filesize($file)==0)
	{
		$ID = 0; 
	}
	else
	{
		include 'readEvent.php';
		$ID = $tempID;
	}	
	
	$event = [
	0 => $ID,
	1 => $_POST['Titel'],
	2 => $_POST['Beschreibung'],
	3 => $_POST['Jahr']."-".(int)$_POST['Monat']."-".(int)$_POST['Tag'],
	4 => $_POST['Priorität'],
	5 => $_POST['FesterTermin'],
	];
	
	if(filesize($file)!=0)
	{
		file_put_contents($file, "==", FILE_APPEND); 
	}
	
	for($a = 0; $a < count($event); $a++)
	{
	   file_put_contents($file, $event[$a], FILE_APPEND); 
	   if($a < count($event)-1)
	   {
		file_put_contents($file, "|", FILE_APPEND); 
	   }
	}	
}
?>


