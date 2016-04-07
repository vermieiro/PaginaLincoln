<html><img src="http://192.168.10.35/blog/wp-content/uploads/2015/08/Rede_Azul.png"></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?

$nome=$_POST['nome'];

$email=$_POST['email'];

$filial='Treinameto '.$_POST['filial'];


$Destinatario="lincoln@sertao.com.br";


$vale = $_POST["vale"];
	if(isset($_POST['vale'])) {
		$vale = implode ("\n", $_POST['vale']);
	}

$mensagem1="Pesquisa para treinamentos.

Nome: $nome

Email: $email

Filial : $filial

Temas Escolidos: \n $vale ";
	
mail("$Destinatario","$filial", "$mensagem1","From:$email");

 
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="csscontatos.css" />
		<title> Treinameto Sertao e SuperPRO</title>
	</head>
	<body>
	<div class="bodyi">
			<nav>
				<ul class="menu">                  
					<li><a href="http://192.168.10.35/blog">Blog</a></li>
                    <li><a href="http://sertao.com.br/">Site Sert&atilde;o</a></li>
                    <li><a href="http://superpro.com.br/">Site SuperPR&Oacute;</a></li>					               
				</ul>
			</nav>
			<br>
			<br>
			<br>
			<div class="but4">
				<p align="center">Sua escolha foi enviada com sucesso !</P>
				<br>
				<p align="center">Clica em voltar para retornar a pagina do Blog</p>
				<p align="center"><div class="but2"><a href="http://192.168.10.35/blog/"><b>Voltar</b></a></div></p>
			</div>
		</div>
	</body>
</html>