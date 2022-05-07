<?php




?>
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Calculadora</title>		
		<script src="calculadora.js"></script>
	</head>
	<div style="width: 25%; margin: 200px auto;">
	<body bgcolor="White">
		<h1>Calculadora científica</h1>
		<input type="text" id="txtValor1">
			<select id="operadores" onchange="ControleDeSelecao();">
				<optgroup label="Basico">
					<option value="+">	+(somar)</option>
					<option value="-">	-(subtrair)</option>
					<option value="*">	*(multiplicar)</option>
					<option value="/">	/(dividir)</option>
				</optgroup>
				<optgroup label="Outros">
					<option value="raiz">	 	  Raiz	</option>
					<option value="potencia">	Potência</option>
					<option value="fatorial">	Fatorial</option>
					<option value="fibonacci">Fibonaci</option>					
					<option value="porcento">	Porcentagem</option>
					<option value="media">		Média</option>
					<option value="calc">		  Develop Calc</option>
				</optgroup>
			</select>
		<input type="text" id="txtValor2" size="5"><br>		
		<input type="button" onclick="Calcular('txtValor1', 'txtValor2')" value="Calcular">
		<input type="button" onclick="Limpar('txtValor1', 'txtValor2')" value="Limpar">
		<p id="saida">Resultado:</p>
</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>		
	</body>
</html>