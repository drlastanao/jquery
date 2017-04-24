<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Estadisticas  gym</title>
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
            <h1>Estadisticas horas gym</h1>
            </div><!-- /header -->
            <div data-role="content">
                <form id="formulario" action="registrar.php" method=get>
                    <fieldset>
                       <?php 
                        require('php/estadisticas.php');
                        ?>
                    </fieldset>
                </form>
              </div>
    </div>
 
   </body>

</html>
