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
$nameV = recoge("tipoVivienda"); 
$nameZ = recoge("zona");

// 3. Variables auxiliares de comprobación
$nameVOk = false;
$nameZOk = false;

// 4. Validación de datos y generación de avisos

    //validación de vivienda y zona
    if (($nameV =="")||($nameZ =="") ){
        print "<p>No ha seleccionado opcion\n</p>";
    }
    elseif ((is_null($nameV))||(!is_string($nameZ)) ){
        print "<p>El valor recibido es nulo\n</p>";
    } 
    elseif ((ctype_digit($nameV))||(ctype_digit($nameZ))){
        print "<p>El valor recibido es un dígito\n</p>";
    }
    elseif ((ctype_space($nameV))||(ctype_space($nameZ))){
        print "<p>El valor recibido contiene solo espacios en blanco\n</p>";
    }
    elseif ((ctype_punct($nameV))||(ctype_punct($nameZ))){
        print "<p>El valor recibido contiene caracteres de puntuación\n</p>";
    }

    else {
        $nameVOk = true;
        $nameZOk = true;
    }

// 5. Ejecución del programa
if (($nameVOk)&&($nameZOk)) {
    print "<p>El tipo de vivienda es: . $nameV.</p>\n";
 
    print "<p>La zona es: . $nameZ.</p>\n";
   
}



?>