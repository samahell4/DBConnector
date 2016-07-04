<?php
require('config_logdb.php');
$hote = '';
$dataBaseName = '';
$DBuser = '';
$mdpUser = '';

try
{
	$bdd = new PDO('mysql:host='.$hote'; dbname='.dataBaseName, $DBuser, $mdpUser);
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
	echo($e);
}
?>
