<?php
    require_once "biblioteca.php";
    $db = conectaDb();
    $id = $_REQUEST["id2"];
    $contenido=$_REQUEST["textarea"];
    $insertar = $db->query("INSERT into comentario (comentario,fecha,noticia_id) VALUES ('$contenido',NOW(),$id)");

   if($insertar){
       header("Location:noticiaeS.php?id=$id");
        print $id;
   }else 
    print"no se pudo jajaja";
?>