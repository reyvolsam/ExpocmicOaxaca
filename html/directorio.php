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
                          <li class="active">Directorio</li>
                      </ul>
                      <!--breadcrumbs end -->
          	        	
		
           		<!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Directorio de Futuros Clientes
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
                                    <th> Observaciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>

                                </tr>
                                <tr class="gradeC">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>

                                </tr>
                                <tr class="gradeA">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>

                                </tr>
                                <tr class="gradeA">
                                    <td>PMES932919OQA</td>
                                    <td>Intelek S.A. C.V.</td>
                                    <td class="hidden-phone">Denise López Herrera</td>
                                    <td class="hidden-phone">9212213023</td>
                                    <td class="hidden-phone">proyec@cmic.com.mx</td>
                                    <td class="hidden-phone">Es buena paga, paga en 15 días</td>

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
                                          <h4 class="modal-title">Convertir a Cliente</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                           <div class="form-group">
	                                      <div class="col-lg-10">
	                                          <h4>¿Esta seguro que desea convertirlo a un Prospecto?</h4>
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
