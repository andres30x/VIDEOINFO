<!--//header-->
<?php
session_start();
if(isset($_SESSION['estado']))
{
    include "header1.php";
    
}
else
{
    include "header.php";
}
 ?>
<!--//header-->

	<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
	<h1 class="intro">
	<h1>
    <?php 

            if(isset($_SESSION['estado']))
            {
                $usuario_logeado=$_SESSION['userid'];
                echo 'HOLA   '.$usuario_logeado.': '; 
                
            }
            else
            {
                include_once "header.php";
            }
    ?>
    </h1>
  		<h1 class="welcome_index hue">COMPARTA CON NOSOTROS UN VIDEO</h1>	
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
			            <form  class="form-horizontal" enctype="multipart/form-data" action="upload.php" method="POST">
							<fieldset>
							<div class="control-group">
							  <label class="control-label" for="archivo">Elige video a subir: </label>
							  <div class="controls">
							    <input id="archivo" name="video" class="input-file" type="file">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="archivo">Elige Imagen Miniatura: </label>
							  <div class="controls">
							    <input id="archivo" name="imagen" class="input-file" type="file">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="nombre">Nombre del video</label>
							  <div class="controls">
							    <input id="nombre" name="nombre" type="text" placeholder="Ingrese nombre del video" class="input-large" required="">
							    
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="categoria">Categoria</label>
							  <div class="controls">
							    <input id="categoria" name="categoria" type="text" placeholder="Ingrese categoría de video" class="input-large" required="">
							    
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="descripcion">Descripción del Video</label>
							  <div class="controls">                     
							    <textarea id="descripcion" name="descripcion">Agregue una pequeña descripción del video a subir</textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="reglas">Acepto los Términos y Condiciones</label>
							  <div class="controls">
							    <label class="radio inline" for="reglas-0">
							      <input type="radio" name="reglas" id="reglas-0" value="Si" checked="checked">
							      Si
							    </label>
							    <label class="radio inline" for="reglas-1">
							      <input type="radio" name="reglas" id="reglas-1" value="No">
							      No
							    </label>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="subir"></label>
							  <div class="controls">
							    <button id="subir" name="subir" class="btn btn-success">SUBIR VIDEO</button>
							    <button id="cancelar" name="cancelar" class="btn btn-danger">CANCERLAR</button>
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