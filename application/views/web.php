
	<?php
	$contenido = '';
		if($articulos){
			foreach ($articulos as $row) {
				$final = str_replace('#base_url#', $base_url, $row->articulo);
				$contenido .='<section id="'.$row->menu.'">';
				$contenido .= $final;
				$contenido .= '</section>';	  
			}
	  	}
	
	echo $contenido;
	
	if(isset($message)){
		echo $message;
	}
	?>
	


<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                    	<center>
                        <img class="img-responsive" src="<?php echo $base_url?>images/logo2.png" alt="">
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Redes sociales</h2>
                        <ul class="icon_list">
                            <li><a href="http://www.facebook.com/abdullah.noman99"target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/absconderm"target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://www.dribbble.com/abdullahnoman"target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; brandy 2015.All Right Reserved By <a href="http://www.themeforest.net/user/thecodecafe"target="_blank">Code Cafe Team</a></p>
                        <p>Made with love for creative people.</p>
                    </div>
                </div>
            </div>
        </div>
        
        -->
    </div>
</footer>











<!-- =========================
     SCRIPTS 
============================== -->


    <script src="<?php echo $base_url?>js/jquery.min.js"></script>
    <script src="<?php echo $base_url?>js/bootstrap.min.js"></script>
    <!--<script src="<?php echo $base_url?>js/jquery.nicescroll.js"></script>-->
    <script src="<?php echo $base_url?>js/owl.carousel.js"></script>
    <script src="<?php echo $base_url?>js/wow.js"></script>
    <script src="<?php echo $base_url?>js/script.js"></script>

<script>
	$(function() {
		$('#contacto').trigger('click');
	});
</script>


</body>

</html>