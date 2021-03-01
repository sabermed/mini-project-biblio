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
		<br><br><br><br><br><br>
		<form method="POST" action="retour.php">

		<?php
			mysql_connect("localhost","root","");
			mysql_select_db("biblio");
			$row="select * from panier";
			$rowpanier=mysql_query($row);
			if(mysql_num_rows($rowpanier) > 0){
				echo '<table border="1">';
				echo "<tr>
							<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>Titre</font></h3></td>
							<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>Date Retour</font></h3></td>
							<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'></font></h3></td>
					  </tr>";
				while($row=mysql_fetch_array($rowpanier)){
					$r=$row['id'];
					$d=$row['datera'];
					$titre="select * from livres where id='$r'";
					$res=mysql_query($titre);
					while($re=mysql_fetch_array($res)){
						echo '<table border="1">';
						echo "<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>".$re['titre']."</font></h3></td>";
						echo "<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>".$d."</font></h3></td>";
						echo "<td style='height: 70px; background: #125487;'><a href='retour.php'><button value='";
						echo $row['id'];
						echo"' name='id'><h3>Retour livre</h3></button></a></td>";
						echo "<tr>";
					}
				}
				echo "</table>";

			}else{
				echo '<center><font color="#d2e4e4" size="9">Aucun livre vous été commander</font></center>';
			}
		?>
		</form>
		<br><br><br><br><br><br>
		<section>
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