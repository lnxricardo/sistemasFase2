<?php

require 'environment.php';

$config = array();

if(environment == 'development'){
	define("BASE_URL", "http://curso.solus/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'ricardo';
	$config['dbpass'] = '123';
	

}else{
	define("BASE_URL", "http://curso.solus/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'ricardo';
	$config['dbpass'] = '123';
}


global $db;
try {
	$db = new PDO("mysql:dbname".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	// echo 'ok';
	
} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();
	exit;
	
}