<?php 
   session_start();
    if($_SESSION["ban"]==1){
     echo '<script language="javascript">alert("usuario o contraseña incorrecta");</script>';
     }?>
                   
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Iniciar sesion</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<style type="text/css">
.main{
    background-color: #F8EBAD ;
}
.formulario{
    margin-top: 150px;
}

</style>
</head>
<body>
    <div class="header">
        <img class="pic" src="images/logo1.jpg" height="120px"/>
        <div class="titulo"><h1> Dos Noticias!</h1>
            <div class=uno> </br> <h5> Porque uno ya hay</h5></div>
        </div>
        
    </div>
    <ul class="nav nav-tabs" style="bakground-color:#fff">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eSport.php">eSports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="deportes.php">Deportes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="policiaca.php">Policiaca</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Administrador</a>
      </li>
    </ul>
<div class="main">
<h2>Iniciar sesion de administrador</h2>
 <center><form method="post" action="comprobarLogin.php">
      <div class="formulario">
        <p>Usuario</p>
        <input type="text" name="usuario">
     
        <p>Contraseña</p>
        <input type="password" name="contrasena">
  
     </br> </br><button type="submit" class="btn btn-primary">Iniciar sesion</button>
    </div>
</form></center>
    </br> </br> </br><div class="alert alert-warning" margin-top="10px" > <p class="p1"><center>Dos noticias es una marca registrada. Todos los derechos a sus respectivos autores</center></p> </div>
 </div>

</body>
</html>