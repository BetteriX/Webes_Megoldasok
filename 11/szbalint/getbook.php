<?php
header('Content-Type: text/html; charset=utf-8');
require "konyvtar.php";
$sorszam = $_GET["sorszam"];
echo "A kért $sorszam. könyvcíme: ", $konyvek[$sorszam]["cim"], "<br>";
?>