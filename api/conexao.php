<?php

	//preparando cabeçalho HTTP - Verbos HTTP (get, post, delete, put)
	header('Access-Control-Allow-Origin: *:8100');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	header('Content-Type: application/json; charset=utf-8');
	

	//dados de acesso ao banco
	$banco = "wellington_ihelp";
	$host = "softkleen.com.br";
	$usuario = "alunos_ihelp";
	$senha = "!6Bcxn84";

	try {
		$pdo = new PDO("mysql:dbname=$banco;host=$host","$usuario","$senha");
	} catch (Exception $e) {
		echo "Erro ao conectar com o o banco".$e;
	}

?>