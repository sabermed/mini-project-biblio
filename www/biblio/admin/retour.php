<?php

$id=$_POST['id'];

mysql_connect("localhost","root","");
mysql_select_db("biblio");

$req="update livres set dispo='1' where id='$id'";
$res=mysql_query($req);

$req="delete from panier where id='$id'";
$res=mysql_query($req);

$req="delete from panier_user where id='$id'";
$res=mysql_query($req);

echo '<meta http-equiv="refresh" content="2; url=\'panier.php\'">';

echo "<script>alert ('La retour de livre a ete effectue');</script>";

?>