<?php
$req=mysql_connect("localhost","root","");
$res=mysql_select_db("biblio");
//function produit

	function get_pro(){
		$req=mysql_connect("localhost","root","");
		$res=mysql_select_db("biblio");
		$get_pro="select * from livres";
		$run_pro=mysql_query($get_pro);
		$dir_name=dirname(__FILE__)."/image/";
		
			while($row_pro=mysql_fetch_array($run_pro)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_pro['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro['titre'];
								echo"</p><br>
								<p style='color:#fff;'>price: $";
								echo $row_pro['price'];
								echo "/7 jours</p><br><br><br><br>
								<a href='admin_index.php?add_panier=";
								echo $row_pro['id'];
								echo "'><button>Commande</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}
	
//function search


function get_prod_search(){
	$req=mysql_connect("localhost","root","");
	$res=mysql_select_db("biblio");
	if(isset($_GET['search'])){
		$searcharea=$_GET['searcharea'];
		$get_prod_search="select * from livres where p_key_word like '$searcharea'";
		$run_prod_search=mysql_query($get_prod_search);
		if(mysql_num_rows($run_prod_search) > 0){
			while($row_prod_search=mysql_fetch_array($run_prod_search)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['titre'];
								echo"</p><br>
								<p style='color:#fff;'>price: $";
								echo $row_prod_search['price'];
								echo "/7 jours</p><br><br><br><br>
								<a href='admin_index.php?add_panier=";
								echo $row_prod_search['id'];
								echo "'><button>Commande</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		}else{
			echo "<div class='c'>&nbsp;&nbsp;</div>
			<div class='error'><p style='color:#fff;font-weight:bold;text-align:center; width:1200px;'>Aucun livres de se nom</p></div>";
		}
	}
}

//function search update


function get_prod_search_update(){
	$req=mysql_connect("localhost","root","");
	$res=mysql_select_db("biblio");
	if(isset($_GET['search'])){
		$searcharea=$_GET['searcharea'];
		$get_prod_search="select * from livres where p_key_word like '$searcharea'";
		$run_prod_search=mysql_query($get_prod_search);
		if(mysql_num_rows($run_prod_search) > 0){
			while($row_prod_search=mysql_fetch_array($run_prod_search)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['titre'];
								echo"</p><br>
								<p style='color:#fff;'>price: $";
								echo $row_prod_search['price'];
								echo "/7 jours</p><br><br><br><br>";
								echo "<a href='mise-a-jour-livres.php?update=";
								echo $row_prod_search['id'];
								echo "'><button>mise a jour</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		}else{
			echo "<div class='c'>&nbsp;&nbsp;</div>
			<div class='error'><p style='color:#fff;font-weight:bold;text-align:center; width:1200px;'>Aucun livres de se nom</p></div>";
		}
	}
}

//function search supprimer


function get_prod_search_sup(){
	$req=mysql_connect("localhost","root","");
	$res=mysql_select_db("biblio");
	if(isset($_GET['search'])){
		$searcharea=$_GET['searcharea'];
		$get_prod_search="select * from livres where p_key_word like '$searcharea'";
		$run_prod_search=mysql_query($get_prod_search);
		if(mysql_num_rows($run_prod_search) > 0){
			while($row_prod_search=mysql_fetch_array($run_prod_search)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>
								<a href='supprimer.php?delete=";
								echo $row_prod_search['id'];
								echo "'><img src='image/delete.png' style='width: 30;float: right;'></a>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['titre'];
								echo"</p><br>
								<p style='color:#fff;'>price: $";
								echo $row_prod_search['price'];
								echo "/7 jours</p>";
					echo "</div>
						</div>
					</div>
			";
			}
		}else{
			echo "<div class='c'>&nbsp;&nbsp;</div>
			<div class='error'><p style='color:#fff;font-weight:bold;text-align:center; width:1200px;'>Aucun livres de se nom</p></div>";
		}
	}
}

//function update
function get_pro_update(){
		$req=mysql_connect("localhost","root","");
		$res=mysql_select_db("biblio");
		$get_pro_up="select * from livres";
		$run_pro_up=mysql_query($get_pro_up);
		
			while($row_pro_up=mysql_fetch_array($run_pro_up)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_pro_up['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro_up['titre'];
								echo"</p><br>
								<p style='color:#fff;'>price: $";
								echo $row_pro_up['price'];
								echo "/7 jours</p><br><br><br><br>";
								echo "<a href='mise-a-jour-livres.php?update=";
								echo $row_pro_up['id'];
								echo "'><button>mise a jour</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}

//function supprimer
function get_pro_sup(){
		$req=mysql_connect("localhost","root","");
		$res=mysql_select_db("biblio");
		$get_pro_sup="select * from livres";
		$run_pro_sup=mysql_query($get_pro_sup);
		
			while($row_pro_sup=mysql_fetch_array($run_pro_sup)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_pro_sup['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>
								<a href='supprimer.php?delete=";
								echo $row_pro_sup['id'];
								echo "'><img src='image/delete.png' style='width: 30;float: right;'></a>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro_sup['titre'];
								echo"</p><br>
								<p style='color:#fff;'>price: $";
								echo $row_pro_sup['price'];
								echo "/7 jours</p>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}


//panier function

function panier(){
	$req=mysql_connect("localhost","root","");
	$res=mysql_select_db("biblio");
	if(isset($_GET['add_panier'])){
		$pro_id=$_GET['add_panier'];
		$req="select dispo from livres where id='$pro_id'";
		$res=mysql_query($req);
		if($res==0){
			echo "<script>alert('La livre ne pas disponible pour le moment');</script>";
		}else{
			$get_panier="select * from panier where id='$pro_id'";
			$run_panier=mysql_query($get_panier);
			
			if(mysql_num_rows($run_panier) > 0){
				echo "<script>alert('La livre ne pas disponible pour le moment');</script>";
			}else{
				$now = date('Y-m-d');
				$start_date = strtotime($now);
				$end_date = strtotime("+7 day", $start_date);
				$datera=date('Y-m-d', $end_date);
				$insert_panier="insert into panier values('$pro_id','$datera')";
				$run_i_panier=mysql_query($insert_panier);
				$req="update livres set dispo='0' where id='$pro_id'";
				$res=mysql_query($req);
					if(isset($run_i_panier)){
						echo "<script>alert('La commande a ete effectue avec succes');</script>";
						echo '<meta http-equiv="refresh" content="2; url=\'admin_index.php\'">';
					}
			}
		}
	}
}
?>