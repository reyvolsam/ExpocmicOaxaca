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

<section id="botonero">
	<ul class="inline">
	    <li><button type="button" data-toggle="modal" href="#myModal2" class="btn btn-cmic"><i class="icon-plus"></i> Crear Usuario</button> </li>
	    <li><button type="button" class="btn btn-cmic"><i class="icon-user"></i> Consultar Usuarios</button> </li>
	    <li><button type="button" class="btn btn-cmic"><i class="icon-frown"></i> Usuarios No Activados</button> </li>

	</ul>
</section>
          	        	
		
           		<!-- page start-->
              <section class="panel">
                   <!--tab nav start-->
                      <section class="panel">
                          <header class="panel-heading tab-bg-dark-navy-blue ">
                          <ul class="nav nav-tabs">
                          <li>
                                  <a data-toggle="tab" href="#about">Expositores</a>
                              </li>
                              <li class="active">
                                  <a data-toggle="tab" href="#home">Ejecutivos de Ventas</a>
                              </li>
                              
                              <li class="">
                                  <a data-toggle="tab" href="#profile">Administradores</a>
                              </li>
                              
                          </ul>
                          </header>
                  <div class="panel-body">
                  <div class="tab-content">
	                    <div id="home" class="tab-pane active">
<!--inicio de usuarios-->
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th> Nombre</th>
                                    <th> Correo Electrónico</th>
                                    <th> Tipo de Usuario</th>
                                    <th> Estatus</th>
                                    <th> Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Juan Lopez</td>
                                    <td>juan.lopez@proy.com.mx</td>
                                    <td class="hidden-phone">ejecutivo</td>
                                    <td><span class="label label-danger">Inactivo</span></td>
                                    <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Denise Contreras</td>
                                    <td>denise@proy.com.mx</td>
                                    <td class="hidden-phone">ejecutivo</td>
                                    <td><span class="label label-success">Activo</span></td>
                                    <td>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-off"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Damaris Martinez</td>
                                    <td>damaris@proy.com.mx</td>
                                    <td class="hidden-phone">ejecutivo</td>
                                    <td><span class="label label-success">Activo</span></td>
                                    <td>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-off"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!--adv table fin-->
                  </div> <!--fin panel-->
                 <!--fin de usuarios-->
	              		</div><!-- tab1 end-->
	                    
	                    <div id="about" class="tab-pane">
<!--inicio de usuarios-->
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th> Nombre</th>
                                    <th> Correo Electrónico</th>
                                    <th> Tipo de Usuario</th>
                                    <th> Estatus</th>
                                    <th> Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Angeles Luque</td>
                                    <td>luqueangeles@proy.com.mx</td>
                                    <td class="hidden-phone">Expositor</td>
                                    <td><span class="label label-success">Activo</span></td>
                                    <td>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-off"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Esau Pérez</td>
                                    <td>esaumunive@proy.com.mx</td>
                                    <td class="hidden-phone">Expositor</td>
                                    <td><span class="label label-danger">Inactivo</span></td>
                                    <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!--adv table fin-->
                  </div> <!--fin panel-->
                 <!--fin de usuarios-->
	               		</div><!-- tab2 end-->
	                    
	                    <div id="profile" class="tab-pane">
<!--inicio de usuarios-->
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th> Nombre</th>
                                    <th> Correo Electrónico</th>
                                    <th> Tipo de Usuario</th>
                                    <th> Estatus</th>
                                    <th> Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Esau Perez</td>
                                    <td>esauperez@proy.com.mx</td>
                                    <td class="hidden-phone">Administrador</td>
                                    <td><span class="label label-success">Activo</span></td>
                                    <td>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-off"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  	</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!--adv table fin-->
                  </div> <!--fin panel-->
                 <!--fin de usuarios-->
	                   </div><!-- tab3 end-->
                                  
                   </div>
                   </div>
                   </section>
                   </section>
                      <!--tab nav start-->




	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Nuevo Usuario</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              
                                              
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Nombre</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Nombre">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Correo Electrónico</label>
                                                  <div class="col-lg-10">
                                                      <input type="email" class="form-control" id="" placeholder="Correo Electrónico">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Tipo de Usuario</label>
                                                  <div class="col-lg-10">
	                                                  <select name = "sector" id = "sector" class="form-control" placeholder = "Tipo de Usuario">
														<option value="">Estatus</option>
													  <option value="Industria">Administrador</option>
													  <option value="Servicio">Ejecutivo de Ventas</option>
													  <option value="Industria">Expositor</option>
													</select>
                                              	</div>
                                              </div>
                                              
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Estatus</label>
                                                  <div class="col-lg-10">
	                                                  <select name = "sector" id = "sector" class="form-control" placeholder = "Estatus">
														<option value="">Estatus</option>
													  <option value="Industria">Activo</option>
													  <option value="Servicio">Inactivo</option>
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
