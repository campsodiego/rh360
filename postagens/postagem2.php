<?php 
	if(isset($_POST['nome']) && isset($_POST['email']) || isset($_POST['nome2']) && isset($_POST['email2'])) {
		include("../cadastra_lead.php");
} ?>

<?php

function getUserIP() {
    return $_SERVER['REMOTE_ADDR'];
}


$user_ip = getUserIP();

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>RH 360</title>
	<link rel="shortcut icon" href="../images/faviicon.png" />
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/modificacoes.css"/>
</head>
	<body class="single">
		<!--Banner principal-->
		<div id="titulo-principal" class="container">
			<a href="http://rh360.com.br/">
			<img id="logo" border="0" alt="RH360" src="..\images\logo-cabecalho.png" class="img-responsive" height="100">
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
					    <input type="text" name="nome" class="form-control" id="exampleInputName2" placeholder="Nome Completo" required>
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
					    		<input type="text" class="form-control" id="exampleInputName2" name="nome2" placeholder="Nome Completo" required>
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
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Como aumentar a produtividade com a gestão comportamental</a></h2>
										<p>O desenvolvimento de equipes se tornou fator chave em um mundo competitivo. Saiba por que a gestão voltada para o comportamento é tão importante</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2017-10-01">Outubro 01, 2017</time>
										<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><span class="name">Letícia Pegoraro</span><img src="../images/Leticia Pegoraro.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="../images/post-2-aumento-produtividade.png"" alt="" /></span>
								<p>Uma das maneiras de aumentar a produtividade em uma empresa é melhorando o capital humano. Isso inclui tanto o desenvolvimento dos atuais colaboradores como contratações mais assertivas - o mau comportamento é uma das principais causas de demissão no nosso país. Organizações com bastante rotatividade perdem tempo e dinheiro.</p>
								<p>Com isso, a área de Recursos Humanos tem se transformado e está ganhando evidência. Apesar de continuar realizando suas tarefas burocráticas, hoje ela é vista como estratégica. Ao enxergar que equipes criadas para trabalhar em alto rendimento e bem desenvolvidas aumentam a produtividade da organização, cada vez mais, o setor passa a ser reconhecido como uma ferramenta eficaz para atingir os resultados desejados.</p>

								<h2>O que é a Gestão Comportamental?</h2>

								<p>Gerir com foco em comportamento significa atuar em todas as fases de um profissional, da sua seleção ao tempo total dele na instituição. A contratação já é um desafio, uma vez que as habilidades técnicas (hard skills) são mais visíveis que as competências sociais e comportamento (soft skills) de um candidato. Para auxiliar nessa tarefa ferramentas, testes e softwares já foram desenvolvidos a fim de entender melhor como reage cada ser humano a diferentes estímulos.</p>
								
								<p>Existem quatro perfis comportamentais nos quais cada pessoa encaixa em maior ou menor grau. São eles: Executor, Comunicador, Analista e Planejador. Entender as características de cada colaborador influencia nas funções desempenha com maior eficácia e eficiência. Além disso, bem alocados, o relacionamento interpessoal e com a organização torna-se mais fluido.</p>

								<p>Pessoas que se sentem mais confortáveis em suas atividades tendem a ser mais fiéis ao seu trabalho. Um ambiente favorável, com pessoas satisfeitas, reduz a rotatividade da organização (turnovers). Turnovers reduzem a receita, pois causam custos e indenizações advindos das cisões das relações trabalhistas e todo o tempo e dinheiro para um novo processo de contratação e treinamento, desmotivam equipes e diminuem a credibilidade do RH.
								</p>

								<p>A implementação de tal modelo de gestão é válida para empresas de qualquer tamanho e segmento. Ademais dos profissionais de RH, qualquer pessoa que tenha interesse em ser estratégica também pode utilizá-la: Gestores, líderes, psicólogos ou coachings. O desenvolvimento do método de Gestão Comportamental, consequência de seus ótimos resultados, fez com que as ferramentas tornassem mais acessíveis e hoje é possível contratar, a preços razoáveis, não espere mais para levar sua empresa à outro patamar.</p>
							</article>
							<ul class="actions">
								<li><input type="button" value="Voltar" class="button big" onclick="history.go(-1)"></li>
							</ul>
					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
							<p class="copyright">&copy; Untitled <a href="http://rh360.com.br">RH 360</a>
						</ul>
					</section>

			</div>
	</body>
</html>