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
                          <li class="active">Perfil</li>
                      </ul>
                      <!--breadcrumbs end -->

 	<section class="panel">
                          <header class="panel-heading">
                              Perfil del Expositor
                          </header>
    <div class="panel-body">
  	<!-- 1era columana-->		
		<div class="col-lg-6">
			
				<div class="form-group">
					<label class="" for="">Stand</label>
                    <input type="number" class="form-control" id="" placeholder="No. de Stand">
				</div>
				<div class="form-group">
					<label class="" for="">Representante Legal</label>
                    <input type="text" class="form-control" id="" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for = "name">Apellido Materno</label>
					<input type = "text" class="form-control" id=""  placeholder="Apellido Materno" />
				</div>
				<div class="form-group">
					<label for = "name">Calle</label>
					<input type = "text" id = "name" name = "name" class="form-control"placeholder = "Calle" />
				</div>
				<div class="form-group">
					<label for = "name">Colonia</label>
					<input type = "text" id = "name" name = "name" class="form-control"placeholder = "Colonia" />
				</div>
				<div class="form-group">
					<label for = "name">Entre que calles</label>
					<input type = "text" id = "name" name = "name" class="form-control"placeholder = "Calle 1 " />
				</div>
				<div class="form-group">
					<label for = "name">Ciudad</label>
					<input type = "text" id = "name" name = "name" class="form-control"placeholder = "Ciudad " />
				</div>
				<div class="form-group">
				<label for = "state">Estado</label>
					<select id="state"  name="state" class="form-control"placeholder = "Ciudad ">
                                        <option value="">Elige una opción</option>
                                            <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                            <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                            <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option> 
                                            <option value="CAMPECHE">CAMPECHE</option>
                                            <option value="CHIAPAS">CHIAPAS</option>
                                            <option value="CHIHUAHUA">CHIHUAHUA</option>
                                            <option value="COAHUILA DE ZARAGOZA">COAHUILA DE ZARAGOZA</option>
                                            <option value="COLIMA">COLIMA</option>
                                            <option value="DISTRITO FEDERAL">DISTRITO FEDERAL</option>
                                            <option value="DURANGO">DURANGO</option>
                                            <option value="GUANAJUATO">GUANAJUATO</option>
                                            <option value="GUERRERO">GUERRERO</option>
                                            <option value="HIDALGO">HIDALGO</option>
                                            <option value="JALISCO">JALISCO</option>
                                            <option value="MÉXICO">MÉXICO</option>
                                            <option value="MICHOACÁN DE OCAMPO">MICHOACÁN DE OCAMPO</option>
                                            <option value="MORELOS">MORELOS</option>
                                            <option value="NAYARIT">NAYARIT</option>
                                            <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                            <option value="OAXACA">OAXACA</option>
                                            <option value="PUEBLA">PUEBLA</option>
                                            <option value="QUERÉTARO">QUERÉTARO</option>
                                            <option value="QUINTANA ROO">QUINTANA ROO</option>
                                            <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                            <option value="SINALOA">SINALOA</option>
                                            <option value="SONORA">SONORA</option>
                                            <option value="TABASCO">TABASCO</option>
                                            <option value="TAMAULIPAS">TAMAULIPAS</option>
                                            <option value="TLAXCALA">TLAXCALA</option>
                                            <option value="VERACRUZ DE IGNACIO DE LA LLAVE">VERACRUZ DE IGNACIO DE LA LLAVE</option>
                                            <option value="YUCATÁN">YUCATÁN</option>
                                            <option value="ZACATECAS">ZACATECAS</option>
                                            <option value="OTRO">OTRO</option>
					</select>
				</div>
				<div class="form-group">
					<label for = "name">Teléfono(LADA)</label>
					<input type = "phone" id = "name" name = "name" class="form-control" placeholder = "Teléfono con LADA" />
				</div>
				<div class="form-group">
					<label for = "email">Correo Electrónico</label>
					<input type = "email" id = "email" name = "email" class="form-control" placeholder = "Correo Electronico" />
				</div>
				<div class="form-group">
					<label for = "edad">Actividad Empresarial(Producto/Servicio)</label>
					<textarea rows="4" class="form-control"placeholder = "Actividad"></textarea>
				</div>
				<div class="form-group">
					<label for = "sector">Sector</label>
					<select name = "sector" id = "sector" class="form-control" placeholder = "sector">
						<option value="">Selecciona un sector</option>
					  <option value="Industria">Industria</option>
					  <option value="Servicio">Servicio</option>
					  <option value="Comercio">Comercio</option>
					</select>
				</div>
				<br>
				<p>Datos de la persona con la que estaremos en contacto durante el evento</p>
				<div class="form-group">
					<label for = "calle">Nombre del Contacto</label>
					<input type = "text" id = "calle" name = "calle" placeholder = "Nombre del Contacto" class="form-control"/>
				</div>
				
				<br><br><br><br>
				<div class="form-group">
					<label for = "calle">Firma </label>
					<label for = "calle" placeholder = "Ciudad ">____________________________________________________</label>
				</div>
				
		</div><!--fin 1era columana-->

