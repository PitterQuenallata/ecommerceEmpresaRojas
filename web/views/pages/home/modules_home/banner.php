<!-- se utiliza css en linea para que sea dinamico y se pueda cambiar desde la base de datos -->
<div class="container-fluid banner" style="position:relative; background: url('<?php echo $path ?>views/assets/img/banner/1/banner-07.jpg');background-size:cover;background-position: center; background-repeat: no-repeat;">
	
	<div class="container-fluid" style="background-color: rgba(0,0,0,.5);">
		
		<div class="container text-left p-5">
			
			<h1 class="text-uppercase" style="color:#fff; text-shadow: 2px 2px 5px #000">Ofertas especiales</h1>
			<h2 style="color:#fff; text-shadow: 2px 2px 5px #000">50% off</h2>
			<h3 style="color:#fff; text-shadow: 2px 2px 5px #000">Termina el 31 de Octubre</h3>

		</div>

	</div>

</div>

<script>
	
	$(".banner").css({'background-attachment':'fixed'})

</script>