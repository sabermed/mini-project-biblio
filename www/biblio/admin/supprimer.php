<?php	
	$id=$_GET['delete'];
	
	$req=mysql_connect("localhost","root","");
	$res=mysql_select_db("biblio");
	
	$req="delete from livres where id='$id'";
	$res=mysql_query($req);
	echo '<meta http-equiv="refresh" content="2; url=\'delete.php\'">';
	echo "<script>alert ('La supprimission est termine avec success');</script>";	
?>