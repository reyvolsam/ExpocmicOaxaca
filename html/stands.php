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
                          <li class="active">Stands</li>
                      </ul>
                      <!--breadcrumbs end -->
<section id="botonero">
	<ul class="inline">
	    <li><button type="button" data-toggle="modal" href="#myModal0" class="btn btn-cmic"><i class="icon-eye-open"></i> Apartar Stands (Solo Administradores)</button> </li>

	</ul>
</section>
           		<!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Relación de Stands (Ventas)
                  </header>
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th> No.</th>
                                    <th> Razon Social</th>
                                    <th> #Stand</th>
                                    <th> Monto</th>
                                    <th> Pagado</th>
                                    <th> Resta</th>
                                    <th> Estatus</th>
                                    <th> Fecha</th>
                                    <th> Ejecutivo</th>
                                    <th> Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>1</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td>21 A</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">0</td>
                                    <td><span class="label label-success">Pagado</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                      <button data-toggle="modal" href="#myModal2" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>2</td>
                                    <td>Plasticos S.A. C.V.</td>
                                    <td>19 C</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">13,000</td>
                                    <td class="hidden-phone">2,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">24-feb-2014</td>
                                    <td class="hidden-phone">Denisee Contreras</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>3</td>
                                    <td>Proyeccion S.A. C.V.</td>
                                    <td>66 I</td>
                                    <td class="hidden-phone">18,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">3,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Juan López</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>4</td>
                                    <td>Iqdigital S.A. C.V.</td>
                                    <td>11 I</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">0</td>
                                    <td><span class="label label-success">Pagado</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                      <button data-toggle="modal" href="#myModal2" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>

                                <tr class="gradeA">
                                    <td>5</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td>66 I</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">5,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>6</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td>66 I</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">5,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>7</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td>66 I</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">5,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>8</td>
                                    <td>Iqdigital S.A. C.V.</td>
                                    <td>30 E</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">0</td>
                                    <td><span class="label label-success">Pagado</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                      <button data-toggle="modal" href="#myModal2" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>9</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td>66 I</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">5,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>10</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td>66 I</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">5,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>11</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td>66 I</td>
                                    <td class="hidden-phone">20,000</td>
                                    <td class="hidden-phone">15,000</td>
                                    <td class="hidden-phone">5,000</td>
                                    <td><span class="label label-warning">Pendiente</span></td>
                                    <td class="hidden-phone">23-feb-2014</td>
                                    <td class="hidden-phone">Damaris López</td>
                                    <td>
                                    <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                  </div>
              </section>
              <!-- page end-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Modifcar Estatus</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">No. de Stand</label>
                                                  <div class="col-lg-10">
                                                      <input type="number" class="form-control" id="" placeholder="21 A Eje.">
                                                  </div>
                                              </div>

                                             <div class="form-group">
                                             		<label  class="col-lg-2 control-label">Monto</label>
                                             	<div class="col-lg-10">
	                                                  <div class="input-group m-bot15">
		                                              <span class="input-group-addon">$</span>
		                                              <input type="text" class="form-control" placeholder="20,000">
		                                              <span class="input-group-addon">.00</span>
		                                          	</div>
	                                          	</div>		
                                              </div>

                                              <div class="form-group">
                                             		<label  class="col-lg-2 control-label">Pagado</label>
                                                  <div class="col-lg-10">
	                                                  <div class="input-group m-bot15">
		                                              <span class="input-group-addon">$</span>
		                                              <input type="text" class="form-control" placeholder="15,000">
		                                              <span class="input-group-addon">.00</span>
		                                          	</div>
	                                          	</div>			
                                              </div>

                                              <div class="form-group">
                                             		<label  class="col-lg-2 control-label">Resta</label>
                                                <div class="col-lg-10">
	                                                  <div class="input-group m-bot15">
		                                              <span class="input-group-addon">$</span>
		                                              <input type="text" class="form-control" placeholder="5,000">
		                                              <span class="input-group-addon">.00</span>
		                                          	  </div>
	                                          	</div>			
                                              </div>
                                              <div class="form-group">
		                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Abonos</label>
		                                      <div class="col-lg-10">
		                                          <div class="row">
		                                              <div class="col-lg-4">
		                                                  <input type="number" class="form-control" placeholder="$7,500">
		                                              </div>
		                                              <div class="col-lg-4">
		                                                  <input type="number" class="form-control" placeholder="$7,500">
		                                              </div>
		                                              <div class="col-lg-4">
		                                                  <input type="number" class="form-control" placeholder="Abono3">
		                                              </div>
		                                          </div>
		                                      	</div>
		                                  		</div>
                                              

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <!--<span class="btn green fileinput-button">
                                                        <i class="icon-plus icon-white"></i>
                                                        <span>Adjuntar</span>
                                                        <input type="file" multiple=""  name="files[]">
                                                      </span>-->
                                                      <button type="submit" class="btn btn-shadow btn-success">Guardar</button>
                                                      <button type="submit" class="btn btn-shadow btn-danger" data-dismiss="modal" aria-hidden="true">Salir</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Aparta el lugar</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Stands </label>
                                                  <div class="col-lg-10">
	                                                  <select name = "sector" id = "sector" class="form-control" placeholder = "sector">
														<option value="Servicio">Seleccionar Stand</option>
													  <option value="Industria">1A</option>
													  <option value="Servicio">2A</option>
													  <option value="Industria">3A</option>
													  <option value="Industria">4A</option>
													  <option value="Industria">5A</option>
													  <option value="Industria">6A</option>
													  <option value="Industria">7A</option>
													  <option value="Industria">8A</option>
													  <option value="Industria">9A</option>
													  <option value="Industria">10A</option>

													</select>
                                              	</div>
                                              </div>

                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Disponibilidad</label>
                                                  <div class="col-lg-10">
	                                                  <select name = "sector" id = "sector" class="form-control" placeholder = "sector">
														<option value="Servicio">Seleccionar </option>
													  <option value="Industria">Disponible</option>
													  <option value="Servicio">Apartado</option>
													  <option value="Servicio">Ocupado</option>

													</select>
                                              	</div>
                                              </div>
                                               <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Leyenda</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Leyenda para empresa en mapa" >
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <!--<span class="btn green fileinput-button">
                                                        <i class="icon-plus icon-white"></i>
                                                        <span>Adjuntar</span>
                                                        <input type="file" multiple=""  name="files[]">
                                                      </span>-->
                                                      <button type="submit" class="btn btn-shadow btn-success">Guardar</button>
                                                      <button type="submit" class="btn btn-shadow btn-danger" data-dismiss="modal" aria-hidden="true">Salir</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Modifcar Estatus</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">No. de Stand</label>
                                                  <div class="col-lg-10">
                                                      <input type="number" class="form-control" id="" placeholder="21 A Eje.">
                                                  </div>
                                              </div>

                                             <div class="form-group">
                                             		<label  class="col-lg-2 control-label">Monto</label>
                                             	<div class="col-lg-10">
	                                                  <div class="input-group m-bot15">
		                                              <span class="input-group-addon">$</span>
		                                              <input type="text" class="form-control" placeholder="20,000">
		                                              <span class="input-group-addon">.00</span>
		                                          	</div>
	                                          	</div>		
                                              </div>

                                              <div class="form-group">
                                             		<label  class="col-lg-2 control-label">Pagado</label>
                                                  <div class="col-lg-10">
	                                                  <div class="input-group m-bot15">
		                                              <span class="input-group-addon">$</span>
		                                              <input type="text" class="form-control" placeholder="20,000">
		                                              <span class="input-group-addon">.00</span>
		                                          	</div>
	                                          	</div>			
                                              </div>

                                              <div class="form-group">
                                             		<label  class="col-lg-2 control-label">Resta</label>
                                                <div class="col-lg-10">
	                                                  <div class="input-group m-bot15">
		                                              <span class="input-group-addon">$</span>
		                                              <input type="text" class="form-control" placeholder="0">
		                                              <span class="input-group-addon">.00</span>
		                                          	  </div>
	                                          	</div>			
                                              </div>
                                              

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <!--<span class="btn green fileinput-button">
                                                        <i class="icon-plus icon-white"></i>
                                                        <span>Adjuntar</span>
                                                        <input type="file" multiple=""  name="files[]">
                                                      </span>-->
                                                      <button type="submit" class="btn btn-shadow btn-success">Guardar</button>
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
