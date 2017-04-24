<?php 
  require('php/consultar.php');
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

  <?php 
  
  if ($minutos==0) { 
  
  ?>
 

   <div data-role="page" id="page1">
          <div data-role="header" data-position="fixed">
            <h1>Registro horas gym</h1>
            </div><!-- /header -->
            <div data-role="content">
                <form id="formulario" action="registrar.php" method=get>
                    <fieldset>
                        Minutos: <input type=text id=minutos name=minutos placeholder="Introduzca minutos">
                        <button type="submit" id=Ver>Ver</button>
                        <br><br>
                    </fieldset>
                </form>
              </div>
    </div>
 
   </body>
 
<?php 
  }
  else { ?>
      <div data-role="page" id="page1">

            <div data-role="header" data-position="fixed">
            <h1>Registro horas gym</h1>
            </div><!-- /header -->
            <div data-role="content">
                 Ya has registrado <?php echo $minutos ?> minutos.
              </div>
    </body>

  <?php 
  }
  ?>


</html>
