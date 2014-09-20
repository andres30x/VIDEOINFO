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
	<!--banner-->
	<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
    <h1>
    <?php 

            if(isset($_SESSION['estado']))
            {
                $usuario_logeado=$_SESSION['userid'];
                echo 'HOLA '.$usuario_logeado.': '; 
                
            }
            else
            {
               
            }
    ?>
    </h1>
	<h1 class="intro">
    <span class="hue">Video Info</span> nace como una alternativa a <span>Youtube</span>,dónde puedes subir y ordenar tus vídeos online para darlos a conocer. El funcionamiento es exactamente el mismo que el de la competencia, solo que es menos masivo y tiene un poco más de flexibilidad con el copyright que se le coloca a algunos vídeos.
    </h1>
	</div>
	</div>
	</div>
			
			<div class="container wrapper">
			<div class="inner_content">
			
			<center>
            <div id="options">                                           
            <form class="form-horizontal" method="POST" action="vervideo.php">
                <fieldset>
                <div class="control-group">
                    <div id="filters" class="option-set" data-option-key="filter">
                      <label class="control-label selected" for="buscador" data-option-value="*">Buscar Video</label>
                      <div class="controls">
                        <input id="buscador" name="archivobuscado" type="text" placeholder="Ingrese video a buscar" class="input-large">
                        <button data-option-value="*" class=" selected">Buscar</button>
                        
                    </div>
                </div>
                </div>
                </fieldset>
            </form>                                        
                    <div class="clear"></div>
                    <h1>ULTIMOS VIDEOS SUBIDOS</h1>
            </div>
            </center>   
                    <!-- portfolio_block -->
					<div class="row">      
                    <div class="projects">        
                        <div class='span3 element category01' data-category='category01'>                    
                            <?php include "mostrar.php"; ?>
                        </div>
                        <div class="clear"></div>
                    </div>   
                    <!-- //portfolio_block -->   
                </div>
            </div>
        </div>
	<!--//page-->
<?php
include_once "footer.php";
 ?>