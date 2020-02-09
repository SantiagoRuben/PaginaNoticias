<?php
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $titulo = $_REQUEST['titulo'];
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $contenido = $_REQUEST['contenido'];
        $autor = $_REQUEST['autor'];
        $numLike = 0;
        $tipo=  $_REQUEST['clasificacion'];
        //Credenciales Mysql
        require_once "biblioteca.php";
        $db = conectaDb();

        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into noticia (titulo,imagen,contenido,autor,fecha,num_like,tipo) VALUES ('$titulo','$imgContenido','$contenido','$autor',NOW(),$numLike,'$tipo')");
		// Condicional para verificar la subida del fichero
        if($insertar){
            header("Location:administrador.html");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
		// Si el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>