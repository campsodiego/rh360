<?php 
	if(isset($_POST['nome']) && isset($_POST['email']) || isset($_POST['nome2']) && isset($_POST['email2'])) {
		include("cadastra_lead.php");
} ?>

<?php

function getUserIP() {
    return $_SERVER['REMOTE_ADDR'];

    // if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    	
    //     return $_SERVER['HTTP_CLIENT_IP'];
    // } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {

    //     return $_SERVER['HTTP_X_FORWARDED_FOR'];
    // } else if(isset($_SERVER['HTTP_X_FORWARDED'])) {

    //     return $_SERVER['HTTP_X_FORWARDED'];
    // } else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {

    //     return $_SERVER['HTTP_FORWARDED_FOR'];
    // } else if(isset($_SERVER['HTTP_FORWARDED'])) {

    //     return $_SERVER['HTTP_FORWARDED'];
    // } else if(isset($_SERVER['REMOTE_ADDR'])) {

    //     return $_SERVER['REMOTE_ADDR'];
    // } else {
    //     return 'UNKNOWN';
    // }
}


$user_ip = getUserIP();

?>
<!DOCTYPE html>
<html>
<head>
	<title>RH 360</title>
	<link rel="shortcut icon" href="images/faviicon.png" />
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
		<a href="http://rh360.com.br/">
		<img id="logo" border="0" alt="RH360" src="images\logo-cabecalho.png" class="img-responsive" height="100">
		</a>
	</div>
	<header id="inicial">
		<div class="container TopCasaFina-bannerWrapper">
			<div class="TopCasaFina-banner">
				<h1>Você sabe quais perfis existem dentro da sua empresa ?</h1>
				<p class="data-postagem">trace o perfil dos seus colaboradores e organize sua equipe de maneira mais acertiva<p>
				<form method="post"  id="for-banner" class="form-inline">
				  <div class="form-group">
				    <label for="exampleInputName2"></label>
				    <input type="hidden" name="ipaddress" id="ipaddress" value="<?= $user_ip; ?>">
				    <input type="text" name="nome" class="form-control" pattern="[A-Za-zà-úÀ-Ú ']{6,}" title="Digite seu nome completo" id="exampleInputName2" placeholder="Nome Completo" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail2"></label>
				    <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="E-mail Corporativo" required>
				  </div>
					 <button type="submit" class="btn btn-default">Iniciar Teste</button>
				</form>
			</div>
		</div>
	</header>

		<!--barra secundaria-->
	<section id="barra-formulario">
		<div class="container">	
			<div id="head" class="row">
				<div class="col-md-4">
					<p id="p2">Somos especialistas no assunto, podemos te ajudar?</p>
					<p id="p1"> Entre para nossa lista e receba conteúdos exclusivos e com prioridade</p>
				</div>	
				<div class="col-md-1">&nbsp;</div>
				<div class="col-md-7 col-xs-12">					
					<form method="post" id="formlead" class="form-inline">
						<div class="form-group">
							<label for="exampleInputName2"></label>
				    		<input type="hidden" name="ipaddress" id="ipaddress" value="<?= $user_ip; ?>">
				    		<input type="text" class="form-control" id="exampleInputName2" pattern="[A-Za-zà-úÀ-Ú ']{6,}" title="Digite seu nome completo" name="nome2" placeholder="Nome Completo" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2"></label>
				    		<input type="email" class="form-control" id="exampleInputEmail2" name="email2" placeholder="E-mail Corporativo" required>
						</div>					  
						 <button id="e-mail-barra-secundaria" type="submit" class="btn btn-default">Cadastrar E-mail</button>
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
						<h2><a href="postagens/postagem1.php">A gestão de pessoas através do perfil comportamental</a></h2>
						<p>Como melhorar a contratação e reduzir o turnover da sua empresa</p>
					</div>
					<div class="meta">
						<time class="published" datetime="2017-10-01">Outubro 1, 2017</time>
						<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><span class="name">Letícia Pegoraro</span><img src="images/Leticia Pegoraro.jpg" alt="" /></a>
					</div>
				</header>
				<a href="postagens/postagem1.php" class="image featured"><img src="images/post-1-perfil-comportamental.png" alt="" /></a>
				<p>Construir um time de alta performance é o sonho de qualquer organização. Contratar pessoas diferenciadas, baseado em currículo e pequenos testes pode ser um grande desafio e maior ainda é saber se estes profissionais se adaptarão ao ambiente e a equipe. Ter mais informações sobre o perfil do candidato e do time ajudam o RH na hora de contratar e reter bons funcionários.</p>
				<footer>
					<ul class="actions">
						<li><a href="postagens/postagem1.php" class="button big">Continuar lendo</a></li>
					</ul>
				</footer>
			</article>

				<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="postagens/postagem2.php">Como aumentar a produtividade com a gestão comportamental</a></h2>
						<p>O desenvolvimento de equipes se tornou fator chave em um mundo competitivo. Saiba por que a gestão voltada para o comportamento é tão importante</p>
					</div>
					<div class="meta">
						<time class="published" datetime="2017-10-01">Outubro 01, 2017</time>
						<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><span class="name">Letícia Pegoraro</span><img src="images/Leticia Pegoraro.jpg" alt="" /></a>
					</div>
				</header>
				<a href="postagens/postagem2.php" class="image featured"><img src="images/post-2-aumento-produtividade.png" alt="" /></a>
				<p>Uma das maneiras de aumentar a produtividade em uma empresa é melhorando o capital humano. Isso inclui tanto o desenvolvimento dos atuais colaboradores como contratações mais assertivas - o mau comportamento é uma das principais causas de demissão no nosso país. Organizações com bastante rotatividade perdem tempo e dinheiro.</p>
				<footer>
					<ul class="actions">
						<li><a href="postagens/postagem2.php" class="button big">Continuar lendo</a></li>
					</ul>
				</footer>
			</article>

				<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="postagens/postagem3.php">5 - Argumentos para impactar gestores da importância do software de RH</a></h2>
						<p>Livre-se das planilhas de Excel! Automatize as tarefas do RH</p>
					</div>
					<div class="meta">
						<time class="published" datetime="2017-10-01">Outubro 01, 2017</time>
						<a href="https://www.linkedin.com/in/andi-cris-souza-santana-a245aa95/" target="_blank" class="author"><span class="name">Andi Cris Souza</span><img src="images/Andi Cris Souza.jpg" alt="" /></a>
					</div>
				</header>
				<a href="postagens/postagem3.php" class="image featured"><img src="images/post-3-software-rh.png" alt="" /></a>
				<p>A taxa de desemprego no Brasil atingiu 13,2% no trimestre encerrado em fevereiro, informou o Instituto Brasileiro de Geografia e Estatística dia 31 de março de 2017. Muitos profissionais qualificados estão em busca de recolocação e isso faz com que o mercado fique cada vez mais competitivo. As empresas de RH tem um “mar de candidatos” à disposição e consequentemente muito mais trabalho devido a alta demanda pelas vagas. Apresentar novas soluções e fazer o processo ser mais ágil, é um dos desafios da administração estratégica dos RH’s em todas as empresas independente dos seus portes. A automatização dos processos e a correta exploração do capital humano tornam a empresa mais competitiva, e como gerenciar essa grande quantidade de informações apenas com as suas planilhas?</p>
				<footer>
					<ul class="actions">
						<li><a href="postagens/postagem3.php" class="button big">Continuar lendo</a></li>
					</ul>
				</footer>
			</article>
				<!-- <!-- Pagination -->
				<ul class="actions pagination">
					<li><a href="" class="disabled button big previous">Previous Page</a></li>
					<li><a href="#" class="button big next">Next Page</a></li>
				</ul> -->

			</div>

			<!-- Sidebar -->
			<section id="sidebar">

				<!-- Intro -->
				<section id="intro">
					<header>
						<h2>RH ESTRATÉGICO</h2>
						<p>Desenvolvendo o capital humano para melhorar resultados</p>
					</header>
				</section>

				<!-- Mini Posts -->
				<section>
					<div class="mini-posts">

						<!-- Mini Post -->
						<article class="mini-post">
							<header>
								<h3><a href="postagens/postagem1.php">A GESTÃO DE PESSOAS ATRAVÉS DO PERFIL COMPORTAMENTAL</a></h3>
								<time class="published" datetime="2015-10-20">Outubro 1, 2017</time>
								<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><img src="images/Leticia Pegoraro.jpg" alt="Leticia Pegoraro" /></a>
							</header>
							<a href="postagens/postagem1.php" class="image"><img src="images/post-1-perfil-comportamental.png" alt="" /></a>
						</article>

						<!-- Mini Post -->
						<article class="mini-post">
							<header>
								<h3><a href="postagens/postagem2.php">Como aumentar a produtividade com a gestão comportamental</a></h3>
								<time class="published" datetime="2015-10-20">Outubro 1, 2017</time>
								<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><img src="images/Leticia Pegoraro.jpg" alt="Leticia Pegoraro" /></a>
							</header>
							<a href="postagens/postagem2.php" class="image"><img src="images/post-2-aumento-produtividade.png" alt="" /></a>
						</article>

						<!-- Mini Post -->
						<article class="mini-post">
							<header>
								<h3><a href="postagens/postagem3.php">5 - ARGUMENTOS PARA IMPACTAR GESTORES DA IMPORTÂNCIA DO SOFTWARE DE RH</a></h3>
								<time class="published" datetime="2015-10-20">Outubro 1, 2017</time>
								<a href="https://www.linkedin.com/in/andi-cris-souza-santana-a245aa95/" target="_blank" class="author"><img src="images/Andi Cris Souza.jpg" alt="" /></a>
							</header>
							<a href="postagens/postagem3.php" class="image"><img src="images/post-3-software-rh.png" alt="" /></a>
						</article>
					</div>
				</section>
				<!-- About -->
				<section class="blurb">
					<h2>Sobre</h2>
					<p>Somos um blog de RH para empresas de todos os portes e segmentos, nosso foco é aumentar sua produtividade formando equipes de alta performance. Nosso diferencial é oferecer ferramentas práticas e gratuitas para melhorar o recrutamento e alocação dos seus colaboradores. Acreditamos que o RH estratégico reduz rotatividade e custos desnecessários com demissões, recontratações e novos treinamentos. Queremos ser seu parceiro nessa tarefa! Cada profissional se encaixa em um perfil e cada um desempenha melhor certas atividades. Em nossa página você encontrará dicas e testes comportamentais que te ajudarão nesse desafio!</p>
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
			</section>
		</main>
	</body>
</html>

<script>
	$(document).ready(function() {
		//code here
	});
</script>