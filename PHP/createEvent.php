<?php
SESSION_START();
if(isset($_POST['eventname'])) 
{
	$file = 'events.txt';
	
	if(filesize($file)==0)
	{
		$ID = 0; 
	}
	else
	{
		include 'loadEvents.php';
		$ID = $tempID;
	}	
	
	$event = [
	0 => $ID,
	1 => $_POST['eventname'],
	2 => $_POST['description'],
	3 => $_POST['date'],
	4 => $_POST['sliderRelevance'],
	5 => $_POST['fixedDate'],
	6 => $_POST['datetask'],
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
header('Location: http://localhost/index.html'); 
?>
