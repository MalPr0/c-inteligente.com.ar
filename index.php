<?php
include 'vendor/autoload.php';
use PHPMailer;


function sendMail()
{
	foreach ($_POST as $key => $value) {$$key = $value;}
	if (empty($email) || empty($name) || empty($message)) {
		return "Por favor complete todos los campos.";
	}

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "no-reply@c-inteligente.com.ar";
	$mail->setFrom('no-reply@c-inteligente.com.ar', 'Contacto Web');
	$mail->addReplyTo($email, $name);
	$mail->addAddress('megui@c-inteligente.com.ar', 'Mariano G. Egui');
	$mail->Subject = "CI $name | " . substr($message, 0, 20) . "...";
	$mail->Body = $message;
	$mail->msgHTML = $message;
	$mail->AltBody = $message;

	if (!$mail->send()) {
		return "En este momento no pudimos enviar su mensaje, reintente mas tarde o contactenos por otro medio.";
	} else {
		return "Su mensaje fue enviado!";
	}
}
		
?>
<!DOCTYPE HTML>
<html>
<head>
	<title> CI | Comunicación Inteligente</title>
	<meta name="keywords" content="CI, Comunicación inteligente, C inteligente, c-inteligente, Comunicación, Inteligente, desarrollo, software, aplicaciones, aplicaciones web, diseño web, desarrollo de API Rest con estandares JsonApi y documentación.">
	<meta name="description" content="CI Comunicación inteligente, desarrollo de software y aplicaciones web, diseño web, aplicaciones cloud, sitios con trafico, API Rest, JsonApi.">
	<meta name="author" content="c-inteligente">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Sidebar -->
<section id="sidebar">
	<div class="inner">
		<nav>
			<ul>
				<li><a href="#intro">Bienvenido</a></li>
				<li><a href="#one">¿Quien somos?</a></li>
				<li><a href="#two">¿Qúe hacemos?</a></li>
				<li><a href="#three">Estar en contacto</a></li>
			</ul>
		</nav>
	</div>
</section>

<!-- Wrapper -->
<div id="wrapper">

	<!-- Intro -->
	<section id="intro" class="wrapper style1 fullscreen fade-up">
		<div class="inner">
			<div style="display: inline-block;">
				<h1>CI Comunicación Inteligente - Desarrollo de Software</h1>
				<h2>Comunicación Inteligente</h2>
				<p>Soluciones para usted y sus clientes<br />
					desarrollos de aplicaciones Cloud.</p>
				<ul class="actions">
					<li><a href="#one" class="button scrolly">Nosotros</a></li>
				</ul>
			</div>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style2 spotlights">
		<section>
			<a href="#" class="image"><img src="images/132.png" alt="" data-position="center center" /></a>
			<div class="content">
				<div class="inner">
					<h2>Iniciamos</h2>
					<p>Con compromisos ya asumidos formamos CI Comunicación Inteligente en 2008 con el objetivo de integrar aplicaciones web en negocios determinados de grandes clientes.<br>
						Estudiando el mercado, aprendiendo tecnologías desarrollamos una aplicación a medida, poco a poco nos fuimos profesionalizando y asumiendo nuevos retos.</p>
					<ul class="actions">
						<li><a href="#about" class="button scrolly">Mas ...</a></li>
					</ul>
				</div>
			</div>
		</section>
		<section id="about">
			<a href="#" class="image"><img src="images/555.gif" alt="" data-position="25% 25%" /></a>
			<div class="content">
				<div class="inner">
					<h2>¿Quienes somos?</h2>
					<p>Somos un grupo de Desarrolladores, SysAdmin, DevOps y Arquitectos de Software capacitados para brindar servicio a grandes proyectos</p>
					<ul class="actions">
						<li><a href="#two" class="button scrolly">¿Que hacemos?</a></li>
					</ul>
				</div>
			</div>
		</section>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style3 fade-up">
		<div class="inner">
			<h2>Soluciones Cloud</h2>
			<p>Desarrollamos aplicaciones Web 100% en la nube, con código de calidad, protección de datos y servidores, garantizamos estabilidad y disponibilidad, desarrollo de API y documentación para su distribución. Brindamos una solución a medida para sus ideas con la mejor calidad pensando en el futuro.</p>
			<div class="features">
				<section>
					<span class="icon major fa-code"></span>
					<h3>Calidad en el desarrollo</h3>
					<p>Aplicamos el uso de procesos de calidad en el desarrollo para garantizar una aplicación confiable.</p>
				</section>
				<section>
					<span class="icon major fa-lock"></span>
					<h3>Seguridad informática</h3>
					<p>Desarrollo con Frameworks seguros e implementación de técnicas de Etical Hacking en los servidores.</p>
				</section>
				<section>
					<span class="icon major fa-cogs"></span>
					<h3>Escalabilidad</h3>
					<p>Nuestro desarrollo contempla la posibilidad  que el producto crezca exponencial-mente en trafico y estructural-mente.</p>
				</section>
				<section>
					<span class="icon major fa-desktop"></span>
					<h3>Monitoreo</h3>
					<p>Monitoreo de performance, servicios y servidores aseguran el crecimiento del producto y la disponibilidad para los clientes.</p>
				</section>
				<section>
					<span class="icon major fa-codepen"></span>
					<h3>API Conectividad</h3>
					<p>Desarrollos API para integrar con servicios Web, Aplicaciones Mobile, clientes o socios estratégicos.</p>
				</section>
				<section>
					<span class="icon major fa-cloud"></span>
					<h3>Cloud</h3>
					<p>Los servicios Cloud garantizan disponibilidad y acceso desde cualquier lugar.</p>
				</section>
			</div>
			<ul class="actions">
				<li><a href="#three" class="button scrolly">Contactanos</a></li>
			</ul>
		</div>
	</section>

	<!-- Three -->
	<section id="three" class="wrapper style1 fade-up">
		<div class="inner">
			<h2>Contacto</h2>
			<?php echo $output = !empty($_POST)? '<p>' . sendMail() .'</p>' : ''; ?>
			<div class="split style1">
				<section>
					<form method="post" action="/">
						<div class="field half first">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Mensaje</label>
							<textarea name="message" id="message" rows="5"></textarea>
						</div>
						<ul class="actions">
							<li><button type="submit" class="button submit">Enviar mensaje</button></li>
						</ul>
					</form>
				</section>
				<section>
					<ul class="contact">
						<li>
							<h3>Email</h3>
							<a href="#">megui@c-inteligente.com.ar</a>
						</li>
						<li>
							<h3>Telefono</h3>
							<span>(011) 15-6883-4923</span>
						</li>
						<li>
							<h3>Social</h3>
							<ul class="icons">
								<!--li><a href="https://twitter.com/EguiMariano" class="fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/egui.mariano" class="fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/megui88" class="fa-instagram"><span class="label">Instagram</span></a></li-->
								<li><a href="https://github.com/megui88" class="fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="https://ar.linkedin.com/in/eguimariano" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
						</li>
					</ul>
				</section>
			</div>
		</div>
	</section>

</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
	<div class="inner">
		<ul class="menu">
			<li>&copy; 2008. All rights reserved.</li><li>c-inteligente.com.ar</li>
		</ul>
	</div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<!--script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-12079959-5', 'auto');
	ga('send', 'pageview');
</script-->
</body>
</html>
