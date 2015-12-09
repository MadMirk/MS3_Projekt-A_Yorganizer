<!DOCTYPE	html>
<html lang=de>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css"	/>
		<meta name="view port" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta charset="UTF-8">
		<title>eventmanager</title>
	</head>
	<evm>
	<body>
	 	<header>
			<img src="images/yorganizer.jpg" alt="logo" />
		</header>
		<main>	
		<form action="createEvent.php" method="Post">
<?php

if(isset($_POST['EvID'])) 
{
	$pickedID = $_POST['EvID'];
	include 'loadEvents.php';

	echo '<form method="Post">';
	
	if($tempAllEvents[$pickedID][6] == "dateOn")
	{
			echo '<label><input type="radio" name="datetask" value="dateOn" checked/>    date</label>
				  <label><input type="radio" name="datetask" value="taskOn" />    task</label> <br><br><br>';
	}
	else
	{
            echo '<label><input type="radio" name="datetask" value="dateOn" />    date</label>
				  <label><input type="radio" name="datetask" value="taskOn" checked/>    task</label> <br><br><br>';
    }         
    
	echo 'event name:<br><input type="text" value="'.$tempAllEvents[$pickedID][1].'" name="eventname"><br><br><br>
	relevance:<br><input id="slider2" name="sliderRelevance" type="range" min="1" max="5" value="'.$tempAllEvents[$pickedID][4].'" step="1" /><br><br><br>';

	echo '<input type="date" name="date">

	<script>
		if (!Modernizr.touch || !Modernizr.inputtypes.date) 
		{
			$('input[type=date]')
			.attr('type', 'text')
			.datepicker({
			// Consistent format with the HTML5 picker
			dateFormat: 'yy-mm-dd'
			});
    	}
	</script><br><br><br>';
			
	if($tempAllEvents[$pickedID][5] == "fixedDateYes")
	{
		echo '<p>fixed date?<br><br>
		<label><input type="radio" name="fixedDate" value="fixedDateYes" checked/>     yes</label>
		<label><input type="radio" name="fixedDate" value="fixedDateNo"/>     no</label><br>	
		</p><br><br><br>';
	}
	else
	{
		echo '<p>fixed date?<br><br>
		<label><input type="radio" name="fixedDate" value="fixedDateYes" />     yes</label>
		<label><input type="radio" name="fixedDate" value="fixedDateNo" checked/>     no</label><br>	
		</p><br><br><br>';
	}         			
			
	echo '<textarea placeholder="'.$tempAllEvents[$pickedID][2].'" name="description" rows="5" cols="50" maxlength="250"></textarea> ';
}//action="editEvent.php"

if(isset($_POST['eventname'])) 
{
	$pickedID = $_POST['EvID'];
	include 'loadEvents.php';
	$file = 'events2.txt';
	echo "PickedID".$pickedID."<br>";
	echo "EventCount".$tempAllEvents[0]."<br>";
	//Überschreiben des editieren Elementes im temporären Array
	$tempAllEvents[$pickedID][1] = $_POST['eventname'];
	$tempAllEvents[$pickedID][2] = $_POST['description'];
	$tempAllEvents[$pickedID][3] = $_POST['date'];
	$tempAllEvents[$pickedID][4] = $_POST['sliderRelevance'];
	$tempAllEvents[$pickedID][5] = $_POST['fixedDate'];
	$tempAllEvents[$pickedID][6] = $_POST['datetask'];
	
	//komplettes neuschreiben der Textdatei mit allen Events
	for($a = 0; $a <$CountEvents; $a++)
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
