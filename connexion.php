<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="cs.css">
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("marvelp");

$nom=$_POST['t1'];
$mp=$_POST['t2'];

$req="select * from membre where (login='$nom' and mp='$mp') ";
$res=mysql_query($req);
if(mysql_num_rows($res)>0)
	{  echo" <a href=contenu.html>Contenu </a>";}

else
	{ echo "wordpasse or Login  is not valide <br> <a href=connexion.html> Retour de verfier</a>";}
?>
</body>
</html>