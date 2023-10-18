<?php

include 'recoge.php'; // Incluye el archivo con la función recoge
include 'validacion.php'; // Incluye el archivo con la validación de datos
include 'subir_imagen.php'; // Incluye el archivo para la subida de imágenes


// EJECUCIÓN DEL PROGRAMA
echo "<h1> Inserción de vivienda </h1>";

//impresión de opciones

$mensaje = [
    "<li>El tipo de vivienda es:\t $tipoVivienda.</li>\n",
    "<li>La zona es:\t $zona.</li>\n"
];

if ($direccionOk) {
    $mensaje[] = "<li>La dirección es: $direccion.</li>\n";
}
if ($dormitoriosOk) {
    $mensaje[] = "<li>El número de dormitorios es: $dormitorios</li>\n";
}
if ($precioOk) {
    $mensaje[] = "<li>El precio es: $precio</li>\n";
}
if ($tamanoOk) {
    $mensaje[] = "<li>El tamaño es: $tamano</li>\n";
}

$extras = "<li>EXTRAS: ";
if ($piscina) {
    $extras .= "Piscina ";
}
if ($jardin) {
    $extras .= "Jardín ";
}
if ($garaje) {
    $extras .= "Garaje ";
}
$extras .= "</li>";
$mensaje[] = $extras;

if ($comentarioOk) {
    $mensaje[] = "<li>Observaciones: $comentario</li>\n";
}

// Construir la lista no numerada completa como una cadena
echo "<ul>\n" . implode("\n", $mensaje) . "\n</ul>";
