<?php
$nombre=$_REQUEST["nombre"];
if ($nombre == "") {
    print "  <p>No ha escrito nada.</p>\n";
    print "\n";
} elseif (!is_numeric($nombre)) {
    print "  <p>No ha escrito un número: <strong>$nombre</strong>.</p>\n";
    print "\n";
} else {
    print "  <p>Ha escrito un número: <strong>$nombre</strong>.</p>\n";
    print "\n";
}
?>