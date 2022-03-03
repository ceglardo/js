<?php
$procent = $_POST['podatek'] / 100;
$procent2= 1 - $procent;
$podatek = $_POST['kwota'] * $procent2;

echo $podatek;

?>