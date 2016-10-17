<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es" style="height:100%">

<head>

	<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Juego de conocimientos | UTPL</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
	<link href="css/style-inputs.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">


   <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menú</span> Menú <i class="fa fa-bars"></i>
                </button>
               <a href="menu"><img class="img-responsive" src="img/logo3.svg" alt=""></a>
            </div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right" style="text-align:center" align="center">
                     <li class="page-scroll">
                       <a href="inicio" >Inicio
									<img src="img/home.svg" alt="" style="max-width:35px" >
						</a>
                    </li>
                    <li class="page-scroll">
                       <a href="radio" >Radio
									<img src="img/radio.svg" alt="" style="max-width:35px" >
						</a>
                    </li>
                    <li class="page-scroll">
                        <a href="historia" >Historia
									<img src="img/historia.svg" alt="" style="max-width:35px">
								</a>
                    </li>
					<li class="page-scroll">
                       <a href="tv">TV
									  <img src="img/tv.svg" alt="" style="max-width:35px">
									</a>
                    </li>
					<li class="page-scroll">
                       <a href="teorias" >Teorías
									<img src="img/teorias.svg" alt="" style="max-width:35px">
								</a>
                    </li>
                </ul>
				</div>
        </div>
        <!-- /.container-fluid -->
    </nav>

	   <!-- CONTENIDO -->
    
	<div id="contenedor">
			<div class="col-xs-12 col-sm-12 col-lg-12">
					<h2 class="name text-center" style="color:white">Radio</h2>
					<hr class="star-light">
					<!-- PREGUNTA1 -->
						<div class="row">
				<div class="col-lg-1 portfolio-item"></div>
				<div class="col-lg-2 col-xs-6 portfolio-item">
					<a href="#myModal" class="btn btn-lg btn-outline btn-block" data-toggle="modal">
						1 <i class="fa fa-question"></i>
					</a>
				</div>
				<div class="col-lg-2  col-xs-6 portfolio-item">
					<a href="#portfolioModal1" class="btn btn-lg btn-outline btn-block" data-toggle="modal">
						2 <i class="fa fa-question"></i>
					</a>
				</div>
				<div class="col-lg-2  col-xs-6 portfolio-item">
					<a href="#portfolioModal1" class="btn btn-lg btn-outline btn-block" data-toggle="modal">
						3 <i class="fa fa-question"></i>
					</a>
				</div>
				<div class="col-lg-2 col-xs-6 portfolio-item">
					<a href="#portfolioModal1" class="btn btn-lg btn-outline btn-block" data-toggle="modal">
						4 <i class="fa fa-question"></i>
					</a>
				</div>
				<div class="col-lg-2 col-xs-6 portfolio-item">
					<a href="#portfolioModal1" class="btn btn-lg btn-outline btn-block" data-toggle="modal">
						5 <i class="fa fa-question"></i>
					</a>
				</div>
				<div class="col-lg-1 portfolio-item"></div>
			</div>		
				
					
					
            </div>

    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; UTPL 2016. Powered by: <a href="http://chilalito.com/" style="color:white; font-weight:bold; text-decoration:underline">chilalito C.L.</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
	
	
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
	<!-- modal1 -->
	<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h5 class="modal-title" id="myModalLabel">1. ¿Descubre la imagen de quién descubrió las ondas sonoras?</h5>
		  </div>
		  <div class="modal-body">
				<form action="" method="post" class="text-center" id="forma1" name="forma1" >	
					<!-- OPCIONES DE RESPUESTA -->	
				<?php 
						poner_preguntas();
						poner_bloquear_formas();
				?>		
					<button type="button" id="btn1" class="btn btn-success btn-lg">Verificar</button>
				</form>
				<div id="respuesta" class="text-center"></div>
				<div id="respuesta2" class="text-center"></div>
		  </div>
		</div>
	   </div>
	</div>
	<script src="verificar.js"></script>
	
<?php
	//EATO COMPRUEBA SI YA SE CONTESTO LAS PREGUNTA Y EL RADIOBUTTON SELECCIONADO Y DE ACUERDO A ESO BLOQUEA EL FORMULARIO--> SE DESBLOQUEA REGRESANDO AL MENU PRINCIPAL
	function poner_bloquear_formas(){		 
		if ($_SESSION['f1']==0){
			$radio_seleccionado=$_SESSION['c1p1'];
		echo '
			<script>
				$(document).ready(function(){	
						$("#'.$radio_seleccionado.'").attr("checked", "checked");
						var vUserId = $("input:radio[name=radio]:checked").val()
						$.post("verificar2.php", //enlaza a php 
						   { // envia valor seleccionado de radiobutton
							  valor:vUserId, 
							  },
						function(response,status){ // Required Callback Function
						 $("#respuesta").html(response);//"carga respuesta de php en div #respuesta
						});
						$("#forma1").find("input, textarea, button, select").attr("disabled","disabled");	
				});
			</script>
		';	
		}
	}	
	function poner_preguntas(){
	$num_aleatorio = rand(0,2);
	$id1=$num_aleatorio;
	$id2=$num_aleatorio+1;
	$id3=$num_aleatorio+2;
	$valores = array();
	//almacenamiento de preguntas
	$p1='	
				<div class="row" >
					<div class="col-lg-12 col-xs-12" >
						<input type="radio" name="radio" id="uno" value="uno" class="radio"> 
							<label for="uno">Heinrich Hertz</label>
							<img src="img/img1.png" style="width:20%; height:20%">
						</input>
					</div>
				</div>
				
			';
	$p2='
			<div class="row" >
					<div class="col-lg-12 col-xs-12" >
						<input type="radio" name="radio" id="dos" value="dos" class="radio"> 
							<label for="dos">Samuel Morse</label>
							<img src="img/img1.png" style="width:20%; height:20%">
						</input>
					</div>
			</div>
			';
	$p3='
			<div class="row" >
					<div class="col-lg-12 col-xs-12" >
						<input type="radio" name="radio" id="tres" value="tres" class="radio"> 
							<label for="tres">Pulitzer</label>
							<img src="img/img1.png" style="width:20%; height:20%">
						</input>
					</div>
			</div>
			';
	//asignar posiciones	
	
	 if ($num_aleatorio==0){
		array_push($valores,$p1);
		array_push($valores,$p2);
		array_push($valores,$p3);		
	}
	if ($num_aleatorio==1){
		array_push($valores,$p2);
		array_push($valores,$p1);
		array_push($valores,$p3);		
	}
	if ($num_aleatorio==2){
		array_push($valores,$p2);
		array_push($valores,$p3);
		array_push($valores,$p1);		
	}
		echo '
		<div class="col-md-12">
			<div class="col-xs-12 col-lg-12">
		'.$valores[0].'
			</div>
			<div class="col-xs-12 col-lg-12">
		'.$valores[1].'
			</div>
			<div class="col-xs-12 col-lg-12">
		'.$valores[2].'	
			</div>
		</div>
		
		';
	}
	?>
	
	
</body>
</html>


