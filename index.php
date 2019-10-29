<?php

/* !Simple Converter! */

$pounds = 140;//Value converted to kilograms

$lb_to_kg = 0.453592;//Pounds in a kilogram

$kilograms = $pounds * $lb_to_kg;//Convert

/* Display pounds converted to kilograms */
echo "Weight: " ;
echo $pounds;
echo "lb = ";
echo $kilograms;
echo " kg";

$miles = 2.5; //Value converted to kilometers
$mile_to_km = 1.60934;//Miles to kilometers

$kilometers = $miles * $mile_to_km; //Convert

/* Display miles to kilometers */ 
echo "Distance: ";
echo $miles;
echo "miles = ";
echo $kilometers;
echo " km";

?>