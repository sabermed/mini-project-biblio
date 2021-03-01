<?php 	
	
	//post value
	$titre=@$_POST['titre'];
	$price=@$_POST['price'];
	$dir_name=dirname(__FILE__)."/image/";
	$img=@$_FILES['img']['name'];
	$img_type=@$_FILES['img']['type'];
	$img_size=@$_FILES['img']['size'];
	$img_error=@$_FILES['img']['error'];
	$img_tmp=@$_FILES['img']['tmp_name'];
	$p_key_word=@$_POST['p_key_word'];
	if(!(empty($titre) || empty($price) || empty($img) || empty($p_key_word))){
	//connexion
	
	$req=mysql_connect("localhost","root","");
	$res=mysql_select_db("biblio");
	
	//move upload img
	
		move_uploaded_file($img_tmp,$dir_name.$img);
	
	//insert pro
		$insert_pro="insert into livres(titre,price,img,p_key_word)
		values('$titre','$price','$img','$p_key_word')";
		$run_pro=mysql_query($insert_pro);
		echo '<meta http-equiv="refresh" content="2; url=\'addpro.php\'">';	
		echo "<script>alert ('L'ajout est termine avec success');</script>";
	}	
?>	

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
		<br><br>
		<div class="log_img">
		   <br>
		   
			<div class="box1">
				<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">GESTION DE BIBLIOTHEQUE</h1><br>
				<h1 style="text-align: center; font-size: 25px;">Ajout d'un livre</h1><br>
				<form name="f" action="addpro.php" method="POST" enctype="multipart/form-data">
					<div class="f">
					<p style="color: white;">Titre de livre:</p>
					<input type="text" name="titre" placeholder="Titre de livre" required="" style="height:40px;" /><br><br>
					<p style="color: white;">price:</p>
					<input type="number" name="price" placeholder="price" required="" style="height:40px;" /><br><br>
					<p style="color: white;">photo:</p>
					<input type="file" name="img" required="" style="height:40px;" /><br>
					<p style="color: white;">Mot de recherche(exemple : Titre de livre):</p>
					<input type="text" name="p_key_word" placeholder="Mot de recherche" required="" style="height:40px;" /><br><br>
					<input class="submit" type="submit" name="addpro" value="Ajouter livre" onclick="verif();" style="height: 40px;border-radius: 0px;border: 0px;font-size: larger;" />
					</div>
				</form>
			</div>
		  </div>
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