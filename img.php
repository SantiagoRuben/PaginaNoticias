<?php
if(isset($_POST["submit"])){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $id=$_REQUEST["id"];
        //Credenciales Mysql
        require_once "biblioteca.php";
        $db = conectaDb();
        //Insertar imagen en la base de datos
        $insertar = $db->query("UPDATE noticia  SET imagen='$imgContenido' WHERE id=$id");
		// Condicional para verificar la subida del fichero
        if($insertar){
            header("Location:modificar.php?id=$id");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
}

?>