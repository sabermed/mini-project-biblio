<html>
<head>
	<title>
		GESTION DE BIBLIOTHEQUE
	</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
    	.wrapper{
			height: 900px;
			width: 100%;
		}
		section{
			height: 900px;
			width: 100%;
		}
		.wrap
    	{
    		padding: 10px;
    		margin: -20px auto;
    		width:900px;
    		height: 600px;
    		background-color: black;
    		opacity: .8;
    		color: white;
    	}
    	.form-control
    	{
    		height: 70px;
    		width: 60%;
			background: white;
			border-radius: 6px;
			display: block;
			width: 100%;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    	}
		.btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open>.dropdown-toggle.btn-default.focus, .open>.dropdown-toggle.btn-default:focus, .open>.dropdown-toggle.btn-default:hover {
			color: #333;
			background-color: #d4d4d4;
			border-color: #8c8c8c;
		}
		.btn-default.active, .btn-default:active, .open>.dropdown-toggle.btn-default {
			background-image: none;
		}
		.btn-default.active, .btn-default:active, .open>.dropdown-toggle.btn-default {
			color: #333;
			background-color: #e6e6e6;
			border-color: #adadad;
		}
		.btn-default:hover {
			color: #333;
			background-color: #e6e6e6;
			border-color: #adadad;
		}
		.btn.active, .btn:active {
			background-image: none;
			outline: 0;
			-webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
			box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
		}
		.btn.focus, .btn:focus, .btn:hover {
			color: #333;
			text-decoration: none;
		}
		button, html input[type=button], input[type=reset], input[type=submit] {
			-webkit-appearance: button;
			cursor: pointer;
		}
		.btn-default {
			color: #333;
			background-color: #fff;
			border-color: #ccc;
		}
		.btn {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		button, input, select, textarea {
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
		}
		input {
			line-height: normal;
		}
		button, input, optgroup, select, textarea {
			margin: 0;
			font: inherit;
			color: inherit;
		}
		* {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		input:not([type="image" i]), textarea {
			box-sizing: border-box;
		}
		input[type="button" i]:active, input[type="submit" i]:active, input[type="reset" i]:active, input[type="file" i]:active::-webkit-file-upload-button, button:active {
			border-style: inset;
		}
		input[type="button" i], input[type="submit" i], input[type="reset" i], input[type="file" i]::-webkit-file-upload-button, button {
			padding: 1px 6px;
		}
		input[type="button" i], input[type="submit" i], input[type="reset" i], input[type="file" i]::-webkit-file-upload-button, button {
			align-items: flex-start;
			text-align: center;
			cursor: default;
			color: buttontext;
			background-color: buttonface;
			box-sizing: border-box;
			padding: 2px 6px 3px;
			border-width: 2px;
			border-style: outset;
			border-color: buttonface;
			border-image: initial;
		}
		input[type="button" i], input[type="submit" i], input[type="reset" i] {
			-webkit-appearance: push-button;
			user-select: none;
			white-space: pre;
		}
		input {
			padding: 1px 0px;
		}
		input {
			-webkit-appearance: textfield;
			background-color: white;
			-webkit-rtl-ordering: logical;
			cursor: text;
			padding: 1px;
			border-width: 2px;
			border-style: inset;
			border-color: initial;
			border-image: initial;
		}
		input, textarea, select, button {
			text-rendering: auto;
			color: initial;
			letter-spacing: normal;
			word-spacing: normal;
			text-transform: none;
			text-indent: 0px;
			text-shadow: none;
			display: inline-block;
			text-align: start;
			margin: 0em;
			font: 400 13.3333px Arial;
		}
		input, textarea, select, button, meter, progress {
			-webkit-writing-mode: horizontal-tb !important;
		}

		:after, :before {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		:after, :before {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
    	.scroll
    	{
    		width: 100%;
    		height: 300px;
    		overflow: auto;
    	}
		.table-bordered {
			border: 1px solid #ddd;
		}
		.table {
			width: 100%;
			max-width: 100%;
			margin-bottom: 20px;
		}
		table {
			background-color: transparent;
		}
		table {
			border-spacing: 0;
			border-collapse: collapse;
		}
		* {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		table {
			white-space: normal;
			line-height: normal;
			font-weight: normal;
			font-size: medium;
			font-style: normal;
			color: -internal-quirk-inherit;
			text-align: start;
			font-variant: normal;
		}
		table {
			display: table;
			border-collapse: separate;
			border-spacing: 2px;
			border-color: grey;
		}
		tbody {
			display: table-row-group;
			vertical-align: middle;
			border-color: inherit;
		}
		tr {
			display: table-row;
			vertical-align: inherit;
			border-color: inherit;
		}
		.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
			border: 1px solid #ddd;
		}
		.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			padding: 8px;
			line-height: 1.42857143;
			vertical-align: top;
			border-top: 1px solid #ddd;
		}
		td, th {
			padding: 0;
		}
		td, th {
			display: table-cell;
			vertical-align: inherit;
		}
    </style>
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
			<div class="wrap">
				<h4>Si vous avez des suggestions ou des questions, veuillez commenter ci-dessous.</h4><br>
					<form style="" action="" method="post">
							<input class="form-control" type="text" name="comment" placeholder="Ecrire Quelque Chose..."><br><br>	
							<input class="btn btn-default" type="submit" name="submit" value="Commenter" style="border-radius: 6px; width: 100px; height: 35px; cursor: pointer; color: #383232d9; font-size: inherit; background: white;">		
					</form>
					
				<br><br>
					<div class="scroll">
						<?php
							mysql_connect("localhost","root","");
							mysql_select_db("biblio");
							if(isset($_POST['submit']))
							{
								$sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
								if(mysql_query($sql))
								{
									$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
									$res=mysql_query($q);

									echo "<table class='table table-bordered'>";
									while ($row=mysql_fetch_array($res)) 
									{
										echo "<tr>";
											echo "<td style='color: white;'>"; echo $row['comment']; echo "</td>";
										echo "</tr>";
									}
								}

							}

							else
							{
								$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
									$res=mysql_query($q);

									echo "<table class='table table-bordered'>";
									while ($row=mysql_fetch_array($res)) 
									{
										echo "<tr>";
											echo "<td style='color: white;'>"; echo $row['comment']; echo "</td>";
										echo "</tr>";
									}
							}
						?>
					</div>
			</div>
		<br><br><br><br><br><br>
		</section>
	</div>
</body>
</html>
