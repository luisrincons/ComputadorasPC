<?php
date_default_timezone_set('America/Mexico_City');
header("Pragma: no-cache");
$result  = "{";
$result .= "'userName':'Luis Alvaro', ";
$result .= "'ver':'0.1'";
$result .= "}";
echo $result;
?>