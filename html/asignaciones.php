<?php
 require_once "cabecera.php";
?>


    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          		<div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="icon-home"></i> Inicio</a></li>
                          <li><a href="/">Escritorio</a></li>
                          <li class="active">Asignar</li>
                      </ul>
                      <!--breadcrumbs end -->

<section id="botonero">
	<ul class="inline">
	    <li><button type="button" data-toggle="modal" href="#myModal" class="btn btn-cmic"><i class="icon-eye-open"></i> Nueva Asignación</button> </li>

	</ul>
</section>
          	        	
		
           		<!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Asignar Prospectos
                  </header>
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th> Nombre</th>
                                    <th> Correo Electrónico</th>
                                    <th> Tipo de Usuario</th>
                                    <th> Asignados</th>
                                    <th> Fecha Asignada</th>
                                    <th> Estatus</th>
                                    <th> Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Juan Lopez</td>
                                    <td>juan.lopez@proy.com.mx</td>
                                    <td class="hidden-phone">ejecutivo</td>
                                    <td class="hidden-phone">100 <button onclick="window.location.href('prospectos.php');" class="btn btn-warning  btn-xs"><i class="icon-eye-open"></i></button></td>
                                    <td class="hidden-phone"> 22-feb-2014</td>
                                    <td><span class="label label-success">Activo</span></td>
                                    <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Denise Contreras</td>
                                    <td>denise@proy.com.mx</td>
                                    <td class="hidden-phone">ejecutivo</td>
                                    <td class="hidden-phone">95 <button onclick="window.location.href('prospectos.php');" class="btn btn-warning  btn-xs"><i class="icon-eye-open"></i></button></td>
                                    <td class="hidden-phone"> 23-feb-2014</td>
                                    <td><span class="label label-success">Activo</span></td>
                                    <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Damaris Martinez</td>
                                    <td>damaris@proy.com.mx</td>
                                    <td class="hidden-phone">ejecutivo</td>
                                    <td class="hidden-phone">90 
                                    <button onclick="window.location.href('prospectos.php');" class="btn btn-warning btn-xs"><i class="icon-eye-open"></i></button></td>
                                    <td class="hidden-phone"> 22-feb-2014</td>
                                    <td><span class="label label-success">Activo</span></td>
                                    <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!--adv table fin-->
                  </div> <!--fin panel-->
                 <!--fin de usuarios-->
                      </form>
                  </div><!-- comparacion1-->




              </section>
              <!-- page end-->




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Nuevo Cliente</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">

                                           <div class="form-group">
	                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Prospecto</label>
	                                      <div class="col-lg-10">
	                                          <select multiple class="form-control">
	                                              <option>1. Intekel S.A.</option>
	                                              <option>2. Plásticos S.A</option>
	                                              <option>3. Proyección Empresarial</option>
	                                              <option>4. Hotel One</option>
	                                              <option>6. Intekel S.A.</option>
	                                              <option>7. Plásticos S.A</option>
	                                              <option>8. Proyección Empresarial</option>
	                                              <option>9. Hotel One</option>
	                                              <option>10. Intekel S.A.</option>
	                                              <option>11. Plásticos S.A</option>
	                                              <option>12. Proyección Empresarial</option>
	                                              <option>13. Hotel One</option>
	                                              <option>14. Intekel S.A.</option>
	                                              <option>15. Plásticos S.A</option>
	                                              <option>16. Proyección Empresarial</option>
	                                              <option>17. Hotel One</option>
	                                          </select>
	                                      </div>
	                                  </div>
                                       <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Ejecutivo</label>
                                                  <div class="col-lg-10">
	                                                  <select name = "sector" id = "sector" class="form-control" placeholder = "sector">
														<option value="">Seleccione Ejecutivo</option>
													  <option value="Servicio">Juan Lopez</option>
													  <option value="Servicio">Damaris Lopez</option>
													  <option value="Servicio">Denise</option>
													</select>
                                              	</div>
                                    	</div>
                                              <!--<div class="form-group">
                                                  <label class="col-lg-2 control-label">Fecha</label>
                                                  <div class="col-lg-10">
                                                      <input type="date" class="form-control" id="inputPassword1" placeholder="">
                                                  </div>
                                              </div>-->
                                              

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <!--<span class="btn green fileinput-button">
                                                        <i class="icon-plus icon-white"></i>
                                                        <span>Adjuntar</span>
                                                        <input type="file" multiple=""  name="files[]">
                                                      </span>-->
                                                      <button type="submit" class="btn btn-shadow btn-success">Asignar</button>
                                                      <button type="submit" class="btn btn-shadow btn-danger" data-dismiss="modal" aria-hidden="true">Salir</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
 require_once "footer.php";
?>
