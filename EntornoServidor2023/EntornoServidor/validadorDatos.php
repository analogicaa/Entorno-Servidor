<?php

// 1. Función de recogida de datos
function recoge($var, $m = "")
{
    $tmp = "";

    if (isset($_REQUEST[$var])) {
        $value = $_REQUEST[$var];

        if (!is_array($value)) {
            $tmp = trim(htmlspecialchars($value));
        } elseif (is_array($value) && is_array($m)) {
            $tmp = $value;
            array_walk_recursive($tmp, function (&$valor) {
                $valor = trim(htmlspecialchars($valor));
            });
        }
    }

    return $tmp;
}

// 2. Variables que recogen los datos
$nameV = recoge("nameV");
$nameZ = recoge("nameZ");

// 3. Variables auxiliares de comprobación
$nameVOk = false;
$nameZOk = false;

// 4. Validación de datos y generación de avisos

    //validación de vivienda y zona
    if (($nameV =="")||($nameZ =="") ){
        print "<p>No ha seleccionado opción\n</p>";
    }
    elseif ((!is_string($_nameV))||(!is_string($_nameZ))) {
        print "<p>El valor recibido no es una cadena de texto\n</p>";
    } 
    elseif ((is_null($_nameV))||(!is_string($_nameZ)) ){
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
    }

// 5. Ejecución del programa
if ($nameVOk) {
    print "El tipo de vivienda es: ". $nameV;
    print "\n";
    print "El tipo de zona es: ". $nameV;
    print "\n";
}



?>