<?php
    require_once "biblioteca.php";
    $db = conectaDb();
    $id = $_REQUEST["id"];
    
    $eliminar = $db->query("DELETE FROM noticia WHERE id=$id;");

   if($eliminar){
       header("Location:consultar.php");
        print $id;
   }else 
    print"no se pudo jajaja";
?>