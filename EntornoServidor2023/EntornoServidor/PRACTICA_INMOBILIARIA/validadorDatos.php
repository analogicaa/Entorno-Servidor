<?php

 

 

 

// 1. Función de recogida de datos

 

function recoge($var, $m = "")

 

{

 

    $tmp = is_array($m) ? [] : "";
 
    if (isset($_REQUEST[$var])) {
         if (!is_array($_REQUEST[$var]) && !is_array($m)) {
             $tmp = trim(htmlspecialchars($_REQUEST[$var]));
        } elseif (is_array($_REQUEST[$var]) && is_array($m)) {
             $tmp = $_REQUEST[$var];
             array_walk_recursive($tmp, function (&$valor) {
             $valor = trim(htmlspecialchars($valor));
            });
        }
    }
    return $tmp;
}

 

 

 

// 2. Variables que recogen los datos

$tipoVivienda=recoge("tipoVivienda");
$zona=recoge("zona");
$direccion = recoge("direccion");
$dormitorios= recoge("dormitorios");
$precio=recoge("precio");
$tamano=recoge("tamano");
$piscina= recoge ("piscina");
$jardin= recoge("jardin");
$garaje=recoge("garaje"); 

// 3. Variables auxiliares de comprobación

$direccionOk = false;
$dormitoriosOk=false;
$precioOk=false;
$tamanoOk=false;

// 4. Validación de datos y generación de avisos

 
//VALIDACIÓN DE DIRECCIÓN

$patron = '/^[\p{L}\d\sº\/,\-\'#áéíóúüÁÉÍÓÚÜ]+$/u'; // Define un patrón regular con caracteres permitidos

// Realiza la validación

if (empty($direccion)) {
    print "La dirección es obligatoria.";
}
elseif (is_numeric($direccion)) {
    print "<p>No es una dirección válida.</p>";
}
elseif (!preg_match($patron, $direccion)) {
    print "La dirección contiene caracteres no permitidos.";
}
elseif (strlen($direccion) > 200) {
    print "El campo de la dirección excede la longitud máxima permitida (200 caracteres).";
}
else{
    $direccionOk= true;
}

 //VALIDACIÓN DE DORMITORIOS

 
if ($dormitorios == "") {
    print "<p>No ha seleccionado número de dormitorios.</p>\n";
}
elseif (($dormitorios !== "1" )&& ($dormitorios !== "2") && ($dormitorios !== "3") && ($dormitorios !== "4") && ($dormitorios !== "5" )){
    print "Has introducido una opción no válida";
}
else{
    $dormitoriosOk=true;
}

 

//VALIDACIÓN DE PRECIO

 

if ($precio == "") {
    print "<p>No ha introducido precio</p>\n";
}
elseif (!is_numeric($precio) ) {
    print "Has introducido un valor no numérico";  
}
elseif ($precio<0) {
   print "El precio debe ser mayor que cero";
}
else{
    $precioOk=true;
}
 
//VALIDACIÓN DE TAMAÑO
 
if ($tamano == "") {
    print "<p>No ha introducido tamaño</p>\n";
}
elseif (!is_numeric($tamano) ) {
    print "Has introducido un valor no numérico";  
}
elseif ($tamano<0) {
   print "El tamaño debe ser mayor que cero";
}
else{
    $tamanoOk=true;
}

 // SUBIDA DE IMÁGENES
 
if (isset($_POST['subirImagen'])) {
    $nombreImagen = $_FILES['imagen']['name'];
    if (isset($nombreImagen) && $nombreImagen != "") {
        //Obtenemos algunos datos necesarios sobre el archivo

        $tamano = $_FILES['imagen']['size'];

        $temporal = $_FILES['imagen']['tmp_name'];

        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño

        $extensionesPermitidas = array("gif", "jpeg", "jpg", "png");

        $extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);

        if (!in_array($extension, $extensionesPermitidas) || $tamano > 2000000) {
            echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>';
        }
        else {
            //Si la imagen es correcta en tamaño y tipo se intenta subir al servidor
            if (move_uploaded_file($temporal, 'images/'.$nombreImagen)){

                echo '<div><b>Se ha subido correctamente la imagen.</b></div>';

                echo '<p><img src="images/'.$nombreImagen.'"></p>';
            }
            else {
                echo '<div><b>Ocurrió algún error al subir el fichero.No pudo guardarse.</b></div>';
            }
        }
    }
}

 

// 5. EJECUCIÓN DEL PROGRAMA

 

print "<p>El tipo de vivienda es:\t $tipoVivienda.</p>\n";
print "<p>La zona es:\t $zona.</p>\n";  

if ($direccionOk) {
    print "<p>La dirección es: $direccion.</p>\n";
}
if ($dormitoriosOk) {
    print "<p>El número de dormitorios es: $dormitorios</p>\n";
}
if ($precioOk) {
    print "<p>El precio es: $precio</p>\n";
}
if ($tamanoOk) {
    print "<p>El precio es: $tamano</p>\n";
}
print "<p>Los extras seleccionados son: $piscina $jardin $garaje</p>"; 