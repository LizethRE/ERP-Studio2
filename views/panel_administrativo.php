<?php 
			 session_start();
			 error_reporting(0);

			 $ID = $_SESSION['id'];
			 if($ID==null || $ID=''){
				 header('location:../404.php');
				 die();
			 }
			 require_once('../controlador/empleadoController.php');
			 $empleadoController = new empleadoController
			 ();
?>
 <!DOCTYPE html>
 <html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

	<title>Studio Princess		</title>
	

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="../css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="../css/custom.css" rel="stylesheet">
	  <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">
	  <link href="../css/style.css" rel="stylesheet">
	  <link href="../css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="../css/magnific-popup.css"> 
	
	<script src="../js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	

	<?php $empleadoController->getMenu($_SESSION['id'],$_SESSION['rol']); ?>

	<!-- What is -->
	<div id="whatis" class="content-section-b" >

		
	<?php require_once('formularios/formularios.php'); ?>
	<?php require_once('tablas/tablaCliente.php'); ?>
	<?php require_once('tablas/tablaEmpleado.php'); ?>
	<?php require_once('tablas/tablaProducto.php'); ?>
	<?php require_once('modalEditar/modalEditarCliente.php'); ?>
	<?php require_once('modalEditar/modalEditarEmpleado.php'); ?>
	<?php require_once('modalEditar/modalEditarProducto.php'); ?>
	<?php require_once('modalEliminar/modalEliminarCliente.php'); ?>
			
			<div id="admin" class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Seccion Administrativa</h2>
				<p class="lead" style="margin-top:0">Studio Princes Boutique</p>
			</div>
			
			<div class="row">
			
				<div class="col-sm-4 wow fadeInDown text-center">
				  <a href="registrarEmpleado.php"><img class="rotate" src="../img/icon/pencil.svg" alt="Generic placeholder image"></a>
				  <h3>Registro</h3>
				  <p class="lead">Registra Clientes, Proveedores, Empleados, Productos y administra su informacion de manera rapida y eficiente.</p>
				</div>
				
				<div class="col-sm-4 wow fadeInDown text-center">
 					<a href="proveedores.php"><img class="rotate" src="../img/icon/config.svg" alt="Generic placeholder image"></a>
				   <h3>Edicion</h3>
				   <p class="lead">Dentro de nuestra boutique encontraras todo tipo de prendas </p>
				</div>
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <a href="miperfil.php"><img  class="rotate" src="../img/icon/retina.svg" alt="Generic placeholder image"></a>
				   <h3>Mi Perfil!</h3>
					<p class="lead">Entra a tu perfil y veras tu informacion mas relevante, tambien podras actualizar tu imagen del perfil</p>
				</div>
				
			</div>
				
			<div class="row tworow">
			
			</div>
		</div>
	</div>
	
	<div  class="content-section-c " style="display:none;">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Get Live Updates</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
			 </div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Subscribe to our Newsletter</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Subscribe to our Newsletter</h2>
										<form>
											<p><label>Your Email Address</label><input type="text"/></p>
											<p><button>Subscribe me</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>>
		</div>
	</div>	
	
	<!-- Credits -->
	<div id="credits" class="content-section-a" style="display:none;">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Credits</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-desktop fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Bootstrap </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-picture-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Owl-Carousel </h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-magic fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Codrops </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Lorem Ipsum</h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		</div>
	</div>


	
	
	
	<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Boutique</h3>
            <p>Studio Princes 2018  <br/>
              Todos los derechos reservados<br/>
              <!-- Go to: <a  href="http://andreagalanti.it" target="_blank">andreagalanti.it</a> -->
            </p>
          </div> <!-- /col-xs-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Studio Princes</h3>
              <ul>
                <li>Contactanos si tienes alguna duda</li>
                <li>Visualiza nuestra galeria</li>
                <li>Muchos diseños a tu alcance</li>
                <li>Visita nuestra tienda fisica</li>
              </ul>
              Visitanos: <a href="http://www.studioprinces.com" target="_blank">studioprincess.com</a>
            </div>
          </div>
        </div>
      </div>
  </footer>

	

    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
	<script src="../js/owl.carousel.js"></script>
	<script src="../js/script.js"></script>
	<!-- StikyMenu -->
	<script src="../js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	  
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="../js/jquery.corner.js"></script> 
	<script src="../js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="../js/classie.js"></script>
	<script src="../js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="../js/jquery.magnific-popup.js"></script> 
	<script type="text/javascript" src="../js/jquery.validate.js"></script> 
	<script src="../js/app.js"></script> 
</body>

</html>
