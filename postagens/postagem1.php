<?php 
	if(isset($_POST['nome']) && isset($_POST['email']) || isset($_POST['nome2']) && isset($_POST['email2'])) {
		include("../cadastra_lead.php");
} ?>

<?php

function getUserIP() {
    // return $_SERVER['REMOTE_ADDR'];

    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    	
        return $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if(isset($_SERVER['HTTP_X_FORWARDED'])) {

        return $_SERVER['HTTP_X_FORWARDED'];
    } else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {

        return $_SERVER['HTTP_FORWARDED_FOR'];
    } else if(isset($_SERVER['HTTP_FORWARDED'])) {

        return $_SERVER['HTTP_FORWARDED'];
    } else if(isset($_SERVER['REMOTE_ADDR'])) {

        return $_SERVER['REMOTE_ADDR'];
    } else {
        return 'UNKNOWN';
    }
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
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107371054-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments)};
	  gtag('js', new Date());

	  gtag('config', 'UA-107371054-1');
	</script>
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
					    		<input type="text" class="form-control" id="exampleInputName2" name="nome2" pattern="[A-Za-zà-úÀ-Ú ']{6,}" title="Digite seu nome completo" placeholder="Nome Completo" required>
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

				<!-- Header -->
				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">A gestão de pessoas através do perfil comportamental</a></h2>
										<p>Como melhorar a contratação e reduzir o turnover da sua empresa</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2017-10-01">Outubro 1, 2017</time>
										<a href="https://www.linkedin.com/in/let%C3%ADcia-pegoraro-07272814a/" target="_blank" class="author"><span class="name">Letícia Pegoraro</span><img src="../images/Leticia Pegoraro.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="../images/post-1-perfil-comportamental.png" alt="" /></span>
								<p>Construir um time de alta performance é o sonho de qualquer organização. Contratar pessoas diferenciadas, baseado em currículo e pequenos testes pode ser um grande desafio e maior ainda é saber se estes profissionais se adaptarão ao ambiente e a equipe. Ter mais informações sobre o perfil do candidato e do time ajudam o RH na hora de contratar e reter bons funcionários.</p>
								<p>Hoje já se sabe que uma das principais causas de demissão é por mau comportamento, por isso, a área de Recursos Humanos vem mudando o modo como enxerga e pratica seu recrutamento. Se você souber como alocar melhor seu profissional para que ele desempenhe funções que tem maior aptidão e assim se sinta mais motivado, o trabalho dele e sua interação com a equipe evoluirão, criando um ambiente mais eficiente.</p>
								<p>Como isso é possível? Análises mostram que existem quatro padrões básicos de comportamento, em que todos nós nos encaixamos em menor ou maior grau.</p>
								<h2>Perfil Comportamental (DISC)</h2>
								<p>Em 1928, William Moulton Marston publicou a obra: Emotions of Normal People. Muitos anos depois, o livro se tornou a base de todos os instrumentos da teoria DISC, uma das metodologia mais difundidas e utilizadas de análise de perfil comportamental do mundo.</p>
								<p>A teoria afirma que todos nós podemos ser classificados por padrões básicos de comportamento, ou seja, pela forma como reagimos a estímulos diversos. É importante ressaltar que isso independe de currículo ou formação profissional.</p>
								<p>Afinal, o que é DISC e quais seriam os perfis? DISC é justamente um acrônimo para Dominância, Influência, Estabilidade e Conformidade.</p>

								<h4>Dominância</h4>

								<p>Busca resultados, tem seu comportamento orientado para a ação, é motivado por desafios.</p>

								<h4>Influência</h4>

								<p>Seu comportamento é orientado a pessoas, tende à táticas de persuasão, é motivado por liberdade e criatividade.</p>

								<h4>Estabilidade</h4>

								<p>É mais colaborativo, busca manter o equilíbrio e a harmonia. Gosta de se sentir seguro.</p>

								<h4>Conformidade</h4>

								<p>Costuma ser mais analítico e cauteloso, busca precisão e qualidade no desempenho próprio e alheio.</p>
								<p>O modelo DISC evoluiu ao longo do tempo e foi adaptado para caber na linguagem e ambiente empresarial. Pessoas com características de Dominância, passaram a ser chamadas de Executores. São os profissionais com bastante iniciativa, autonomia e que, normalmente, são auto gerenciáveis. Quem se encaixa na Influência são os Comunicadores, aqueles que se movem por relacionamento, gostam de trabalhar em equipe e são intuitivos. Quem tende a Estabilidade é o profissional Planejador, comumente metódico, equilibrado e constante em suas emoções. Por último, aqueles que se identificam com o perfil Conformidade são os Analistas, reservados e detalhistas, são altamente perfeccionistas.</p>

								<p>Independentemente das nomenclaturas, testes e formulários ajudarão a identificar os perfis dos seus colaboradores, além da própria observação de cada um em seu ambiente de trabalho, cumprindo suas tarefas habituais. À medida que se aumentou a conscientização sobre a importância do papel do RH no desenvolvimento de equipes de alta </p>
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