<?php
$servername = "localhost"; // Nombre del servidor de base de datos
$username = "root";     // Nombre de usuario de la base de datos
$password = "";            // Contraseña del usuario
$database = "FP"; // Nombre de la base de datos

// CREAR CONEXIÓN
$conn = new mysqli($servername, $username, $password, $database);

// VERIFICAR CONEXIÓN
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error)."<br>"; 
} else {
    echo "Conexión exitosa"."<br>";
}

// INSERCIÓN DE DATOS
    $sql= "INSERT INTO alumnos (id,nombre,apellidos,curso,ciclo, nota_final) VALUES ('4','Pepa','Martín','SEGUNDO','DAW','7')";
   if ($conn->query($sql) === TRUE) {
        echo "Inserción exitosa". "<br>";
    } else {
        echo "Error al insertar datos: " . $conn->error."<br>";
    }

// SELECCIONAR DATOS
$sql="SELECT * FROM alumnos ";
$result = $conn->query($sql);  //

if ($result->num_rows > 0) {
// Trae líneas de la base de datos y muestra los datos
 while ($row = $result->fetch_assoc()) {
    echo 
    " - id: " . $row["id"] . 
    " - Nombre: " . $row["nombre"] . 
    " - Apellido: " . $row["apellidos"] . 
    " - Curso: " . $row["curso"] . 
    " - Ciclo: " . $row["ciclo"] .
    " - Nota Final: ". $row["nota_final"]. 
    "<br>";
}
} else {
echo "No se encontraron resultados";
}

// ACTUALIZACIÓN DE DATOS
//   $sql = "UPDATE alumnos SET nombre = 'Antonia' WHERE id = 3";
//   if ($conn->query($sql) === TRUE) {
//      echo "Actualización exitosa";
//    } else {
//       echo "Error al actualizar datos: " . $conn->error;
//    }

//ELIMINACIÓN DE DATOS
   
    $sql = "DELETE FROM alumnos WHERE nombre = 'Antonio'";

    if ($conn->query($sql) === TRUE) {
       echo "Eliminación exitosa";
    } else {
      echo "Error al eliminar datos: " . $conn->error;
    }

    



// CIERRE DE CONEXIÓN
$conn->close();
?>

