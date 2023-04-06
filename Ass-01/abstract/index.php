<?php

include "src/Abst.php";

$Abs = new Abst();

echo ">>>>PHP Abstract<<<< <br>";
echo "<br>";
$Abs->getAbst();
$Abs->powerSupply();
$Abs->MircoOven();
$Abs->Refrigerator();

echo "<br>";
echo "<br>";

echo ">>>>PHP Interface<<<< <br>";
$Abs->motherBoard();
$Abs->Brand();
$Abs->DisplayPanel();
$Abs->StorageType();
$Abs->Ports();





?>