<?php 
	require_once("connection.php");

	// var_dump($_POST);
	// $nome  = $_POST['nome'] . ' ' . $_POST['sobrenome']; 
	if(isset($_POST['nome']) || $_POST['nome'] != '') {
		$nome  = $_POST['nome'];
	} else {
		$nome  = $_POST['nome2'];
	}
	
	if(isset($_POST['email']) || $_POST['email'] != '') {
		$email  = $_POST['email'];
	} else {
		$email  = $_POST['email2'];
	}
	
	 
	$ipaddress = $_POST['ipaddress'];
	
	$query = "INSERT INTO leads (nome, email, ipaddress, created_at, updated_at)"; 
	$query .= " values ('" . $nome . "','" . $email . "','" . $ipaddress . "','" . date('Y-m-d H:i:s') . "','" . date('Y-m-d H:i:s') . "')";

	$verify_connection = mysql_query($query, $link);
	// var_dump($verify_connection);

	if(!$verify_connection) {
		die('Invalid query: ' . mysql_error());
	}

	mysql_close();
	// echo "Inserido com sucesso";

	if(isset($_POST['nome']) || $_POST['nome'] != '') {
		header("Location: https://quiz.tryinteract.com/#/59d3a7361a9c5a00125ba19c");
	}

?>