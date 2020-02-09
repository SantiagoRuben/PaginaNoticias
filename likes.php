<?php 
    require_once "biblioteca.php";
    $db = conectaDb();
    $id = $_REQUEST["id"];
    
    
   $result = $db->query("SELECT * from noticia WHERE id =$id ");
            
        
    if (!$result) {
        print "    <p>Error en la consulta.</p>\n";
    }else {
    foreach($result as $valor)
        $likes=$valor["num_like"]+1;
}
    $result = $db->query("UPDATE noticia SET num_like=$likes  WHERE id =$id ");
    if($result){
        
        header("Location:noticiaeS.php?id=$id");
    } else{
        print "<p>Error en los laiqs </p>";
    }
            
?>
