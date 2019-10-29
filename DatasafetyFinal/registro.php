<?php
    include_once 'app/config.php';
    include_once 'app/ValidadorRegistro.inc.php';
    include_once 'app/RepositorioUsuario.inc.php';
?>
  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro | Salón de eventos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
   <nav class="navbar navbar-default navbar-static-top">
       <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.php">Salón de Eventos</a>
           </div>
           <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                   <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
                   <li><a href="#"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Nosotros</a></li>
                   <li><a href="#"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Reservas</a></li>
                   <li><a href="#"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Tarifas</a></li>
                   <li><a href="#"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagenes</a></li>
                   <li><a href="#"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Contactanos</a></li>
                   
               </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Iniciar sesión</a></li>
                   <li><a href="Proyecto/registro.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Registro</a></li>
                   
               </ul>
           </div>
       </div>
   </nav>
     <div class="container">
         <div class="jumbotron">
             <h1 class="text-center">Formulario de registro</h1>
         </div>
     </div>
     
     <div class="container">
         <div class="row">
             <div class="col-md-6 text-center">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">
                             Como registrarse..
                         </h3>
                     </div>
                     <div class="panel-body">
                         <br>
                         <p class="">
                             ¡Para iniciar a reservar debes llenar todos los campos correctamente!
                         </p> <br>
                         <a href="#">¿Ya estas registrado?</a> <br> <br>
                         <a href="#">¿No recuerdas tu contraseña?</a> <br> <br>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 text-center">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">
                            Ingresa tus datos aquí
                         </h3>
                     </div>
                     <div class="panel-body">
                         <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                         <?php
                          if (isset($_POST['registrar'])){
                            include_once 'plantillas/registro_validado.inc.php';
                          } else {
                              include_once 'plantillas/registro_vacio.inc.php';
                          }
                          ?>
                         </form>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </div>
      
       
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>    