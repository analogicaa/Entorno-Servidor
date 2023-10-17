<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

     /*Ejercicio 1*/
     echo ("EJERCICIO 1<br>");
    echo phpinfo();

      /*Ejercicio 2*/
    echo ("EJERCICIO 2<br>");
    echo "HOLA MUNDO<br>";

   /*Ejercicio 4*/
   echo ("EJERCICIO 4<br>");
    $Name="Miguel";
    echo" Hola, mi nombre almacenado en la variable es: $Name<br>";

    $dia[0]='Lunes';
    $dia[1]='Martes';
    $dia[2]='Miércoles';
    $dia[3]='Jueves';
    $dia[4]='Viernes';
    $dia[5]='Sábado';
    $dia[6]='Domingo';
    
    /*Ejercicio 8*/
    echo ("EJERCICIO 8<br>");
    $i=0;
    foreach ($dia as $i => $diaSemana){
        echo $diaSemana ;
        echo " ";
        $i++;
    }
    ?><html><br></html><?php

    /*Ejercicio 10*/
    echo "EJERCICIO 10<br>";
    $a =8;
    $b=3;
    echo "Suma:" . $a + $b ."<br>";
    echo "Resta:". $a - $b ."<br>";
    echo "Multiplicar:" . $a * $b ."<br>";
    echo "Dividir:". $a / $b ."<br>";

    /*Ejercicio 11*/
    echo "EJERCICIO 11<br>";
    $a = 8; 
    $b = 3; 
    $c = 3; 
    if ($a == $b)  echo "a y b son iguales<br>";
    else echo "a y b son distintos<br>";
    if ($a < $b) echo "a es menor que b<br>";
    else echo "a es mayor que b<br>";
    if ($a >= $c) echo "a es mayor o igual que c<br>";
    else echo "a es menor  que c<br>";

    /*Ejercicio 12*/
    echo "EJERCICIO 12<br>";
    $a = 8; 
    $b = 3; 
    $c = 3; 
    if($a == $b && $c > $b) echo "a y b son iguales y c es mayor que b<br>";
    else echo " ocurre otra cosa<br>";
    if($a == $b || $b == $c) echo "a y b son iguales o b y c son iguales<br>";
    else echo " ocurre otra cosa<br>";
    
    /*Ejercicio 16*/
    echo "EJERCICIO 16<br>";
    if (date('d')>10) echo "Sitio activo<br>";
    else echo "Sitio no activo<br>";

     /*Ejercicio 18*/
     echo "EJERCICIO 18<br>";
     
     for ($i=0; $i<=2;$i=$i+0.01){
        $seno=sin ($i) ;
        $coseno=cos ($i);
        echo "ANGULO: ". $i; 
       
            switch(true){
            
                case $coseno>=0: {echo "<br>SENO: <font color='blue'> $seno <br></font> COSENO: <font color='blue'> $coseno <br></font>"; break;}
                case $coseno<0: {echo " <br>SENO: <font color='blue'> $seno <br></font> COSENO: <font color='red'> $coseno <br></font>";break;}
            }
            echo "<br>";
        }
     
   
     
    ?>

</body>
</html>

