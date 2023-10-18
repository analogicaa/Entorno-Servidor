<?php
// 2. VARIABLES QUE RECOGEN DATOS

$tipoVivienda=recoge("tipoVivienda");
$zona=recoge("zona");
$direccion = recoge("direccion");
$dormitorios= recoge("dormitorios");
$precio=recoge("precio");
$tamano=recoge("tamano");
$piscina= recoge ("piscina");
$jardin= recoge("jardin");
$garaje=recoge("garaje"); 
$comentario=recoge("comentario");

// 3. VARIABLES AUXILIARES DE COMPROBACIÓN

$direccionOk = false;
$dormitoriosOk=false;
$precioOk=false;
$tamanoOk=false;
$comentarioOk=false;

// 4. VALIDACIÓN DE DATOS Y GENERACIÓN DE AVISOS

 
// VALIDACIÓN DE DIRECCIÓN

// Define un patrón regular con caracteres permitidos para una dirección en España
$patron = '/^[\p{L}\d\sº\/,\-\'#áéíóúüÁÉÍÓÚÜ]+$/u'; 
if (empty($direccion)) {
    print "La dirección es obligatoria.";
}
elseif (is_numeric($direccion)) {
    print "<p>No es una dirección válida.</p>";
}
elseif (!preg_match($patron, $direccion)) {
    print "La dirección contiene caracteres no permitidos.";
}
elseif (strlen($direccion) > 50) {
    print "El campo de la dirección excede la longitud máxima permitida (50 caracteres).";
}
else{
    $direccionOk= true;
}

 // VALIDACIÓN DE DORMITORIOS

if ($dormitorios == "") {
    print "<p>No ha seleccionado número de dormitorios.</p>\n";
}
elseif (($dormitorios !== "1" )&& ($dormitorios !== "2") && ($dormitorios !== "3") && ($dormitorios !== "4") && ($dormitorios !== "5" )){
    print "Has introducido una opción no válida";
}
else{
    $dormitoriosOk=true;
}

// VALIDACIÓN DE PRECIO

if ($precio == "") {
    print "<p>No ha introducido precio</p>\n";
}
elseif (!is_numeric($precio) ) {
    print "Has introducido un valor no numérico";  
}
elseif ($precio<0) {
   print "El precio debe ser mayor que cero";
}
elseif ($precio>99999999) {
    print "El precio no puede exceder de 8 dígitos";
 }
else{
    $precioOk=true;
}
 
// VALIDACIÓN DE TAMAÑO
 
if ($tamano == "") {
    print "<p>No ha introducido tamaño</p>\n";
}
elseif (!is_numeric($tamano) ) {
    print "Has introducido un valor no numérico";  
}
elseif ($tamano<0) {
   print "El tamaño debe ser mayor que cero";
}
elseif ($tamano>999){
    print "El tamaño no puede exceder de tres dígitos";
}
else{
    $tamanoOk=true;
}

// VALIDACIÓN DE OBSERVACIONES

if (is_numeric($comentario)) {
    print "<p>No es una comentario válido.</p>";
}
elseif (strlen($comentario) > 500) {
    print "El campo de las observaciones exceden la longitud máxima permitida (500 caracteres).";
}
else{
    $comentarioOk= true;
}
?>