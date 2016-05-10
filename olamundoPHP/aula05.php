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
			echo "<h2>Curso de PHP - Aula 05</h2>";

			$n1 = 3;
			$n2 = 2;
			$soma = $n1 + $n2;
			$media = ($n1 + $n2) / 2;

			echo "A soma entre $n1 e $n2 é igual a: $soma";
			echo "</br>";
			echo "<h2>OPERADORES</h2>";

			echo "</br>A soma vale: ". ($n1+$n2);
			echo "</br>A subtração vale: ". ($n1-$n2);
			echo "</br>A multiplicação vale: ". ($n1*$n2);
			echo "</br>A divisão vale: ". ($n1/$n2);
			echo "</br>O modulo vale: ". ($n1%$n2);
			echo "</br>A média vale: ". ($media);

			echo "</br></br>";
			echo "<h2>Recebendo valor na URL</h2>";

			$param1 = $_GET["a"];
			$param2 = $_GET["b"];
			echo "Valores recebidos na url - $param1 e $param2";


			echo "</br></br>";
			echo "<h2>Funções aritiméticas</h2>";
			echo "Valores recebidos - $param1 e $param2";
			echo "</br>O valor absoluto de $param2 é: ". abs($param2);
			echo "</br>O valor potencializado de $param1 e $param2 é: ". pow($param1, $param2);
			echo "</br>O valor raiz quadrada de $param1 é: ". sqrt($param1);
			echo "</br>O valor arredondado de $param1 é: ". round($param1);
			echo "</br>A parte inteira de $param1 é: ". intval($param1);
			echo "</br>O valor em moeda de $param1 é: ". number_format($param1,2,",",".");
		?>	
	</div>
</body>
</html>