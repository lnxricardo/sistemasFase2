<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sisteminha</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<section id="esquerda">
	<form>
		<h2>Cadastar Pessoas</h2>
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome">
		<label for="telefone">Telefone</label>
		<input type="text" name="telefone" id="telefone">
		<label for="email">Email</label>
		<input type="mail" name="email" id="email">
		<button>Cadastrar</button>
	</form>
	
</section>
<section id="direita">
	<table>
		<tr id="titulo">
			<td>NOME</td>
			<td>TELEFONE</td>
			<td colspan="2">EMAIL</td>
			<tr>
				<td>Foo</td>
				<td>22222</td>
				<td>eu@eu</td>
				<td><a href="">Editar</a><a href="">Excluir</a></td>
			</tr>
		</tr>


	</table>
	
</section>

</body>
</html>