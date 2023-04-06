<?php 

include "src/SuperPower.php";


echo ">>>>>>>>SuperPower class<<<<<<<< <br>";
$SP = new SuperPower();

////SuperPower class

echo "----- This is FLYING method-----";
echo "<br>";
$SP->Flying();
echo "<br>";
echo "<br>";



echo "----- This is INVISIBILITY method-----";
echo "<br>";
$SP->Invisibility();
echo "<br>";
echo "<br>";


echo "----- This is LASER_EYE method-----";
echo "<br>";
$SP->LaserEye();
echo "<br>";
echo "<br>";


/////IronMan class
echo ">>>>>>>>>IronMan Class<<<<<<<";
echo "<br>";
$SP->IM();

////Thor class
echo "<br>";
echo "<br>";
echo ">>>>>>>>>Thor Class<<<<<<< <br>";
$SP->Th();



/////CaptainAmerica class
echo "<br>";
echo "<br>";
echo ">>>>>>>>>CaptainAmerica clalss<<<<<<< <br>";

$SP->CA();
echo "<br>";
echo "<br>";


echo ">>>>>>>>> HULK clalss<<<<<<< <br>";
$SP->Hlk();


?>