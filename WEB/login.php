
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
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
							<h2>Log-in:</h2>						
						</header>
						<div class="content">
							<form method="post" action="processa_login">
									<div class="row uniform">
										
										<div class="6u$ 12u$(xsmall)">
										<input type="text" name="usuario" id="usuario" value="" placeholder="Usuário"/>
										</div>
										<div class="6u$ 12u$(xsmall)">
										<input type="text" name="senha" id="senha" value="" placeholder="Senha" />
										</div>
										<div class="6u$ 12u$(medium)">
										<input type="submit" value="Enviar" class="button special">
									</div>
									</div>
								</form>





						</div>						
					</article>
				</div>
			</section>
			
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>