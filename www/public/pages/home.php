<!doctype html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link rel="icon" type="image/x-icon" href="bilder/favicon.ico">
	<link href="../css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<header>
			<?php include("../inc/header.php"); ?>
		</header>
		<!-- header -->

		<section id="leftColumn">
			<nav>
				<?php include("../inc/meny.php"); ?>
			</nav>
			<aside>
				<?php include("../inc/aside.php"); ?>
			</aside>
		</section>
		<!-- End leftColumn -->

		<main role="main">
			<section>
				<hgroup>
					<h1>Välkommen till Webbserverprogrammering 1</h1>
					<h2>Moment 3</h2>
				</hgroup>

				<p>Min sida</p>
			</section>
			<?php
			include("../inc/counter.php");
			$page = "start";
			if(isset($_GET['page'])) {
				$page = $_GET['page'];

				switch($page) {
					case 'blogg': include('/pages/blogg.php');
					break;
					case 'bilder': include('/pages/bilder.php');
					break;
					case 'kontakt': include('/pages/kontakt.php');
					break;
					default: include('../pages/home.php');
			
				}

			}
			
			
			
			?>

			<form method="post" action="/pages/kontakt.php">
				<label>Namn</label>
				<br>
				<input type="text"  name="name">
				<br>
				<input type="submit" value="Skicka">

			</form>

		</main>
		<!-- End main -->

		<footer>
			<?php include("../inc/footer.php"); ?>
		</footer>
		<!-- End footer -->
	</div>
	<!-- End wrapper -->
</body>

</html>