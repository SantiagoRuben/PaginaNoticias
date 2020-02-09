<?php
    require_once "biblioteca.php";
    $db = conectaDb();
    $user=$_REQUEST["usuario"];
    $ban=0;
    $contrasena=$_REQUEST["contrasena"];
    $consulta = "SELECT * FROM usuario";
    $result = $db->query($consulta);
    if ($result) {
        foreach ($result as $valor) {
           if ($valor["usuario"]==$user && $valor["contraseña"]==$contrasena){
               $ban=1;
           }
        }
    } 
    if($ban==1){
        header("Location:consultar.php");
    }else{
        session_start();
        $_SESSION["ban"]=1;
        header("Location:login.php");
    }

?>