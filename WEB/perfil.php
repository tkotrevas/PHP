<!DOCTYPE HTML>

<html>
	<head>
		<title>Minha Página</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
			<header id="header" class="alt">
				<div class="logo"> <img src="images/logo.png" style="width: 50px; height: auto;" class="d-inline-block align-top"></div>
				<a href="#menu"><span>Menu</span></a>
			</header>
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Página Inicial</a></li>
					<li><a href="nacional.php">Pesquisa Nacional</a></li>
					<li><a href="internacional.php">Pesquisa Internacional</a></li>
					<li><a href="register.php">Registre-se</a></li>
					<li><a href="login.php">Meus Dados</a></li>
					<li><a href="Download.html">Downloads</a></li>
				</ul>
			</nav>
			<section id="post" class="wrapper bg-img">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Meus Dados</h2>						
						</header>
						<div class="content">
							<form method="post" action="processa_cad_usuario.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">Nome
										<input type="text" name="nome" id="name" value="" placeholder="Nome" />
										</div>
										<div class="6u$ 12u$(xsmall)">Email
										<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="6u$ 12u$(xsmall)">Nome de Usuário
										<input type="text" name="usuario" id="usuario" value="" placeholder="Usuário"/>
										</div>
										<div class="6u$ 12u$(xsmall)">Senha
										<input type="text" name="senha" id="senha" value="" placeholder="Senha" />
										</div>
										
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="sexo" value="Masculino">
											<label for="priority-normal">Masculino</label>
										</div>
										<div class="4u$ 12u$(small)">
											<input type="radio" id="priority-high" name="sexo" value="Feminino">
											<label for="priority-high">Feminino</label>
										</div>

									
										
										<div class="6u$ 12u$(medium)">
												<div><input name="img" type="file"/></div>
												<p></p>

											<input type="submit" value="Enviar" class="button special">
											
										</div>
										
											
										
									
									</div>
								</form>





						</div>						
					</article>
				</div>
			</section>
			<footer id="footer">
				<div class="inner">
					<h2>Entre em contato</h2>
					<form action="#" method="post">
						<div class="field half first">
							<label for="name">Nome</label>
							<input name="name" id="name" type="text" placeholder="Nome">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Mensagem</label>
							<textarea name="message" id="message" rows="6" placeholder="Mensagem"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Enviar" class="button alt" type="submit"></li>
						</ul>
					</form>
					<ul class="icons">
						<li><a href="https://twitter.com/Travelin_App" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/travelin.app.14" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/travelin_app/?hl=pt-br" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>				
				</div>
			</footer>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>