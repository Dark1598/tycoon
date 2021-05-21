<?php

	include_once('conexao.php');
	$postjon = json_decode(file_get_contents('php://input'),true);

	// Requisição Login 
	if ($postjon['req'] == 'login') {
		$query = $pdo -> query("SELECT * FROM cliente WHERE email = '$postjon[email]'and senha = '$postjon[senha]'");
		$resultado = $query -> fetchAll(PDO::FETCH_ASSOC);
		for ($i=0; $i < count($resultado); $i++) { 
			foreach ($resultado[$i] as $key => $value) {
				$dados = array(
					'id' => $resultado[$i]['id'],
					'nome' => $resultado[$i]['nome'],
					'email' => $resultado[$i]['email'],
					'senha' => $resultado[$i]['senha'],
					'nivel' => $resultado[$i]['nivel']
				);
			}
		}
		if (count($resultado) > 0) {
			var_dump($resultado);
			$resutado_para = json_encode(array('success'=>true, 'result'=>$dados));
		}
		else {
			$resutado_para = json_encode(array('success'=>false, 'msg'=>'Dados incorretos'));
		}
		echo $resutado_para;
	}

	// --************ CRUD USUARIOS / TRABALHADORES ************--

	// Requisição Adicionar Usuario
	else if ($postjon['req'] == 'register-user') {
		$query = $pdo->prepare("INSERT INTO cliente (nome,senha,email,nivel)
			VALUES(nome = :nome, senha = :senha, email = :email, nivel = :nivel);");

		$query->bindValue(':nome', $postjon['nome']);
		$query->bindValue(':senha', md5($postjon['senha']));
		$query->bindValue(':email', $postjon['email']);
		$query->bindValue(':nivel', $postjon['nivel']);
		$query->execute();

		$id = $pdo->lastInsertId();
		
		if ($query) {
			$res = json_encode(array('success' => true, 'id'=>$id));			
		}else{
			$res = json_encode(array('success' => false));
		}
		echo $res;		
		
	}

	// Requisição Registrar Trabalhador
	else if ($postjon['req'] == 'register-worker') {
		$query = $pdo -> prepare("INSERT INTO trabalhador (nome,email,senha,cep,cpf,celular) 
			VALUES(nome = :nome, email = :email, senha = :senha, cep = :cep, cpf = :cpf, celular =:celular);");

		$query->bindValue(':nome', $postjon['nome']);
		$query->bindValue(':email', $postjon['email']);
		$query->bindValue(':senha', md5($postjon['senha']));
		$query->bindValue(':cep', $postjon['cep']);
		$query->bindValue(':cpf', $postjon['cpf']);
		$query->bindValue(':celular', $postjon['celular']);
		$query->execute();

		$id = $pdo->lastInsertId();

		if ($query) {
			$res = json_encode(array('success' => true, 'id'=>$id));
		}else{		
			$res = json_encode(array('success' =>false));
		}
		echo $res;
		
	}
	
	// Requisição Alterar configuraçoes de usuario
	else if ($postjon['req'] == 'editar-user') {
		$query = $pdo -> prepare("UPDATE cliente SET email = :email, senha = :senha WHERE id = :id");

		$query->bindValue(':id', $postjon['id']);
		$query->bindValue(':email', $postjon['email']);
		$query->bindValue(':senha', md5($postjon['senha']));
		$query->execute();

		if ($query) {
			$result = json_encode(array('success'=>true));
		}else{
			$result = json_encode(array('success'=>false, 'result'=> 0));
		}
		echo $result;
	}

	// Requisição Alterar configuraçoes do trabalhador
	else if ($postjon['req'] == 'edit-worker') {
		$query = $pdo -> prepare("UPDATE trabalhador SET email = :email, senha = :senha, cep=:cep, celular=:celular WHERE id = :id");

		$query->bindValue(':id', $postjon['id']);
		$query->bindValue(':email', $postjon['email']);
		$query->bindValue(':senha', md5($postjon['senha']));
		$query->bindValue(':cep', $postjon['cep']);
		$query->bindValue(':celular', $postjon['celular']);
		$query->execute();
		
		if ($query) {
			$result = json_encode(array('success'=>true));
		}else{
			$result = json_encode(array('success'=>false, 'result'=> 0));
		}
		echo $result;
	}

	// --************ CRUD SERVIÇOS ************--
	else if ($postjon['req'] == 'insert-service') {
		$query = $pdo -> prepare("INSERT INTO servicos (nome,descricao,valor,status,categoria_id,trabalhador_id) 
			VALUES(nome = :nome, descricao = :descricao, valor = :valor, status = :status, categoria_id = :categoria_id, trabalhador_id = :trabalhador_id) ;");
	
		$query->bindValue(':nome', $postjon['nome']);
		$query->bindValue(':descricao', $postjon['descricao']);
		$query->bindValue(':valor', $postjon['valor']);
		$query->bindValue(':status', 'NA');
		$query->bindValue(':categoria_id', $postjon['categoria_id']);
		$query->bindValue(':trabalhador_id', $postjon['trabalhador_id']);
		$query->execute();

		$id = $pdo->lastInsertId();

		if ($query) {
			$res = json_encode(array('success' => true, 'id'=>$id));
		}else{		
			$res = json_encode(array('success' =>false));
		}
		echo $res;		
	}

	// Excluir Servico pelo ID
	else if ($postjon['req'] == 'delete-service') {
		$query = $pdo -> query("DELETE * FROM servicos WHERE id = '$postjon[id]'");

		if ($query) {
			$result = json_encode(array('success'=>true));
		}else{
			$result = json_encode(array('success'=>false));
		}
		echo $result;
	}

	// Editar Serviço pelo Id
	else if ($postjon['req'] == 'edit-service') {
		$query = $pdo -> prepare("UPDATE servicos SET nome = :nome, descricao = :descricao, valor=:valor, status=:status WHERE id = :id");

		$query->bindValue(':id', $postjon['id']);
		$query->bindValue(':nome', $postjon['nome']);
		$query->bindValue(':descricao', ($postjon['descricao']));
		$query->bindValue(':valor', $postjon['valor']);
		$query->bindValue(':status', 'NA');
		$query->execute();
		
		if ($query) {
			$result = json_encode(array('success'=>true));
		}else{
			$result = json_encode(array('success'=>false, 'result'=> 0));
		}
		echo $result;
	}
	// Listar Todos os serviços
	else if ($postjon['req'] == 'list-service') {
		$query = $pdo -> query("SELECT * FROM servicos WHERE status = 'AT' order by id desc limit $postjon[start],$postjon[limit]");
		
		$resultado = $query -> fetchAll(PDO::FETCH_ASSOC);
		for ($i=0; $i < count($resultado); $i++) { 
			foreach ($resultado[$i] as $key => $value) {
				$dados[] = array(
					'id' => $resultado[$i]['id'],
					'nome' => $resultado[$i]['nome'],
					'descricao' => $resultado[$i]['descricao'],
					'valor' => $resultado[$i]['valor']
				);
			}
		}
		if (count($resultado > 0)) {
			$result = json_encode(array('success'=>true, 'result' =>$dados));
		}else{
			$result = json_encode(array('success'=>false, 'result' => 0));			
		}
		echo $result;
	}

	// Listar serviço de Categoria especifica e "Ativa"
	else if ($postjon['req'] == 'list-service-from-category') {
		$query = $pdo -> query("SELECT * FROM servicos WHERE caterogia_id = '$postjon[id]' and (status = 'AT') order by id desc limit $postjon[start],$postjon[limit]");		

		$resultado = $query -> fetchAll(PDO::FETCH_ASSOC);
		for ($i=0; $i < count($resultado); $i++) { 
			foreach ($resultado[$i] as $key => $value) {
				$dados[] = array(
					'id' => $resultado[$i]['id'],
					'nome' => $resultado[$i]['nome'],
					'descricao' => $resultado[$i]['descricao'],
					'valor' => $resultado[$i]['valor'],
				);
			}
		}
		if (count($resultado > 0)) {
			$result = json_encode(array('success'=>true, 'result' =>$dados));
		}else{
			$result = json_encode(array('success'=>false, 'result' => 0));			
		}
		echo $result;
	}

	// Listar serviço postado do Trabalhador
	else if ($postjon['req'] == 'list-service-from-worker') {
		$query = $pdo -> query("SELECT * FROM servicos WHERE trabalhador_id = '$postjon[id]' order by id desc limit $postjon[start],$postjon[limit]");	

		$resultado = $query -> fetchAll(PDO::FETCH_ASSOC);
		for ($i=0; $i < count($resultado); $i++) { 
			foreach ($resultado[$i] as $key => $value) {
				$dados[] = array(
					'id' => $resultado[$i]['id'],
					'nome' => $resultado[$i]['nome'],
					'descricao' => $resultado[$i]['descricao'],
					'valor' => $resultado[$i]['valor'],
					'status' => $resultado[$i]['status']
				);
			}
		}
		if (count($resultado > 0)) {
			$result = json_encode(array('success'=>true, 'result' =>$dados));
		}else{
			$result = json_encode(array('success'=>false, 'result' => 0));			
		}
		echo $result;
	}
?>