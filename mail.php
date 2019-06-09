<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Strata by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
					<h1>I am <strong>Paweł Tomaszewski</strong>, Master of Science in Mechanical Engineering
					and senior mechanical designer with over 6 years of experience.
					
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
						<?php
$to      = 'paweltomasz01@gmail.com';
$name    = $_POST['name'];
$email   = $_POST['mail'];
$subject = 'Nowy e-mail dla PT-Industry ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';
mail($to, $subject, $message, $headers);
echo '<h1>The message received</h1>';
?>
								
							</div>
						</div>
						<nav>
							<ul>
								<li><a href=#>Powrót</a></li>
						
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>

						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</section>



		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="https://www.linkedin.com/in/pawe%C5%82-tomaszewski-konstruktor/" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="paweltomasz01@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php
$to      = 'paweltomasz01@gmail.com';
$name    = $_POST['name'];
$email   = $_POST['mail'];
$subject = 'Nowy e-mail dla PT-Industry ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';
mail($to, $subject, $message, $headers);
echo '<h1>Wiadomość wysłana :)</h1>';
?>