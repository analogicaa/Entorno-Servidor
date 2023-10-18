<?php
// 1. FUNCIÓN DE RECOGIDA DE DATOS
/**
 * Summary of recoge
 * @param mixed $var
 * @param mixed $m
 * @return array|object|string|null
 */
function recoge($var, $m = "")
{
    global $tipoVivienda, $zona, $direccion, $dormitorios, $precio, $tamano, $piscina, $jardin, $garaje;

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
    // Asignar el valor a la variable correspondiente
    if ($var === "tipoVivienda") {
        $tipoVivienda = $tmp;
    } elseif ($var === "zona") {
        $zona = $tmp;
    } elseif ($var === "direccion") {
        $direccion = $tmp;
    } elseif ($var === "dormitorios") {
        $dormitorios = $tmp;
    } elseif ($var === "precio") {
        $precio = $tmp;
    } elseif ($var === "tamano") {
        $tamano = $tmp;
    } elseif ($var === "piscina") {
        $piscina = $tmp;
    } elseif ($var === "jardin") {
        $jardin = $tmp;
    } elseif ($var === "garaje") {
        $garaje = $tmp;
    }
    return $tmp;
}
?>