<!-- 2da columana-->
		<div class="col-lg-6">
				<div class="form-group">
					<label for = "last_name">Razon Social</label>
					<input class="form-control" type = "text" id = "last_name" name = "last_name" placeholder = "Física o Moral" />
				</div>
				<div class="form-group">
					<label for = "last_name">Apellido Paterno</label>
					<input class="form-control" type = "text" id = "last_name" name = "last_name" placeholder = "Apellido Paterno" />
				</div>
				<div class="form-group">
					<label for = "last_name">RFC</label>
					<input class="form-control" type = "text" id = "last_name" name = "last_name" placeholder = "RFC" />
				</div>
				<div class="form-group">
					<label for = "name">No. Calle </label>
					<input class="form-control" type = "text" id = "name" name = "name" placeholder = "interior o exterior" />
				</div>
				<div class="form-group">
					<label for = "name">Código Postal</label>
					<input class="form-control" type = "text" id = "name" name = "name" placeholder = "Código Postal" />
				</div>
				<div class="form-group">
					<label for = "name">Calle 2</label>
					<input class="form-control" type = "text" id = "name" name = "name" placeholder = "Calle 2" />
				</div>
				<div class="form-group">
					<label for = "name">Delegación</label>
					<input class="form-control" type = "text" id = "name" name = "name" placeholder = "Delegación o Municipio" />
				</div>
				<div class="form-group">
					<label for = "name">País</label>
					<input class="form-control" type = "text" id = "name" name = "name" placeholder = "País" />
				</div>
				<div class="form-group">
					<label for = "name">Fax</label>
					<input class="form-control" type = "text" id = "name" name = "name" placeholder = "No. de Fax" />
				</div>
				<div class="form-group">
					<label for = "employes">¿Cuantos empleados tiene?</label>
					<select class="form-control" name="employes" id="employes">
						<option value="">Selecciona un rango</option>
						<option value="1-10">1-10</option>
						<option value="11-50">11-50</option>                
						<option value="51-250">51-250</option>
						<option value="< 251"><251</option>                  
					</select>
				</div>
				<div class="form-group">
					<label for = "rfc">Sitio Web</label>
					<input class="form-control" type = "text" id = "web" name = "web" placeholder = "Sitio Web" />
				</p>
				<div class="form-group">
					<label for = "know">¿Como se enteró?</label>
					<select class="form-control" name="know" id="know">
						<option value="">Seleccione una opción</option>
                      <option value="E-mail">E-mail</option>
                      <option value="Radio">Radio</option>
                      <option value="T.V.">T.V.</option>
                      <option value="Internet">Internet</option>
						<option value="Internet">Recomendación</option>
						<option value="Otro">Otro</option>
					</select>
				</div>
				<div class="form-group">
					<label for = "calle">Si es Otro</label>
					<input class="form-control" type = "text" id = "calle" name = "calle" placeholder = "Otro medio" />
				</div>
				<br><br>
				<div class="form-group">
					<label for = "calle">Teléfono/Celular</label>
					<input type = "text" id = "calle" name = "calle" placeholder = "Teléfono para localizarlo" class="form-control"/>
				</div>

				<br><br><br><br>
				
				<input type = "hidden" id = "user_type" name = "user_type" value = "2" />
				<div class="form-group">
				<button type="button" class="btn btn-success"><i class="icon-save"></i> Guardar registro</button>
				<button type="button" class="btn btn-cmic"><i class="icon-print"></i> Imprimir</button>
				</div>
		</div><!--fin 2da columana-->
</form>
</div>
 </section>	


	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Nuevo Cliente</h4>
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

<?php
 require_once "footer.php";
?>
