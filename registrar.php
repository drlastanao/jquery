<?php 
  require('php/consultar.php');
  $error=true;
  if ($minutos==0)
  {
  $min=$_REQUEST['minutos'];
  require('php/insertar.php');
  $error=false;
  }
  else
  {
    $min=$minutos;
  }

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

          <h1>Registro horas <?php echo ($error==false)? "correcto": "incorrecto" ?></h1>
            </div><!-- /header -->
            <div data-role="content">
                    <fieldset>
                        Minutos registrados <?php echo $min ?>
                 </fieldset>
                </form>
              </div>
    </body>
</html>
