<?php
require("config.php");

$link=new mysqli($servidor, $usuario, $contra,$database);

$enlace=$_REQUEST['enlace'];
$texto=$_REQUEST['texto'];
$categorias=$_REQUEST['categorias'];

$query = 'insert into enlaces (enlace,texto,categorias) values ("'.$enlace.'","'.$texto.'","'.$categorias.'")';   
$result = $link->query($query);
$link->close();

?>


 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Registro  gym</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.css" />
        <script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.js"></script>
    </head>
    <body>
      <div data-role="page" id="page1">
       <div data-role="header" data-position="fixed">

          <h1>Insercción enlace correcto></h1>
            </div><!-- /header -->
            <div data-role="content">
                    <fieldset>
                        Enlace registrad <?php echo $enlace ?>
                        Redireccionando...
                 </fieldset>
                </form>
              </div>
    </body>


   <script>
    function redireccionar(){window.location="../enlaces.html";} 
    setTimeout ("redireccionar()", 5000);
</script>


</html>
