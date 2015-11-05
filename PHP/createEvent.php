<?php

//benötigte Variablen
$id;

$name = $_POST['Titel'];
$description = $_POST['Beschreibung'];
$deadline = $_POST['Deadline'];
$leftDays = strtotime((int)$_POST['Jahr']."-".(int)$_POST['Monat']."-".(int)$_POST['Tag'])
$ownPriority = $_POST['Priorität'];
$fixDate = $_POST['FesterTermin'];

$finalPriority;

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
