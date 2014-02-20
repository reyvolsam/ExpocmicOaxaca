<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expocmic Oaxaca 2014,las empresas líderes proveedoras de infraestructura urbana, decoración, ecotecnologías, software para la construcción, vivienda, turismo, comercio, industria y energías." />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../favicon/logo.ico">

    <title>Login Sistema Expo Cmic</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-resetdysco.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/estilo_cmic_sistema.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <style>
        html { 
        	position: relative;
            background: url(images/fondoexpo.png) no-repeat center center fixed; 
			-ms-background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body {
        	background-color: transparent !important;
        }
        
        </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="index.php">
      <div class="logotipo">
      	<img  src="images/logocmic_mini.png" alt="">
      </div>
      
        <h2 class="form-signin-heading">Entrar al sistema</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Correo Electrónico" autofocus>
            <input type="password" class="form-control" placeholder="Contraseña">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordarme
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Olvidaste tu contraseña?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button><br>
            <!--<p>o nos puedes seguirnos desde:</p>
            <div class="login-social-link">
                <a href="/" class="facebook">
                    <i class="icon-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    <i class="icon-twitter"></i>
                    Twitter
                </a>
            </div>-->
            <div class="registration">
                Aún no tienes cuenta?
                <a data-toggle="modal" href="#myModal">
                    Crea una nueva cuenta
                </a>
            </div>

        </div>

          <!-- Modal -->
          
          <!-- modal -->

      </form>

    </div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Registro</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                          <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Correo</label>
                                                  <div class="col-lg-10">
                                                      <input type="email" class="form-control" id="" placeholder="Correo Electrónico">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Contraseña</label>
                                                  <div class="col-lg-10">
                                                      <input type="password" class="form-control" id="" placeholder="Contraseña">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Repetir Contraseña</label>
                                                  <div class="col-lg-10">
                                                      <input type="password" class="form-control" id="" placeholder="Repetir contraseña">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Nombre</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Nombre completo">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Apellido Paterno</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Apellido Paterno">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Apellido Materno</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Apellido Materno">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">RFC</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="RFC">
                                                  </div>
                                              </div>
                                              <!--<div class="form-group">
                                                  <label  class="col-lg-2 control-label">Calle y Colonia</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Calle y colonia">
                                                  </div>
                                              </div>-->
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Ciudad</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Ciudad">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Estado</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Estado">
                                                  </div>
                                              </div>
                                              
                                              <!--<div class="form-group">
                                                  <label  class="col-lg-2 control-label">Teléfono</label>
                                                  <div class="col-lg-10">
                                                      <input type="phone" class="form-control" id="" placeholder="Teléfono">
                                                  </div>
                                              </div>-->
                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <!--<span class="btn green fileinput-button">
                                                        <i class="icon-plus icon-white"></i>
                                                        <span>Adjuntar</span>
                                                        <input type="file" multiple=""  name="files[]">
                                                      </span>-->
                                                      <button href="index.php" type="submit" class="btn btn-shadow btn-success">Guardar</button>
                                                      <button type="submit" class="btn btn-shadow btn-danger" data-dismiss="modal" aria-hidden="true">Salir</button> 

                                                       <label class="label_radio" for="radio-01">
		                                                  <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Expositor
		                                              </label>
		                                              <label class="label_radio" for="radio-02">
		                                                  <input name="sample-radio" id="radio-02" value="1" type="radio" /> Administrador
		                                              </label>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
