<?php
require_once "biblioteca.php";
$db = conectaDb();
$id = $_REQUEST["id"];
    $result = $db->query("SELECT * from noticia WHERE id =$id ");
            
        
    if (!$result) {
        print "    <p>Error en la consulta.</p>\n";
     }else {
        foreach($result as $valor)
            $titulo=$valor["titulo"];
            $autor=$valor["autor"];
            $fecha=$valor["fecha"];
            $contenido=$valor["contenido"];
            $clasificacion=$valor["tipo"];
            $imagen=$valor["imagen"];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <script> 
    function abrir(url) { 
    open(url,'','top=300,left=300,width=300,height=300') ; 
    } 
</script>

<script type="text/javascript">
    function confirmar2(){
        var r=confirm("¿Es neta que la quieres eliminar?");
        if(r==true){
            return true;
        }else{
            return false;
        }
    }
</script>

<meta charset="utf-8">
<title>Modificar noticia</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<style type="text/css">
.main{
    background-color: #F8EBAD ;
    display:flex;
    flex-wrap:wrap;
}
.img{
    width: 500px;
    height: 400px;
    margin-top:100px;
    border: 5px solid #fff;
}
</style>
</head>
<body onload="abrir()">
<script type="text/javascript">
    function confirmar(){
        var r=confirm("Salir de Administracion?  (Se cerrara la sesion)");
        if(r==true){
            return true;
        }else{
            return false;
        }
    }SAVE

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
        <a class="nav-link active" href="#">Administrador</a> </li>
        <a class="nav-link" href="consultar.php">Regresar</a>
    </ul>
<div class="main">
    <div>
<h2>Modificar noticias</h2>
  <div class="panel panel-primary">
    <div class="panel-body">
            <?php print "<form method=\"post\" action=\"modificaNota.php?id=$id\" enctype=\"multipart/form-data\">";?>
      
        <div class="form-group">
        <div class="col-sm-8">
        	<label class="col-sm-1 control-label">Titulo</label>
        	<input name="titulo" class="form-control" type="text" size="60" value="<?php echo $titulo?>">
        </div>
          <div class="col-sm-8">
          <label class="col-sm-5 control-label">contenido</label>
          <textarea name="contenido" class="form-control" cols="100" style="height:300px;"><?php echo $contenido?></textarea>
          </div>
            <div class="col-sm-8">
          <label class="col-sm-7 control-label">Autor</label>
        	<input name="autor" class="form-control" type="text" size="50" value="<?php echo $autor?>">
            </div>
        <?php 
            if($clasificacion== "eSport"){
        ?>
            <div class="form-group col-md-4">
              <label for="inputState">Clasificacion</label>
              <select id="inputState" name="clasificacion" class="form-control">
                <option >eSport</option>
                <option >Deporte</option>
                <option >Policiaca</option>
              </select>
            </div>
        <?php }?>
            <?php 
            if($clasificacion== "Deporte"){
        ?>
            <div class="form-group col-md-4">
              <label for="inputState">Clasificacion</label>
              <select id="inputState" name="clasificacion" class="form-control">
                <option >eSport</option>
                <option selected >Deporte</option>
                <option >Policiaca</option>
              </select>
            </div>
        <?php }?>
            <?php 
            if($clasificacion== "Policiaca"){
        ?>
            <div class="form-group col-md-4">
              <label for="inputState">Clasificacion</label>
              <select id="inputState" name="clasificacion" class="form-control">
                <option >eSport</option>
                <option >Deporte</option>
                <option selected>Policiaca</option>
              </select>
            </div>
        <?php }?>
          </br><button name="submit" class="btn btn-primary">Modificar noticia</button>
        </div>
      </form>
      <button name="submit" class="btn btn-primary"><?php print "<a href=\"eliminar.php?id=$id\" style=\"color:#fff;\" onclick=\"return confirmar2()\">Eliminar noticia</a>";?></button>

    
    
    
      
 	  </div> 
    </div>
    </div><div>
    <?php print "<form method=\"post\" action=\"modificaImg.php?id=$id\">";?>
    <img class="img" src='imagen.php?id=<?php echo $id ?>'/>
    </br></br><button name="submit" class="btn btn-primary">Modificar imagen</button>
    </form>

    </div>
     </br><div class="alert alert-warning" margin-top="10px" > <p class="p1"><center>Dos noticias es una marca registrada . Todos los derechos a sus respectivos autores</center></p> </div>
 </div>
<?php print "<a href=\"noticiaeS.php?id=$id\" style=\"color:#fff;\">$titulo</a>";?>
</body>
</html>