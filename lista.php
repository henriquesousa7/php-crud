<!DOCTYPE html>

<?php
	include_once 'config/conexao.php'; 
	$sql = "SELECT * FROM livros;";

	$stmt = $conexao->prepare($sql);
	$result = $stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
	<meta charset="utf-8"/>
	<title>Livros</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>

	<div class="container">
	<h3 class="text-center pt-5">Livros Disponiveis</h3 >
	
	<br>
    <div class="col">
      	<input id="inputData" type="text" class="form-control" placeholder="Titulo/Autor/Categoria">
    </div>

  	

	<br><br>

	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover table-fill">
		<thead class="thead-dark">
		<tr>
			<th>Titulo</th>
			<th>Autor</th>
			<th>Categoria</th>
			<th>Emprestimo</th>
		</tr>
		</thead>
		<tbody id='livros'>
			<?php foreach ($rows as $item){?>
            <tr>
                <td><?php echo $item['titulo'];?></td>
                <td><?php echo $item['autor'];?></td>
				<td><?php echo $item['categoria'];?></td>
				<td>
					<a href="lista.php?id=<?php echo $item['id']; ?>">
						<button class="btn btn-dark text-center" name="delete">Pegar</button>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		</table>
	</div>
	</div>
</body>
</html>

<?php

    include_once "config/conexao.php";

    if(isset($_GET["id"])){

        $id_livro = $_GET['id'];

        $sql = "DELETE FROM livros WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id_livro);

        $result = $stmt->execute();

        if($result){
            echo "Deletado com sucesso";
            header("Location: lista.php");
        }else{
            echo "Erro ao deletar";
            header("Location: lista.php");
        }
    }
?>