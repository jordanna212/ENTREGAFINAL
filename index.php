<!DOCTYPE html>
<html lang="es,en">


<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>De La Hoz Design</title>

		<!-- metadatos que explican la descripción del sitio -->
		<meta name="description" content="Portafolio de Jordanna De La Hoz, Estudiante de Diseño Integral PUC.">
		<meta name="author" content="De la hoz Design">
		<meta name="description" content="Portafolio">
		<meta name="image" content="https://pbs.twimg.com/media/DCu1nBRXcAIFb_x.png:large">
		<!-- Schema.org for Google -->
		<meta itemprop="name" content="De la hoz Design">
		<meta itemprop="description" content="Portafolio de Jordanna De La Hoz, Estudiante de Diseño Integral PUC.">
		<meta itemprop="image" content="https://pbs.twimg.com/media/DCu1nBRXcAIFb_x.png:large">
		<!-- Twitter -->
		<meta name="twitter:card" content="summary"> <!-- No reescribir card-->
		<meta name="twitter:title" content="De la hoz Design">
		<meta name="twitter:description" content="Portafolio de Jordanna De La Hoz, Estudiante de Diseño Integral PUC.">
		<meta name="twitter:image:src" content="https://pbs.twimg.com/media/DCu1nBRXcAIFb_x.png:large">
		<!-- Open Graph general (Facebook, Pinterest & Google+) -->
		<meta name="og:title" content="Portafolio">
		<meta name="og:description" content="Portafolio de Jordanna De La Hoz, Estudiante de Diseño Integral PUC.">
		<meta name="og:image" content="https://pbs.twimg.com/media/DCu1nBRXcAIFb_x.png:large">
		<meta name="og:url" content="https://pbs.twimg.com/media/DCu1nBRXcAIFb_x.png:large">
		<meta name="og:site_name" content="De La Hoz Design">
		<meta name="og:locale" content="es_CL">
		<meta name="og:type" content="website">

		<!-- inclusión css en html -->
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="color/default.css" rel="stylesheet">
		<!-- logo de la página en el navegador-->
		<link rel="icon" type="image/png" href="img/fotopeque2.png" >
		<!-- uso de los scripts -->
		<script src="js/p5.min.js"> </script>
		<script src="js/p5.dom.min.js"> </script>
		<script src="js/p5.sound.min.js"> </script>
</head>

<body>
<!-- navbar -->
<div class="navbar-wrapper">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Responsive navbar -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
				<h1 class="brand"><a href="index.php">Portafolio</a></h1>
				<!-- navigation -->
				<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
					<li><a title="team" href="#about">Sobre Mi</a></li>
					<li><a title="services" href="#services">Intereses</a></li>
					<li><a title="works" href="#works">Trabajos</a></li>
					<li><a title="blog" href="#blog">Blog</a></li>
					<li><a title="contact" href="#contact">Contacto</a></li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Header area -->
		<?php include('header.php');?>
		<!--?php include('carrusel.php');?-->

<!-- spacer section -->
<section class="spacer green">
<div class="container">
	<div class="row">
		<div class="span6 alignright flyLeft">
			<!-- AQUÍ VA LA PRIMERA CITA -->
			<blockquote class="large">
				 Lo único importante del diseño, es cómo se relaciona con la gente. <cite>Victor Papanek</cite>
			</blockquote>
		</div>
		<div class="span6 aligncenter fly">
			<i class="icon-coffee icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
<div class="container">
	<h4>¿Quién diseña?</h4>
	<div class="row">
			<div class="span4 offset1 flyIn">
				<div class="aligncenter">
						<!--  aquí va mi primera imagen -->
						<img class="team-thumb img-circle" src="img/team/img-20.jpg" alt="Imagen de jordanna de la hoz" />
					<h5> <strong>Jordanna De La Hoz  </strong> </h5>
					<h6> Estudiante de Diseño UC </h6>
				</div>
			</div>

			<div class="span5 offset1 flyIn">

				<div class="alignleft">

					<h1>Quiero acercar el diseño a las personas con soluciones simples pero creativas.</h1>
					<p>  ----------------------------------------------------------------------------</p>
					<h3> Creatividad + Innovación </h3>
					<?php print "Solo se consigue con perseverancia";?>
					<p> -----------------------------------------------------------------------------  </p>
					<h6>Desde que entré a diseño, he trabajdo con distintas Instituciones: 3M; GAM; ZOO de Stgo; Municipalidades</h6> <h6>de Peñalolén e Independencia. </h6>
					<p> -----------------------------------------------------------------------------  </p>
				</div>
			</div>

					<div class="aligncenter">
			 				<div class="row offset1 flyIn">
										<div class="span8">
							<!--  aquí va mi segunda imagen -->



								 </div>
							</div>


					</div>

</div> <!-- cierre row-->

<!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section orange">
<div class="container">
	<h4>Intereses</h4>
	<!-- Four columns -->
	<div class="row">
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="img/icons/laptop.png" alt="web" />
				<h2>WEB</h2>
				<p>
					 Tengo conocimientos en HTML, CSS, JS y PHP. Con ganas de aprender Wordpress.
				</p>
			</div>
		</div>
		<div class="span3 animated flyIn">
			<div class="service-box">
				<img src="img/icons/lab.png" alt="Modelado3d" />
				<h2> Modelado 3D</h2>
				<p>
					 Los programas con los que modelo son Rhinoceros, Keyshot5 y 123Make.
				</p>
			</div>
		</div>
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="img/icons/camera.png" alt="fotografia" />
				<h2>Fotografía</h2>
				<p>
				Tengo equipo fotográfico y manejo programas de edición como Photoshop e Indesign.
				</p>
			</div>
		</div>
		<div class="span3 animated-slow flyIn">
			<div class="service-box">
				<img src="img/icons/basket.png" alt="ilustraciones vectorizadas" />
				<h2>Illustraciones Vectorizadas</h2>
				<p>
					 La gran mayoria de mis dibujos los realizo con la Wacom a través de Illustrator.
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<!-- end section: services -->
<!-- section: works -->

