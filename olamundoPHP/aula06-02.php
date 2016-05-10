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
			echo "<h2>Curso de PHP - Aula 06-02</h2>";
			$ano = $_GET["a"]; // essa linha pega o ano na url
			echo "O ano atual é $ano e o ano anterior é ". --$ano;


			$a = 3;
			$b = $a;
			$b += 5;
			echo "</br>Valores a = $a";
			echo "</br>Valores b = $b";


			$a = 3;
			$b = &$a;
			$b += 5;
			echo "</br>Valores a-ref = $a";
			echo "</br>Valores b-ref = $b";

			$site = "cursoemvideo";
			$$site = "cursoPHP";
			echo "</br>Variavel - $site";
			echo "</br>Variavel de variavel - $cursoemvideo";

			
		?>	
	</div>
</body>
</html>