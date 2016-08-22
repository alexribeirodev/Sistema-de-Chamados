<?php
	
	$db = 'sicvigo';
	$host = 'localhost';
	$login = 'root';
	$senha = '';

	//CONEXÃO DO BANCO
    $con = mysqli_connect($host,$login,$senha,$db) or die ("Sem conexão com o servidor");
    if (mysqli_connect_errno()){
        echo "Falha de conexão com o MySQL: " . mysqli_connect_error();
    }

?>