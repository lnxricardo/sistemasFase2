<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>SITE DE PORTUGUES</h1>
	<button><a href="<?php echo BASE_URL; ?>">Home</a></button>
	<button><a href="<?php echo BASE_URL; ?>galeria">Galeria</a></button>
	<button><a href="<?php echo BASE_URL; ?>eventos">Eventos</a></button>
	<button><a href="<?php echo BASE_URL; ?>aulas">Aulas</a></button>
	<hr/>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<hr/>
	<h2>AQUI É O RODAPÉ</h2>

</body>
</html>