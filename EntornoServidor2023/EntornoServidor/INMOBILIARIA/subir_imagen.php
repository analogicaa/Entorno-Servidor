<?php
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
?>