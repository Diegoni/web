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
			<nav class="navbar navbar-default navbar-fixed-top" style="min-height: 130;">
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
								$menu .= '<li><a href="'.$base_menu.'/index.php/web/articulo/'.$row->id_articulo.'">'.$row->menu.'</a></li>';
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
			<div class="col-md-8 col-md-offset-2">
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
					    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.
					    		</p>
					    	</blockquote>
					    	<div class="profile-circle text-carrusel"></div>
					    </div>
					    <div class="item">
					    	<blockquote>
					    		<p class="text-carrusel">
					    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.
					    		</p>
					    	</blockquote>
					    	<div class="profile-circle text-carrusel"></div>
					    </div>
					    <div class="item">
					    	<blockquote>
					    		<p class="text-carrusel">
					    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.
					    		</p>
					    	</blockquote>
					    	<div class="profile-circle text-carrusel"></div>
					    </div>
				  	</div>
				</div>
			</div>							
		</div>
	</div>       
	<?php } ?>