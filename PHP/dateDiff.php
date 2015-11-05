<?php
//FUNKTION --- Differenz zweier Daten in Tagen
	$now = time();
    	$your_date = strtotime((int)$_POST['Jahr']."-".(int)$_POST['Monat']."-".(int)$_POST['Tag']);
    	$datediff = $now - $your_date;
	 echo floor($datediff/(60*60*24));
    	//Quelle: http://stackoverflow.com/questions/2040560/finding-the-number-of-days-between-two-dates

$datediff;
?>

//Test HTML-CODE
<form action="dateDiff.php" method="Post">
	<p>DeadlineTag: <input type="text" name="Tag" /></p>
	<p>DeadlineMonat: <input type="text" name="Monat" /></p>
	<p>DeadlineJahr: <input type="text" name="Jahr" /></p>
    <input type="submit" value="absenden" />
</form>
