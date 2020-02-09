<?php
    $id=$_REQUEST["id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Subir noticia</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<style type="text/css">
.main{
    background-color: #F8EBAD ;
}
.form-control{
    width:500px;
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
<h2>Modificar imagen</h2>
  <div class="panel panel-primary">
    <div class="panel-body">
    <?php print "<form method=\"post\" action=\"img.php?id=$id\" enctype=\"multipart/form-data\">";?>
      
        
          <center> 
          <div class="col-sm-8" style="margin-top: 100px;">
          <label class="col-sm-3 control-label">Selecciona imagen</label>
          <input type="file" class="form-control" id="image" name="image" multiple>
          </div>
          </br><button name="submit" class="btn btn-primary">Modificar</button></center> 
        
        
      </form>
      
      
 	  </div> 
    </div>
     </br><div class="alert alert-warning" style="margin-top:200px" > <p class="p1"><center>Dos noticias es una marca registrada . Todos los derechos a sus respectivos autores</center></p> </div>
 </div>

</body>
</html>