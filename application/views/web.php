<!---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Contenido de los articulos

-----------------------------------------------------------------------------------
----------------------------------------------------------------------------------> 

<?php
$contenido = '';
if($articulos){
	foreach ($articulos as $row) {
		$final = str_replace('#base_url#', $base_url, $row->articulo);
		$contenido .='<div class="container">';
		$contenido .='<section id="'.$row->menu.'">';
		$contenido .= $final;
		$contenido .= '</section>';	
		$contenido .= '</div>';  
	}
}
	
echo $contenido;
	
if(isset($message)){
	echo $message;
}
?>


<!---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Footer de la pagina

-----------------------------------------------------------------------------------
----------------------------------------------------------------------------------> 


<footer>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-footer">
					CONTACTO:<br>
					email: cintiazacaria@czconsultoria.com.ar  -  Cel: +54 9 261 5860475
				</h4>
			</div>
		</div>
    </div>
</footer>


<!---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Scripts

-----------------------------------------------------------------------------------
----------------------------------------------------------------------------------> 


<script src="<?php echo $base_url?>js/jquery.min.js"></script>
<script src="<?php echo $base_url?>js/bootstrap.min.js"></script>
<!--<script src="<?php echo $base_url?>js/jquery.nicescroll.js"></script>-->
<script src="<?php echo $base_url?>js/owl.carousel.js"></script>
<script src="<?php echo $base_url?>js/wow.js"></script>
<script src="<?php echo $base_url?>js/script.js"></script>

<style>
    .menu_abajo{
        position: absolute; 
        bottom: 0; 
        right: 25;
    }
</style>
<script>
	$(function() {
		$('#contacto').trigger('click');
	});
	
	
    $(".navbar-toggle").on('click', function(){
        $('#bs-example-navbar-collapse-1').removeClass('menu_abajo');
    })

</script>



</body>

</html>