<!-- barra que separa los trabajos según su tópico-->
<section id="works" class="section">
<div class="container clearfix">
	<h4>Trabajos</h4>
	<!-- portfolio filter -->
	<div class="row">
		<div id="filters" class="span12">
			<ul class="clearfix">
				<li><a href="all" data-filter="*" class="active">
				<h5>Todo</h5>
				</a></li>
				<li><a href="#" data-filter=".web">
				<h5>Branding</h5>
				</a></li>
				<li><a href="#" data-filter=".print">
				<h5>Modelado 3D</h5>
				</a></li>
				<li><a href="#" data-filter=".design">
				<h5>Fotografía</h5>
				</a></li>
				<li><a href="#" data-filter=".photography">
				<h5>Illustraciones Vectorizadas</h5>
				</a></li>
			</ul>
		</div>
		<!-- END PORTFOLIO FILTERING -->
	</div>

<?php include('work.php');?>

</section>
<!-- spacer section -->
<section class="spacer bg3">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyLeft">
			<!-- AQUÍ VA LA SEGUNDA CITA -->
			<blockquote class="large">
				 Actuar sin diseñar es lo mismo que correr sin aprender a caminar <cite> Jordanna de la Hoz </cite>
			</blockquote>
		</div>
		<div class="span12 aligncenter flyRight">
			<i class="icon-rocket icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section de blog -->
<section id="blog" class="section">
<div class="container">
	<h4>Blog</h4>
	<!-- Three columns -->

	<div class="row">
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="img/blog/img1.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">Enero|15|2017</span>
					<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#">¿Qué hay detrás de un desfile de modas?</a></strong></h5>
					<p>
						Esta claro que si bien fijan un estandar al momento de solicitar modelos para un desfile de moda,
						una de las primeras teorias que se me viene a la cabeza más allá de la fama que pueden generar,
						existe algo que traspasa lo que se ve en televisión, ¿ porqué entonces siempre eligen modelos s y xs? &hellip;
					</p>
					<a href="http://designthat.webnode.cl/l/%c2%bfque-hay-detras-de-un-desfile/" class="more">Leer más</a>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="img/blog/img2.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">Enero|15|2017</span>
					<span class="tags"><a href="#">Design</a>, <a href="#">Tips</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#">¿Cómo saber comparar un buen diseño?</a></strong></h5>
					<p>
						1) Si el diseño es único, hecho a mano, su valor se vende al triple, por eso se ve en mercados independientes diseños que uno consideraria sus precios alto.
						2) Si el producto de diseño es importado, deben serciorarse de que sea original, sino su valor no tiene sentido nuevamente.
						3) Cuantas más personas compren el producto, menos original se vuelve, por lo tanto pueden hablar directamente con la persona que vende el producto, para comprobar su procedencia.  &hellip;
					</p>
					<a href="http://designthat.webnode.cl/l/como-comprar-diseno/" class="more">Leer más</a>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="img/blog/img3.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">Enero|11|2017 </span>
					<span class="tags"><a href="#">Design</a>, <a href="#">Tips</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="http://designthat.webnode.cl/l/principios-del-diseno/">El diseñador que llevamos dentro</a></strong></h5>
					<p>
						Toda persona debe saber marcar su estilo, ya que es parte de la identidad de cada uno, el diseño textil es tu impronta, es tu primera carta que presentas al mundo. Si no preguntale a tu conocidos la primera vez que vieron un conjunto para ti mientras estabas aún en el vientre. &hellip;
					</p>
					<a href="http://designthat.webnode.cl/l/principios-del-diseno/" class="more">Leer más</a>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="img/blog/img4.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">Junio|06|2017</span>
					<span class="tags"><a href="#"> News</a>, <a href="#">Tutorial</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#">¿Qué sería mi vida sin el diseño?</a></strong></h5>
					<p>
						Ya me encuentro en la mitad de mi carrera y muchas veces me preguntan cuál es el
						prospecto que tengo al salir. La verdad es que yo siempre me lo cuestiono y
						muchas veces pienso sobre que voy a hacer cuando termine mi carrera.
						¿Abrir mi tienda y ser mi propia jefa?, ¿consultora en diseño integral?,
						tendré bajo mi manga un cartón con el cuál me abrirán muchas puertas, pero que pasa si el cuento desde un inicio ¿fue siempre una mentira?. Lo cierto es que en Chile, el diseño siempre lo han desvalorizado. &hellip;
					</p>
					<a href="http://designthat.webnode.cl/l/la-buena-nueva/" class="more">Leer más</a>
				</div>
			</div>
		</div>
	</div>
	<div class="blankdivider30"></div>

</div>
</section>

<!-- end spacer section -->
<!-- section: contact -->



		<section id="contact" class="section green">
		<div class="container">
			<div class="aligncenter">
			<h4>Contáctame</h4>
			<p>¿Necesitas cotizar eficiencia, calidad y responsabilidad? Nos pondremos en contacto dentro de las próximas horas. </p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span18">
					<div class="cform" id="contact-form">

				    	<?php include('contact.php');?>

					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</div>
</section>


<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

<?php include('footer.php');?>
