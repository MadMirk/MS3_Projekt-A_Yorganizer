<?php
//FUNKTION --- Uhrzeit deadlineDays errechnen
date_default_timezone_set("Europe/Berlin");
$timestamp = time();


$dateCurrent = new DateTime((int)$_POST['Jahr']."-".(int)$_POST['Monat']."-".(int)$_POST['Tag']);

echo "-------------------";
$dateEvent = new DateTime(date("Y-m-d",$timestamp));
$interval = $date1->diff($date2);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
echo "difference " . $interval->days . " days ";
//benötigte Variablen
$id;

$name = $_POST['Titel'];
$description = $_POST['Beschreibung'];
$deadline = $_POST['Deadline'];
$deadlineDays;
$ownPriority = $_POST['Priorität'];
$fixDate = $_POST['FesterTermin'];

$finalPriority;

//echo $name; 
//echo $description;

?>

//Test HTML-CODE
<form action="datensatzAnlegen.php" method="Post">
    <p>Name: <input type="text" name="Titel" /></p>
    <p>Description <input type="text" name="Beschreibung" /></p>
    <p>DeadlineTag: <input type="text" name="Tag" /></p>
	<p>DeadlineMonat: <input type="text" name="Monat" /></p>
	<p>DeadlineJahr: <input type="text" name="Jahr" /></p>

    <p>Prioität: <input type="text" name="Priorität" /></p>
    <p>festes Datum: <input type="text" name="FesterTermin?" /></p>
    <input type="submit" value="absenden" />
</form>
