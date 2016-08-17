<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>


<!---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Menu

-----------------------------------------------------------------------------------
---------------------------------------------------------------------------------->

	<header id="HOME" style="background-position: 50% -125px;">
		<div class="section_overlay">
			<nav class="navbar navbar-default" style="min-height: 130;">
				<div class="navbar-header">
	            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                	<span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	               	</button>
	                <a  href="<?php echo $base_url?>">
	                  	<img src="<?php echo $base_url?>images/logo3.png"  height="65px" style="height: 100; margin-top: 15; margin-left: 50;">
	                </a>
	            </div>

	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            	<ul class="nav navbar-nav navbar-right" style="position: absolute; bottom: 0; right: 25; ">
	                	<?php
	                  	$menu = '';
						$contenido = '';
	                  	
	                  	if($menus){
	                  		foreach ($menus as $row) {
	                  			if($id_articulo == $row->id_articulo){
	                  				$menu .= '<li><a href="'.$base_menu.'/index.php/web/articulo/'.$row->id_articulo.'" class="li_active">'.$row->menu.'</a></li>';
	                  			} else {
	                  				$menu .= '<li><a href="'.$base_menu.'/index.php/web/articulo/'.$row->id_articulo.'">'.$row->menu.'</a></li>';
	                  			}
								
							}
	                  	}
						
						echo $menu;
	                  	?>
					</ul>
				</div>
			</nav> 
		</div>
	</header>
	
	
<!---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Home del sitio

-----------------------------------------------------------------------------------
---------------------------------------------------------------------------------->  
          
          
	<?php if(!$id_articulo){ ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="home_text wow fadeInUp animated">
					<h2>consultoria en calidad</h2>
					<p>Lic. Cintia Zacaria</p>
					<img src="<?php echo $base_url?>images/shape.png" alt="">                        
				</div>
			</div>
		</div>
	    
	    <!-- Carrusel -->       
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000" style="padding-bottom: 25;">
				  	<!-- Carousel indicators -->
                	<ol class="carousel-indicators">
					    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
					    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
					    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
				  	</ol>
				  	<!-- Carousel items -->
				  	<div class="carousel-inner">
					    <div class="active item">
					    	<blockquote>
					    		<p class="text-carrusel">
					    			Calidad significa hacer lo correcto cuando nadie te está mirando. <i>Henry Ford.</i>
					    		</p>
					    	</blockquote>
					    	<div class="profile-circle text-carrusel"></div>
					    </div>
					    <div class="item">
					    	<blockquote>
					    		<p class="text-carrusel">
					    			La calidad de vida de una persona es directamente proporcional a su compromiso con la excelencia, independientemente de su campo de actividad. <i>Vince Lombardi.</i>
					    		</p>
					    	</blockquote>
					    	<div class="profile-circle text-carrusel"></div>
					    </div>
					    <div class="item">
					    	<blockquote>
					    		<p class="text-carrusel">
					    			La calidad es nuestra mejor garantía de la fidelidad de los clientes, nuestra más fuerte defensa contra la competencia y el único camino para el crecimiento. <i>Jack Welch.</i>
					    		</p>
					    	</blockquote>
					    	<div class="profile-circle text-carrusel"></div>
					    </div>
					    <div class="item">
                            <blockquote>
                                <p class="text-carrusel">
                                    Ninguna empresa puede ser mejor o peor que las personas que la integran. <i>Kaoru Ishikawa.</i>
                                </p>
                            </blockquote>
                            <div class="profile-circle text-carrusel"></div>
                        </div>
				  	</div>
				</div>
			</div>	
			<div class="col-md-2">
				<center>
					<img src="<?php echo base_url(),'web/images/muneco.png'?>" class="img-responsive">
				</center>
			</div>							
		</div>
	</div>       
	<?php } ?>