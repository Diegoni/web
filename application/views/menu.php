<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>

    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top" style="min-height: 130;">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a  href="#">
	                  	<img src="<?php echo $base_url?>images/logo3.png"  height="50px" style="height: 75; margin-top: 25; margin-left: 50;">
	                  	</a>
	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right" style="position: absolute; bottom: 0; right: 25; ">
	                  	<?php
	                  	$menu = '';
						$contenido = '';
	                  	
	                  	if($menus){
	                  		foreach ($menus as $row) {
								$menu .= '<li><a href="http://localhost/web/index.php/web/articulo/'.$row->id_articulo.'">'.$row->menu.'</a></li>';
							}
	                  	}
						
						echo $menu;
	                  	?>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 
	            
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
	            </div>
	            
	            
	            
	            
	            
	            
	            
	            
	            
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
				    		<p style="color: #f0b32f; font-family: 'Montserrat', sans-serif; font-size: 11px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    	<div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
				    </div>
				    <div class="item">
				    	<blockquote>
				    		<p style="color: #f0b32f; font-family: 'Montserrat', sans-serif; font-size: 11px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    	<div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
				    </div>
				    <div class="item">
				    	<blockquote>
				    		<p style="color: #f0b32f; font-family: 'Montserrat', sans-serif; font-size: 11px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    	<div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
				    </div>
				  </div>
				</div>
			</div>							
		</div>
	            
	            
	            
	            
	            
	            

				<?php } ?>
				
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="scroll_down">
                            <a href="#SERVICE"></a>
	                            <h4></h4>
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>  
	    </section>         
    </header>