<?php
require_once "biblioteca.php";
$db = conectaDb();
$id = $_REQUEST["id"];

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Noticia</title>
        <link rel="stylesheet" href="noticiastyle.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <?php
                
                
                $result = $db->query("SELECT * from noticia WHERE id =$id ");
            
        
                if (!$result) {
                    print "    <p>Error en la consulta.</p>\n";
                }else {
                    foreach($result as $valor)
                        $titulo=$valor["titulo"];
                        $autor=$valor["autor"];
                        $fecha=$valor["fecha"];
                        $contenido=$valor["contenido"];
                        $likes=$valor["num_like"];
                        
                }
        ?>

    </head>
    <body>
        <header>
            <h1>Dos Noticias!</h1>
             <nav>
             <a href="index.php">Home</a>
            </nav>
        </header>
        
    <article>
        <p styles=""><?php echo $autor."/".$fecha?></p>
        <h1><?php print $titulo ?></h1><br><br>
        <center><img src='imagen.php?id=<?php echo $id ?>' alt="Smiley face" height="300" width="500"></center>
    <br><br>

     <br><br>
        <p ALIGN="justify"><?php 
            print $contenido;
        ?></p>
        <br><br>
    <end> 
     <?php print "<a href=\"likes.php?id=$id\"> 
       <div class=\"button\">
        	<div class=\"container\">
        		<div class=\"tick\">
        	</div>
        </div>
     </a>";
     ?>
    </end>
    
    </article>

<?php print "<form method=\"post\" action=\"enviarComentario.php?id2=$id\">";?>
    <article>
        <p>Comentarios</p><br><center>
                <?php 
                $consulta = "SELECT * FROM comentario WHERE noticia_id=$id";
                $result = $db->query($consulta);
                if ($result) 
                    foreach ($result as $valor) {
                        $id=$valor["id"];
                        $comentario=$valor["comentario"];
                        $fecha=$valor["fecha"];
                ?>
                        <div class="card text-white bg-dark mb-3" style="width: 50rem;">
                            <div class="card-header"><?php print $fecha ;?></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php print $comentario ;?></h5>
                             </div>
                        </div>
                <?php } ?>            
            
            
            <textarea name="textarea" rows="10" cols="50"></textarea>
            </center>
            <center>
                <button name="submit" class="btn btn-dark">Enviar</button>
            </center>
            <br><br>
    </article>
</form>
    
    <script>
        let button = document.querySelector('.button');
        let buttonText = document.querySelector('.tick');
        
        const tickMark = "<svg width=\"58\" height=\"45\" viewBox=\"0 0 58 45\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"#fff\" fill-rule=\"nonzero\" d=\"M19.11 44.64L.27 25.81l5.66-5.66 13.18 13.18L52.07.38l5.65 5.65\"/></svg>";
        
        buttonText.innerHTML = "<?php echo $likes . "+"?>";
        
        button.addEventListener('click', function() {
        
          if (buttonText.innerHTML !== "<?php echo $likes . "+"?>") {
            buttonText.innerHTML = "<?php echo $likes . "+"?>";
          } else if (buttonText.innerHTML === "<?php echo $likes . "+"?>") {
            buttonText.innerHTML = tickMark;
          }
          this.classList.toggle('button__circle');
        });
    </script>
</div>
    </body>
</html> 