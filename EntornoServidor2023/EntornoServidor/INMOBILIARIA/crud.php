<?php
// INSERCIÓN DE DATOS

$sql= "INSERT INTO viviendas (tipo,zona,direccion,dormitorios,precio,tamano,extras,observaciones,imagen) VALUES ('$tipo','$zona','$direccion','$dormitorios','$piscina','$jardin','$garaje','$comentario')";
if ($conn->query($sql) === TRUE) {
     echo "Inserción exitosa". "<br>";
 } else {
     echo "Error al insertar datos: " . $conn->error."<br>";
 }

// SELECCIONAR DATOS
$sql="SELECT * FROM viviendas ";
$result = $conn->query($sql);  //

if ($result->num_rows > 0) {
// Trae líneas de la base de datos y muestra los datos
while ($row = $result->fetch_assoc()) {
 echo 
 " - Tipo de Vivienda: " . $row["tipo"] . 
 " - Zona: " . $row["zona"] . 
 " - Dirección: " . $row["direccion"] . 
 " - Dormitorios: " . $row["dormitorios"] .
 " - Precio: ". $row["precio"]. 
 " - Tamaño: ". $row["tamano"]. 
 " - Extra 1: ". $row["piscina"]. 
 " - Extra 2: ". $row["jardin"]. 
 " - Extra 3: ". $row["garaje"]. 
 " - Observaciones: ". $row["observaciones"]. 
 " - Imagen: ". $row["imagen"]. 
 "<br>";
}
} else {
echo "No se encontraron resultados";
}

// ACTUALIZACIÓN DE DATOS
// $sql = "UPDATE viviendas SET      = '   ' WHERE id =  ";
  if ($conn->query($sql) === TRUE) {
      echo "Actualización exitosa";
    } else {
       echo "Error al actualizar datos: " . $conn->error;
    }

//ELIMINACIÓN DE DATOS

// $sql = "DELETE FROM viviendas WHERE   = '       '";

 if ($conn->query($sql) === TRUE) {
    echo "Eliminación exitosa";
 } else {
   echo "Error al eliminar datos: " . $conn->error;
 }


// CIERRE DE CONEXIÓN
$conn->close();
?>