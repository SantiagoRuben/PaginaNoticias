<?php
     session_start();
        $_SESSION["ban"]=0;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>DN noticias!!</title>
  </head>
  <body>
<?php
    $Host = 'localhost';
    $Username = 'id12477756_rubeangel';
    $Password = 'proyecto';
    $dbName = 'id12477756_dnoticias';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    $consulta = "SELECT * from noticia WHERE tipo=\"eSport\" ORDER BY fecha DESC";
    $result = mysqli_query($db,$consulta);


if (!$result) {
    print "    <p>Error en la consulta.</p>\n";
}else {
        if($valor=mysqli_fetch_array($result)){
        $id=$valor["id"];
        $titulo=$valor["titulo"];
            
        }
}
?>
      
    <div class="header">
        <img class="pic" src="images/logo1.jpg" height="120px"/>
        <div class="titulo"><h1> Dos Noticias!</h1>
            <div class=uno> </br> <h5> Porque uno ya hay</h5></div>
        </div>
    </div>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
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
        <a class="nav-link" href="login.php">Administrador</a>
      </li>
    </ul>
    <div class="conteiner">
        <div class="card" style="width: 20rem;">
          <img src='imagen.php?id=<?php echo $id ?>' class="card-img-top" alt="League of legends">
          <div class="card-body">
            <h5 class="card-title"><?php echo $titulo;?></h5>
           <?php print "<a href=\"noticiaeS.php?id=$id\" class=\"btn btn-primary\";\">Ir a la noticia</a>";?>
      </div>
    </div>
 
 <?php
    
    $consulta = "SELECT * from noticia WHERE tipo=\"Deporte\" ORDER BY fecha DESC";
    $result = mysqli_query($db,$consulta);


if (!$result) {
    print "    <p>Error en la consulta.</p>\n";
}else {
        if($valor=mysqli_fetch_array($result)){
        $id=$valor["id"];
        $titulo=$valor["titulo"];
            
        }
}
?>   
    
        <div class="card" style="width: 20rem;">
          <img src='imagen.php?id=<?php echo $id ?>' class="card-img-top" alt="League of legends">
          <div class="card-body">
            <h5 class="card-title"><?php echo $titulo;?></h5>
            <?php print "<a href=\"noticiaeS.php?id=$id\" class=\"btn btn-primary\";\">Ir a la noticia</a>";?>
      </div>
    </div>
    
 <?php
    
    $consulta = "SELECT * from noticia WHERE tipo=\"Policiaca\" ORDER BY fecha DESC";
    $result = mysqli_query($db,$consulta);


if (!$result) {
    print "    <p>Error en la consulta.</p>\n";
}else {
        if($valor=mysqli_fetch_array($result)){
        $id=$valor["id"];
        $titulo=$valor["titulo"];
            
        }
}
?> 
        <div class="card" style="width: 20rem;">
          <img src='imagen.php?id=<?php echo $id ?>' class="card-img-top" alt="League of legends">
          <div class="card-body">
            <h5 class="card-title"><?php echo $titulo;?></h5>
            <?php print "<a href=\"noticiaeS.php?id=$id\" class=\"btn btn-primary\";\">Ir a la noticia</a>";?>
      </div>
    </div>
    
    <div class="alert alert-warning" margin-top="10px" > <p class="p1"><center>Dos noticias es una marca registrada. Todos los derechos  de las noticias estan dados a sus respectivos autores</center></p> </div>
</div>
  </body>
</html>