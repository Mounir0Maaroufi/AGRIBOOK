<?php		
	try {
	
$host = 'localhoste.database.windows.net';
$username = 'route';
$password = 'Roooooooot@';
$db_name = 'gestion';

	$con = new mysqli($host, $username, $password, $dbname);
	
		
	   
		
	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
		
		//die('Erreur : impossible de se connecter à la base de donnée');
	}	
?>