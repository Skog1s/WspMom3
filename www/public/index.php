<!doctype html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link rel="icon" type="image/x-icon" href="bilder/favicon.ico">
	<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<header>
			<?php include("inc/header.php"); ?>
		</header>
		<!-- header -->

		<section id="leftColumn">
			<aside>
				<?php include("inc/aside.php"); ?>
			</aside>
		</section>
		<!-- End leftColumn -->

		<main role="main">
			<section>
				<hgroup>
					<h1>Logga In</h1>
				</hgroup>
			</section>
			<section>
				<form method="post">
					Username: <input type="text" name="username" size="20" /> <br>
					Password: <input type="password" name="password" size="20" /> <br>
					<input type="submit" value="Submit" name="login" />

				</form>
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