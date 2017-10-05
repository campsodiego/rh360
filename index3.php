<?php 
	if(isset($_POST['nome']) && isset($_POST['email'])) {
		include("cadastra_lead.php");
} ?>

<?PHP

function getUserIP() {
    return $_SERVER['REMOTE_ADDR'];
}


$user_ip = getUserIP();

?>
<!DOCTYPE html>
<html>
<head>
	<title>RH 360</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/modificacoes.css"/>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107371054-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments)};
	  gtag('js', new Date());

	  gtag('config', 'UA-107371054-1');
	</script>
</head>
<body>
	<!--Banner principal-->
	<div id="titulo-principal" class="container">
		<h1 id="titulo-principal">
			<a href="index.html">
				<font id="logo">RH</font> 360
			</a>
		</h1>
	</div>
	<header id="inicial">
		<div class="container TopCasaFina-bannerWrapper">
			<div class="TopCasaFina-banner">
				<h1>Milky Way Tour by Camping on Mount Bromo</h1>
				<p class="data-postagem">in Travel / 26.12.2016 <p>
					<a class="btn btn-success" href="#" role="button">read more</a>
			</div>
		</div>
	</header>

		<!--barra secundaria-->
	<section id="barra-formulario">
		<div class="container">	
			<div id="head" class="row">
				<div class="col-md-3">
					<?php if($verify_connection) { echo "cadastrado"; } ?>
					<p id="p1"> JUNTE-SE A MAIS DE 150.000 PESSOAS</p>
					<p id="p2"> Entre para nossa lista e receba conteúdos exclusivos e com prioridade</p>
				</div>	
				<!-- <div class="col-md-1">&nbsp;</div> -->
				<div class="col-md-9 col-xs-12">					
					<form method="post"  id="formlead" class="form-inline" accept-charset="UTF-8">
						<input type="hidden" name="ipaddress" id="ipaddress" value="<?= $user_ip; ?>">
						<div class="form-group">
							<input type="text" class="form-control" name="nome" id="nome" required placeholder="NOME">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="sobrenome" id="sobrenome" required placeholder="SOBRENOME">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" required placeholder="EMAIL">
						</div>					  
						<button type="submit" class="btn btn-default">Cadastrar email</button>
					</form>
				</div>
			</div>
		</div>
	</section>

		<!-- Wrapper -->
	<main id="wrapper">			
		<!-- Main -->
		<div id="main">
		<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="postagens/postagem1.html">A gestão de pessoas através do perfil comportamental</a></h2>
						<p>Como melhorar a contratação e reduzir o turnover da sua empresa</p>
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01">Outubro 1, 2017</time>
						<a href="#" class="author"><span class="name">Letícia Pegoraro</span><img src="images/Leticia Pegoraro.jpg" alt="" /></a>
					</div>
				</header>
				<a href="#" class="image featured"><img src="images/post-1-perfil-comportamental.png" alt="" /></a>
				<p>Construir um time de alta performance é o sonho de qualquer organização. Contratar pessoas diferenciadas, baseado em currículo e pequenos testes pode ser um grande desafio e maior ainda é saber se estes profissionais se adaptarão ao ambiente e a equipe. Ter mais informações sobre o perfil do candidato e do time ajudam o RH na hora de contratar e reter bons funcionários.</p>
				<footer>
					<ul class="actions">
						<li><a href="postagens/postagem1.html" class="button big">Continuar lendo</a></li>
					</ul>
					<ul class="stats">
						<li><a href="#">General</a></li>
						<li><a href="#" class="icon fa-heart">28</a></li>
						<li><a href="#" class="icon fa-comment">128</a></li>
					</ul>
				</footer>
			</article>

				<!-- Pagination
				<ul class="actions pagination">
					<li><a href="" class="disabled button big previous">Previous Page</a></li>
					<li><a href="#" class="button big next">Next Page</a></li>
				</ul> -->

			</div>

			<!-- Sidebar -->
			<section id="sidebar">

				<!-- Intro -->
				<section id="intro">
					<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
					<header>
						<h2>Future Imperfect</h2>
						<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
					</header>
				</section>

				<!-- Mini Posts -->
				<section>
					<div class="mini-posts">

						<!-- Mini Post -->
						<article class="mini-post">
							<header>
								<h3><a href="postagens/postagem1.html">A GESTÃO DE PESSOAS ATRAVÉS DO PERFIL COMPORTAMENTAL</a></h3>
								<time class="published" datetime="2015-10-20">Outubro 1, 2017</time>
								<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><img src="images/Leticia Pegoraro.jpg" alt="Leticia Pegoraro" /></a>
							</header>
							<a href="postagens/postagem1.html" class="image"><img src="images/post-1-perfil-comportamental.png" alt="" /></a>
						</article>

						<!-- Mini Post -->
						<article class="mini-post">
							<header>
								<h3><a href="postagens/postagem2.html">Como aumentar a produtividade com a gestão comportamental</a></h3>
								<time class="published" datetime="2015-10-20">Outubro 1, 2017</time>
								<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><img src="images/Leticia Pegoraro.jpg" alt="Leticia Pegoraro" /></a>
							</header>
							<a href="postagens/postagem2.html" class="image"><img src="images/post-2-aumento-produtividade.png" alt="" /></a>
						</article>

						<!-- Mini Post -->
						<article class="mini-post">
							<header>
								<h3><a href="postagens/postagem3.html">5 - ARGUMENTOS PARA IMPACTAR GESTORES DA IMPORTÂNCIA DO SOFTWARE DE RH</a></h3>
								<time class="published" datetime="2015-10-20">Outubro 1, 2017</time>
								<a href="https://www.linkedin.com/in/andi-cris-souza-santana-a245aa95/" target="_blank" class="author"><img src="images/Andi Cris Souza.jpg" alt="" /></a>
							</header>
							<a href="postagens/postagem3.html" class="image"><img src="images/post-3-software-rh.png" alt="" /></a>
						</article>
					</div>
				</section>
				<!-- About -->
				<section class="blurb">
					<h2>About</h2>
					<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
					<ul class="actions">
						<li><a href="#" class="button">Learn More</a></li>
					</ul>
				</section>

				<!-- Footer -->
				<section id="footer">
					<ul class="icons">
						<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
						<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</section>
			</section>
		</main>
		
		<!-- Scripts -->
	</body>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</html>
<script>
	$(document).ready(function() {
		//waiting for solution
	});
</script>