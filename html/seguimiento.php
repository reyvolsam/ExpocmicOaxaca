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
                          <li class="active">Seguimientos</li>
                      </ul>
                      <!--breadcrumbs end -->

<section id="botonero">
  <ul class="inline">
      <li><button type="button" data-toggle="modal" href="#myModal0" class="btn btn-cmic"><i class="icon-plus"></i> Nuevo Prospecto</button> </li>
  </ul>
</section>
          	        	
           		<!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Seguimiento de Prospectos
                  </header>
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th> RFC</th>
                                    <th> Razon Social</th>
                                    <th> Datos de Contacto</th>
                                    <th> Teléfono</th>
                                    <th> Correo</th>
                                    <th> Fecha</th>
                                    <th> Observaciones</th>
                                    <th> Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">22-feb-2014</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>
                                    <td>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-envelope"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class=" icon-bell-alt"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-success btn-xs"><i class="icon-mail-forward"></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">22-feb-2014</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>
                                    <td>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-envelope"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class=" icon-bell-alt"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-success btn-xs"><i class="icon-mail-forward"></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">22-feb-2014</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>
                                    <td>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-envelope"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class=" icon-bell-alt"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-success btn-xs"><i class="icon-mail-forward"></i></button>
                                  	</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">22-feb-2014</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>
                                    <td>
                                    <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-cmic btn-xs"><i class="icon-envelope"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class=" icon-bell-alt"></i></button>
                                      <button data-toggle="modal" href="#myModal" class="btn btn-success btn-xs"><i class="icon-mail-forward"></i></button>
                                  	</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                  </div>
              </section>
              <!-- page end-->
<div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Nuevo Prospecto</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">RFC</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="RFC">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Correo</label>
                                                  <div class="col-lg-10">
                                                      <input type="email" class="form-control" id="" placeholder="Correo Electrónico">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Razón Social</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Razón Social">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Calle y Colonia</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Calle y colonia">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Estado</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="" placeholder="Estado">
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
                                                      <button type="submit" class="btn btn-shadow btn-success">Guardar</button>
                                                      <button type="submit" class="btn btn-shadow btn-danger" data-dismiss="modal" aria-hidden="true">Salir</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Convertir a Cliente</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                           <div class="form-group">
	                                      <div class="col-lg-10">
	                                          <h4>¿Esta seguro que desea convertirlo a cliente?</h4>
	                                      </div>
	                                  </div>
                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <button type="submit" class="btn btn-shadow btn-success">Si</button>
                                                      <button type="submit" class="btn btn-shadow btn-danger" data-dismiss="modal" aria-hidden="true">No</button>
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
