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
                    <div class="footer_logo">
                    	<center>
                        <img class="img-responsive wow fadeInDown animated" src="<?php echo $base_url?>images/logo2.png" alt="">
                        </center>
                    </div>
                </div>
            </div>
        </div>
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