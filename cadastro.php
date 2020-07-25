<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Cadastro</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

	<h3 class="text-center pt-5">Cadastrar Livro</h3>
    <div class="container contact-form">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="col-md-12">
                    <form class="form" action="" method="post">
                        <div class="form-group">
                        	<label for="Titulo">Titulo do Livro</label>
               				<input type="text" class="form-control" id="Titulo" name="titulo" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <label for="Autor">Nome do Autor</label>
                			<input type="text" class="form-control" id="Autor" name="autor" placeholder="Nome do Autor">
                        </div>
                        <div class="form-group">
                         	<label for="Categoria">Categoria do Livro</label>
                			<input type="text" class="form-control" id="Categoria" name="categoria" placeholder="Categoria">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark" name="insertButton">Enviar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

<?php

	include_once 'config/conexao.php';


	if(isset($_POST['insertButton'])){

		$titulo = $_POST['titulo'];
		$autor = $_POST['autor'];;
		$categoria = $_POST['categoria'];
	
		$sql = "INSERT INTO livros (titulo, autor, categoria) VALUES (:titulo, :autor, :categoria)";
	
		$stmt = $conexao->prepare($sql);
	
		$stmt->bindParam(':titulo', $titulo);
		$stmt->bindParam('autor', $autor);
		$stmt->bindParam(':categoria', $categoria);

		$result = $stmt->execute();

		if(!$result){
			var_dump($stmr->errorInfo());
			exit;
		}else{
			echo "Inserido com sucesso";
			header("Location: index.html");
		}
	}
?>