<!--//header-->
<?php
session_start();
if(isset($_SESSION['estado']))
{
    include "header1.php";
    $buscame=$_POST['archivobuscado'];
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
	<div class="pad30"></div>
		
				<div class="row">
                    <div class="span4">
                    <?php include "buscar.php" ?>
                      <h2>NOMBRE: <?php echo $nombre; ?></h2>
						<p class="lead"><?php echo $descripcion; ?></p>          
						<h6><span>Services</span></h6>
						<ul class="icons">
							<li><i class="icon-globe black"></i> Web Design</li>
							<li><i class=" icon-pencil black"></i> Graphic Design</li>
							<li><i class=" icon-laptop black"></i> Web Hosting</li>
						</ul>
						
						<div class="pad25"></div>
						<a href="#" class="btn btn-inverse btn-medium btn-rounded"><h6><i class="icon-circle-arrow-left grey"></i></h6></a> 
						<a href="#" class="btn btn-inverse btn-medium btn-rounded"><h6><i class="icon-circle-arrow-right grey"></i></h6></a> 
						<a href="#" class="btn btn-inverse btn-medium btn-rounded "><h6>View</h6></a> 
						<div class="pad25"></div>
						</div>
						
						<div class="span8 pad15">

						<?php	echo "<video src='".$ruta." autoplay controls>" ?>
						<div class="pad25"></div>
						</div>
							</div>
						</div>
					</div>
					
				<!--related projects-->	
				<div class="strip2">
				<h1>Related Projects</h1>
				<h3 class="center about_strip">Ecilisis venenatis risus, suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy. 
				Elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero  vivamus purus arcu, commodo cursus egestas et.</h3>
					
				<div class="container wrapper">
				<div class="inner_content">
				<div class="inner_content col_full">
				
				<div id="slider_related">
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s1.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s1.jpg" alt=""/></a>
				</div> 
				</div>
			</div>
			
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s2.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s2.jpg" alt=""/></a>
				</div>
				</div>
			</div>
			
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s3.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s3.jpg" alt=""/></a>
				</div>
				</div>
			</div>
			
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s4.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s4.jpg" alt=""/></a>
				</div>
				</div>
			</div>
			
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s5.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s5.jpg" alt=""/></a>
				</div>
				</div>
			</div>
			
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s1.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s1.jpg" alt=""/></a>
				</div>
				</div>
			</div>
			
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s7.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s7.jpg" alt=""/></a>
				</div>
				</div>
			</div>
			
			<div class="slider-item">
				<div class="slider-image">
				<div class="hover_colour">
				<a href="img/large/s8.jpg" data-rel="prettyPhoto[portfolio1]">
				<img src="img/small/s8.jpg" alt=""/></a>
				</div>
				</div>
			</div>
			</div>
				<div id="sl-prev2" class="widget-scroll-prev2"><i class="icon-chevron-left white"></i></div>
				<div id="sl-next2" class="widget-scroll-next2"><i class=" icon-chevron-right white but_marg"></i></div>
				</div>
			<!--//projects-->
				</div>
			</div>
		</div>
	<!--//page-->
	
	<!--footer-->
<?php include "footer.php"; ?>