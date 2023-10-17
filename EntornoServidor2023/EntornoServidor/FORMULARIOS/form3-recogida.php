<?php
$nombre=$_REQUEST["nombre"];
switch($nombre){
    case 1: isset($nombre)?print ("tiene valor"."<br>"):print ("no hay dato");
    case 2: is_null($nombre)? print ("es nulo"."<br>"):print (" no es nulo"."<br>") ; 
    case 3: is_bool($nombre)? print ("es boolean"."<br>"): print (" no es boolean"."<br>");




    case 4: is_numeric($nombre)?: {print (is_numeric($nombre)."<br>");}
    case 5: is_int($nombre)?: {print (is_int($nombre)."<br>");}
    case 6: is_float($nombre)?: {print (is_float($nombre)."<br>");}
    case 7: is_string($nombre)?: {print (is_string($nombre)."<br>");}
    case 8: is_scalar($nombre)?: {print (is_scalar($nombre)."<br>");}
    case 9: is_array($nombre)?: {print (is_array($nombre)."<br>");}
    case 10: is_callable($nombre)?: {print (is_callable($nombre)."<br>");}
    case 11: is_object($nombre)?: {print (is_object($nombre)."<br>");}
    case 12: is_resource($nombre)?: {print (is_resource($nombre)."<br>");}
    case 13: is_countable($nombre)?: {print (is_countable($nombre)."<br>");}
    case 14: is_iterable($nombre) ?:


?>