<?php
	require_once("security.php");
?>
<?php
try {
	$strConnection = 'mysql:host=localhost;dbname=';// la chaine de connexion tu mets le nom de la bdd après dbname=...
	$pdo = new PDO ($strConnection, 'root', '');// ca, c'est pour creer la connexion avec ton user name et ton mot de pass
}
Catch (PDOExpection $e) {
	$msg = 'ERREUR PDO dans ' . $e->getMessage();//si ereur il va nous recupperer la variable e qui = à erreur
	die ($msg);
}
?>