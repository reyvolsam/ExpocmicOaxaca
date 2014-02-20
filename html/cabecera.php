<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expocmic Oaxaca 2014,las empresas líderes proveedoras de infraestructura urbana, decoración, ecotecnologías, software para la construcción, vivienda, turismo, comercio, industria y energías." />
    <meta name="author" content="iqdigital" />

    <link rel="shortcut icon" href="../favicon/logo.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema de Ventas Cmic Oaxaca 2014</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-resetdysco.css" rel="stylesheet">
    <!--externo css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- estilos propios -->
    <link href="css/estilo_cmic_sistema.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

     <!-- tablas clientes -->
    <link href="assets/advanced-datatable/media/css/tabla.css" rel="stylesheet" />



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <script type="text/javascript">
      /* Formating function for row details 
      function fnFormatDetails ( oTable, nTr )
      {
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Dato 1:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
          sOut += '<tr><td>Liga:</td><td>Could provide a link here</td></tr>';
          sOut += '<tr><td>Información Add.:</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. .</td></tr>';
          sOut += '</table>';

          return sOut;
      }*/

      $(document).ready(function() {
          /*
           * Insertar a 'detalles a las' columnas en la tabla
           */
         /* var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#hidden-table-info thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#hidden-table-info tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );*/

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#hidden-table-info').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ] }
              ],
              /*"aaSorting": [[1, 'asc']] iniciar el buscador */
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#hidden-table-info tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
              }
          } );
      } );
  </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Esconder Menú" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <div class="nav notify-row" id="top_menu">
                <ul class="nav top-menu logo">
                    <div></div>
                </ul>
            </div>
            

            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle avatar" href="#">
                            <img alt="" src="images/avatarcmic.jpg">
                            <span class="username">Cmic Oaxaca </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="perfil.php"><i class=" icon-suitcase"></i>Perfil</a></li>
                            <li><a href="#"><i class="icon-cog"></i> Configuración</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i>Pendientes</a></li>
                            <li><a href="login.php"><i class="icon-key"></i>Cerrar Sesión</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->


<?php
 require_once "menu_sidebar.php";
?>