<?php
if(isset($_POST["submit"])){
        $titulo = $_REQUEST['titulo'];
        $contenido = $_REQUEST['contenido'];
        $autor = $_REQUEST['autor'];
        $tipo=  $_REQUEST['clasificacion'];
        $id=$_REQUEST["id"];
        //Credenciales Mysql
        require_once "biblioteca.php";
        $db = conectaDb();
        //Insertar imagen en la base de datos
        $insertar = $db->query("UPDATE noticia  SET titulo='$titulo', contenido='$contenido', tipo='$tipo', autor='$autor' WHERE id=$id");
		// Condicional para verificar la subida del fichero
        if($insertar){
            header("Location:modificar.php?id=$id");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
		// Si el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }

?>