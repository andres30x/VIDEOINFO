<!--//header-->
<?php
include_once "header.php";
 ?>
<!--//header-->

	<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
	<h1 class="intro">
  		<h1 class="welcome_index hue">FORMULARIO DE REGISTRO</h1>	
		</div>
			</div>
	<div id="banner">
		<div class="container wrapper">
		<div class="inner_content">
		<div class="row">
			<div class="span4">			
				<p align="justify">Video Info nace como una alternativa a <span>Youtube</span>,dónde puedes subir y ordenar tus vídeos online para darlos a conocer. El funcionamiento es exactamente el mismo que el de la competencia, solo que es menos masivo y tiene un poco más de flexibilidad con el copyright que se le coloca a algunos vídeos.</p>
				<p>En uso de los servicios ofrecidos en el Sitio, el usuario puede tener acceso a contenidos provistos por otros usuarios o terceros. 
				</p align="justify">
				<p align="justify">Cualquier uso de los servicios que tenga por objeto, lesionar los derechos de terceros, contravenir el orden jurídico o constituya una práctica ofensiva al pudor público, se reputará como USO PROHIBIDO de los servicios o contenidos, en tanto transgrede los fines para los que fue puesto a disposición de los usuarios.</p>
	
			</div>
			<div class="span8 pad15">
				<div class="vendor">
						<?php session_start();?>
			            <form class="form-horizontal" method="POST" action="registrar.php">
						<fieldset>
						<div class="control-group">
						  <label class="control-label" for="nombre">Nombre</label>
						  <div class="controls">
						    <input id="nombre" name="nombre" type="text" placeholder="Ingrese Nombre" class="input-large" required="">
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="apellido">Apellido</label>
						  <div class="controls">
						    <input id="apellido" name="apellido" type="text" placeholder="Ingrese Apellido" class="input-large" required="">
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="email">Email</label>
						  <div class="controls">
						    <input id="email" name="email" type="text" placeholder="Ingrese Email" class="input-large" required="">
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="usuario">Usuario</label>
						  <div class="controls">
						    <input id="usuario" name="usuario" type="text" placeholder="Nick de usuario" class="input-large" required="">
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="contrasena">Contraseña</label>
						  <div class="controls">
						    <input id="contrasena" name="contrasena" type="password" placeholder="Ingrese contraseña" class="input-large" required="">
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="crear"></label>
						  <div class="controls">
						    <button id="crear" name="crear" class="btn btn-success">Crear Cuenta</button>
						    <button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
						  </div>
						</div>
						</fieldset>
					</form>
          		</div>
			</div>
		</div>
	</div>
	</div>
	</div>		
	<!--//page-->
<?php
include_once "footer.php";
 ?>