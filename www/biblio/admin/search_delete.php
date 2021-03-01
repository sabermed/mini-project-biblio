<html>
<head>
	<title>
		GESTION DE BIBLIOTHEQUE
	</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="image/logo.jpg">
			<h1 style="color: white; margin-left: 10px;">GESTION DE BIBLIOTHEQUE</h1>
		</div>

			<nav>
				<ul>
					<li><a href="admin_index.php">ACCUEIL</a></li>
					<li><a href="addpro.php">AJOUTER_LIVRES</a></li>
					<li><a href="update.php">MISE_A_JOUR_LIVRES</a></li>
					<li><a href="delete.php">SUPPRIMER_LIVRES</a></li>
					<li><a href="panier.php">VOTRE_LIVRES</a></li>
					<li><a href="feedback.php">COMMENTAIRES</a></li>
					<li><a href="../utilisateur/student_index.php"><img src="image/login.png" />UTILISATEUR</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<br><br><br>
		<div id="main-nav">
				<center>
				<div id="search">
					<form action="search.php" method="GET">
						<input class="search-area" type="text" name="searcharea" placeholder="chercher votre livre">
						<button class="search-btn" type="submit" name="search"><img src="image/search.png"></button>
					</form>
				</div>
				</center>
		</div>
		<br><br><br>
		<ul>
			<?php include "function.php"; ?>
			<?php get_prod_search_sup(); ?>
		</ul>  
		<br><br><br><br><br><br>
		</section>
		<footer>
				<br>
			<h3 style="color:white;text-align: center;">Contact us through social media</h3><br>

			<div style="margin:0px 485px; width: 600px; height: 50px;">
				<ul>
				<li><a href="https://facebook.com" class="fa"><img src="image/fa.png"></a></li>
				<li><a href="https://instagram.com" class="fa"><img src="image/insta.png"></a></li>
				<li><a href="https://youtube.com" class="fa"><img src="image/you.png"></a></li>
				<li><a href="https://gmail.com" class="fa"><img src="image/gm.png"></a></li>
				</ul>
			</div>

			<br>
			<p style="color:white;text-align: center;">
				<br>
				Email:&nbsp; Online.library@gmail.com <br><br>
				Mobile:&nbsp; &nbsp; +21627******

			</p>
		</footer>

	</div>
</body>
</html>