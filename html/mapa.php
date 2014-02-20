<?php
 require_once "cabecera.php";
?>


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          		<div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="icon-home"></i> Inicio</a></li>
                          <li><a href="/">Escritorio</a></li>
                          <li class="active">Usuarios</li>
                      </ul>
                      <!--breadcrumbs end -->
       	
		
           	<!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Mapa de Cmic
                  </header>
                  <div class="panel-body">
                  <a data-toggle="modal" href="#myModal2"><img src="images/plano2014.jpg" alt=""></a>
                  </div>
              </section>
              <!-- page end-->

	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Aparta tu Lugar</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">No. de Stand</label>
                                                  <div class="col-lg-10">
                                                      <input type="number" class="form-control" id="" placeholder="ejem 33-E" disabled="disabled">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Estatus</label>
                                                  <div class="col-lg-10">
	                                                  <select name = "sector" id = "sector" class="form-control" placeholder = "sector">
														<option value="Servicio">Efectivo</option>
													  <option value="Industria">Transferencia</option>
													  <option value="Servicio">Cheque</option>
													</select>
                                              	</div>
                                              </div>
                                       <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Abonos</label>
                                      <div class="col-lg-10">
                                          <div class="row">
                                              <div class="col-lg-4">
                                                  <input type="number" class="form-control" placeholder="Abono1">
                                              </div>
                                              <div class="col-lg-4">
                                                  <input type="number" class="form-control" placeholder="Abono2">
                                              </div>
                                              <div class="col-lg-4">
                                                  <input type="number" class="form-control" placeholder="Abono3">
                                              </div>
                                          </div>
                                      	</div>
                                  		</div>

                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Ingresa tu ficha si pagaste</label>
                                                  <div class="col-lg-10">
                                                      <span class="btn green fileinput-button">
                                                        <i class="icon-plus icon-white"></i>
                                                        <span>Adjuntar la ficha</span>
                                                        <input type="file" multiple=""  name="files[]">
                                                      </span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Disponibilidad</label>
                                                  <div class="col-lg-10">
	                                                  <select name = "sector" id = "sector" class="form-control" placeholder = "sector">
														<option value="Servicio">Seleccionar </option>
													  <option value="Servicio">Apartado</option>
													  <option value="Servicio">Ocupado (Pago Total)</option>

													</select>
                                              	</div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Contacto</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Datos de contacto">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Teléfono</label>
                                                  <div class="col-lg-10">
                                                      <input type="phone" class="form-control" id="" placeholder="Teléfono">
                                                  </div>
                                              </div>
                                              
                                              
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Observaciones</label>
                                                  <div class="col-lg-10">
                                                      <textarea name="" id="" class="form-control" cols="15" rows="3"></textarea>
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
                                                      <button type="submit" class="btn btn-shadow btn-success">Aparta</button>
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
