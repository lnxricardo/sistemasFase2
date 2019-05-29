<?php 



try {

	$pdo = new PDO("mysql:dbname=crudpdo;host=localhost", 'ricardo', '123');

	
} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();	
}

/*INSERT*/

// 	$sql = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
// 	$sql->bindValue(":n", "Foo");
// 	$sql->bindValue(":t", "32 985160870");
// 	$sql->bindValue(":e", "solucionartec2gmail.com");
// 	$sql->execute();

// /*DELETE*/

// 	$sql = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
// 	$sql->bindValue(":id", 2);
// 	$sql->execute();


/*UPDATE*/

	// $sql = $pdo->prepare("UPDATE pessoa SET email = :email WHERE id = :id ");
	// $sql->bindValue(':email', 'contato@solus.com');
	// $sql->bindValue(':id', 1);
	// $sql->execute();
	
/*SELECT*/

	$sql = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
	$sql->bindValue(':id', 3);
	$sql->execute();

	$resultado = $sql->fetch(PDO::FETCH_ASSOC);

	foreach ($resultado as $key => $value) {
		echo $key.": ".$value.'<br>';
	}





















 ?>