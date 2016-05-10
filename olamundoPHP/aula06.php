<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div>
		<?php  
			echo "<h2>Curso de PHP - Aula 06</h2>";
			$preco = $_GET["a"];
			echo "O preço do produto é R$ ". number_format($preco,2,",",".");

			$preco += ($preco *10/100);
			echo "</br>O novo preço com 10% de aumento é R$ ". number_format($preco,2,",",".");

			$preco -= ($preco *10/100);
			echo "</br>O novo preço com 10% de desconto é R$ ". number_format($preco,2,",",".");
			
		?>	
	</div>
</body>
</html>