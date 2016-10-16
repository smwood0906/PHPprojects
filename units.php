<?php
//number in pounds we want to convert to kilograms
$pounds= 140;
//floating point value for pound to kilogram conversion
$lb_to_kg= 0.453592;
//use variables above to calculate pounds multiplied by the kilogram conversion
$kilogram = $pounds * $lb_to_kg;
//display pounds to kilograms
echo "Weight: ";
echo $pounds;
echo "lb = ";
echo $kilogram;
echo "kg ";

//number in miles we want to convert to kilometers
$miles = 2.5;
//floating point value for the miles to kilometer conversion
$mile_to_km = 1.60934;
//use variables above to caluclate miles multiplied by the kilometer converstion
$kilometers = $miles * $mile_to_km;
//display miles to kilometers
echo "Distance: ";
echo $miles;
echo "miles = ";
echo $kilometers;
echo "km ";


?>
