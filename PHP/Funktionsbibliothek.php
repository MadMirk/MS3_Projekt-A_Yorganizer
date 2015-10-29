//Sammlung einfacher Funktionen und Mechanismen in PHP
/*
42
*/
//------Variablen------
<?php
$string = 'Hello World.'; OR $_ = 'Hello World.'; OR $s = 'Hello World.';
$int = 42;
$float = 42.;
$bool = true;
?>

//-----einbinden von Variablen in HTML------
<input type="text" value="<?php echo $string; ?>">

/*-----Activate Error Reporting-----
php.ini --> Error handling and logging
Change --> error_reporting = E_ALL & E_STRICT

OR

in PHP
<?php error_reporting(E_ALL); OR ini_set('error_reporting','E_ALL'); ?>
*/

//-----Concentation-----
$day = 'Thursday';
$date = 31;
$year = 2015;
<?php echo 'The date is '.$day.' '.$date.' '.$year;?> <--faster than echo ""
<?php echo "The date is $day $date $year";?>
<?php $text = 'Hello'; $text .= ' World'; ?>

