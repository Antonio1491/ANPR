<?php include"inc/conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ing. Antonio de Jesus Góngora García">
    <meta name="description" content="La revista Parques y Recreación es una publicación especializada dirigida a la industria de los parques, espacios públicos y recreación en México.">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Asociación Nacional de Parques y Recreación | ANPR</title>

    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="img/png" href="img/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <?php include_once("inc/analyticstracking.php") ?>
    <div class="container">
      <header>
          <img src="img/parques_y_recreacion_verde.png" id="logo" class="img-responsive" alt="Asociación Nacional de Parques y Recreación">
      </header>  <hr>
        <div class="row todo">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <section class="txt-general">
              <p>La revista <span class="negritas">Parques y Recreación</span> es una publicación especializada dirigida a la industria de los parques, espacios públicos y recreación en México.</p>
              <p>Su contenido ayudará al lector a conocer más sobre:</p>
              <ul>
                <li>Tendencias internacionales en espacios públicos y parques urbanos.</li>
                <li>Elementos de la industria de la recreación.</li>
                <li>Diseño de paisaje.</li>
                <li>Voluntariado e inclusión social.</li>
                <li>Salud y bienestar.</li>
                <li>Conservación del medio ambiente.</li>
                <li>Actores principales de la industria.</li>
                <li>Mantenimiento y administración de parques urbanos.</li>
                <li>Política pública del espacio público.</li>
                <li>Estadísticas e información de utilidad.</li>
              </ul>
              <p id="aviso"><a href="inc/AVISO_DE_PRIVACIDAD_ANPR.pdf" target:"_blank">Aviso de privacidad</a></p>
            </section>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <form action="insert_registros.php" method="post" accept-charset="utf-8">
              <div class="cuadro-azul">
                <p>Para recibir el primer año de la revista <strong class="gris">Parques y Recreación</strong> en su hogar u oficina, es necesario que proporciones los siguientes datos:</p>
              </div>
                <div class="row formulario">                
                  <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                    <label>Nombre</label>
                    <input type="text" name="nom_usuario" value="" placeholder="Nombre completo" class="form-control" required>
                  </div>
                  <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                    <label>E-mail</label>
                    <input type="mail" name="correo" required placeholder="email@ejemplo.com" class="form-control"></<input>
                  </div>
                  <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                    <label>Teléfono</label>
                    <input type="tel" name="telefono" value="" placeholder="Número de Teléfono" class="form-control">
                  </div>
                  <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                    <label>Organización:</label>
                    <input type="text" name="nom_organizacion" value="" placeholder="Nombre de la organización" class="form-control">
                  </div>
                  <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                    <label>Dirección</label>
                    <input type="text" name="direccion" value="" placeholder="Dirección de envío de la revista" class="form-control">
                  </div>
                  <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                    <label>C.P.</label>
                    <input type="text" name="cp" value="" placeholder="Código postal" class="form-control">
                  </div>
                  <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                    <label>Ciudad:</label>
                    <input type="text" name="ciudad" value="" placeholder="Ciudad" class="form-control">
                  </div>
                  <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                    <label>Estado:</label>
                    <select name="estado" class="form-control" >
                      <!-- Mostrar tablas de área   -->
                        <?php $sql= Mysql_query("SELECT * FROM estados ORDER BY Nombre_Estado"); 
                          while($fila=mysql_fetch_array($sql)){
                        ?>
                        <option value="<?php echo $fila['Nombre_Estado']; ?>"><?php echo $fila['Nombre_Estado']; ?></option>
                        <?php } ?>
                    </select>  
                  </div>
                </div>  
              <div class="row"><br>
                <input type="submit" name="" value="Registrar" class="btn btn-new center-block">  
              </div>
            </form>
          </div>
        </div>
        
        <div class="row">
          <!--  mitad de la pantalla  -->
          

            <!--  "da. mitad de pantalla"   -->
            <div class="col-xs-12 col-sm-6 col-lg-6">
              
            </div>
              
        </div>  <br>
        
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


