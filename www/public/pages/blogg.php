<!doctype html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link href="../css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<header>
			<?php include("inc/header.php"); ?>
		</header>
		<!-- header -->

		<section id="leftColumn">
			<nav>
				<?php include("inc/meny.php"); ?>
			</nav>
			<aside>
				<?php include("inc/aside.php"); ?>
			</aside>
		</section>
		<!-- End leftColumn -->

		<main role="main">
			<section>
				<hgroup>
					<h1>Min blogg Nu</h1>
					<h2>I dag gör vi mallar</h2>
				</hgroup>
				<p>Lorem ipsum id duo autem qualisque, cu laoreet eleifend cum. Eu sea
					vidit altera civibus, harum deserunt argumentum ne vim. Eu paulo
					corpora appareat pro, brute everti iuvaret ne vis. Diam incorrupte
					voluptatibus cu vel, nam congue soluta praesent at.
				</p>
			</section>
		</main>
		<!-- End main -->

		<footer>
			<?php include("inc/footer.php"); ?>
		</footer>
		<!-- End footer -->
	</div>
	<!-- End wrapper -->
</body>

</html>