
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>confirmação</title>
	<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</head>
<body>
	<div class="container">
		<h1>Conato</h1>
		
		<?php
	error_reporting(0); // desliga todos os erros	
	$email='aloisio@elianapedrosa.com.br';
	$assunto=$_POST['assunto'];
	$menssagem=$_POST['mensagem'];
	
	if ( mail( $email, $assunto, $menssagem )):
	 
?>
			<p>seu email foi enviado com sucesso</p>
		<?php else:  ?>
		<p>não foi possível enviar seu email, tente mais tarde</p>
		<?php endif;  ?>
	</div>
</body>
</html>