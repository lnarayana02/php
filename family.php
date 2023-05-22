<?php
$vemulaFamily = array("vbh", "vth", "vln", "vmn");
$madamanchiFamily = array("mmk", "mcm", "mjn", "mvi");

$searchItem = "mjn";

if (in_array($searchItem, $vemulaFamily)) {
    echo $searchItem . " is in the Vemula family.";
} elseif (in_array($searchItem, $madamanchiFamily)) {
    echo $searchItem . " is in the Madamanchi family.";
} else {
    echo $searchItem . " is in another family.";
}

?>
