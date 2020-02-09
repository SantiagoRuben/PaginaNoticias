<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Consultar noticias</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<style type="text/css">
.main{
    background-color: #F8EBAD ;
}
</style>
</head>
<body>
<script type="text/javascript">
    function confirmar(){
        var r=confirm("Salir de Administracion?  (Se cerrara la sesion)");
        if(r==true){
            return true;
        }else{
            return false;
        }
    }
</script>
    <div class="header">
        <img class="pic" src="images/logo1.jpg" height="120px"/>
        <div class="titulo"><h1> Dos Noticias!</h1>
            <div class=uno> </br> <h5> Porque uno ya hay</h5></div>
        </div>
    </div>
    <ul class="nav nav-tabs" >
      <li class="nav-item">
        <a class="nav-link" href="index.php" onclick="return confirmar()">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eSport.php" onclick="return confirmar()">eSports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="deportes.php" onclick="return confirmar()">Deportes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="policiaca.php"onclick="return confirmar()">Policiaca</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Administrador</a>
      </li>
    </ul>
    

    <div class="main">
    <h2>Noticias</h2>
    
    <?php 
    
    require_once "biblioteca.php";
    $db = conectaDB();
    $consulta = "SELECT * FROM noticia";
    $result = $db->query($consulta);
    if ($result) {
        foreach ($result as $valor) {
        $id=$valor["id"];?>
         <center>
            <ul class="list-group list-group-horizontal-sm">
              <li class="list-group-item" style="width: 500px;"><?php echo $valor["titulo"];?></li>
              <li class="list-group-item" style="width: 400px;"><?php echo $valor["autor"];?></li>
              <li class="list-group-item"style="width: 300px;"><?php echo $valor["tipo"];?></li>
              <li class="list-group-item"style="width: 300px;"><?php print "<a href=\"modificar.php?id=$id\">Modificar</a>";?></li>
            </ul>
         <center>
            
    <?php    }?>
     </br><button type="button" class="btn btn-secondary btn-lg"><a href="administrador.html" style="color:#fff">Agregar noticia</a></button>
   <?php } 
    $db = null;
    ?>
    
    
      </br><div class="alert alert-warning" margin-top="10px" > <p class="p1"><center>Dos noticias es una marca registrada . Todos los derechos a sus respectivos autores</center></p> </div>
 </div>

</body>
</html>