<?php
require("config.php");

$categoria=$_REQUEST['categoria'];

$link=new mysqli($servidor, $usuario, $contra,$database);
$query = 'insert into categorias (txtcategoria) values ("'.$categoria.'")';   
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

          <h1>Insercción categoria correcta></h1>
            </div><!-- /header -->
            <div data-role="content">
                    <fieldset>
                        Categoria registrada <?php echo $categoria ?>
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
