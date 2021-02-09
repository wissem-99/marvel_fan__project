<?php

mysql_connect("localhost","root","");
mysql_select_db("marvelp");

$nom=$_POST['t1'];
$fn=$_POST['t2'];
$age=$_POST['t3'];
$em=$_POST['t4'];
$log=$_POST['t5'];
$mp=$_POST['t6'];

$req="select * from membre where login='$log' and mot_passe='$mp' ";
$res=mysql_query($req);
$nb=mysql_num_rows($res);
if ($nb>0)
 {echo("membre deja existe ");}
else
{
$req="insert into membre values ('$nom','$fn','$age','$em','$log','$mp')";
$res=mysql_query($req);
if (mysql_affected_rows()>0)
{ echo ("membre ajout avec success");}
else 
{ echo("echec");}
}
?>