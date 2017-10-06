<?php 
	if(isset($_POST['nome']) && isset($_POST['email']) || isset($_POST['nome2']) && isset($_POST['email2'])) {
		include("../cadastra_lead.php");
} ?>

<?php

function getUserIP() {
    return $_SERVER['REMOTE_ADDR'];

   /* if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    	
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
    }*/
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
					    <input type="text" name="nome" class="form-control" id="exampleInputName2" pattern="[A-Za-zà-úÀ-Ú ']{6,}" title="Digite seu nome completo" placeholder="Nome Completo" required>
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

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">5 - Argumentos para impactar gestores da importância do software de RH</a></h2>
										<p>Livre-se das planilhas de Excel! Automatize as tarefas do RH</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2017-10-01">Outubro 01, 2017</time>
										<a href="https://www.linkedin.com/in/andi-cris-souza-santana-a245aa95/" target="_blank" class="author"><span class="name">Andi Cris Souza</span><img src="../images/Andi Cris Souza.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="../images/post-3-software-rh.png" alt="" /></span>
								<p>A taxa de desemprego no Brasil atingiu 13,2% no trimestre encerrado em fevereiro, informou o Instituto Brasileiro de Geografia e Estatística dia 31 de março de 2017. Muitos profissionais qualificados estão em busca de recolocação e isso faz com que o mercado fique cada vez mais competitivo. As empresas de RH tem um “mar de candidatos” à disposição e consequentemente muito mais trabalho devido a alta demanda pelas vagas. Apresentar novas soluções e fazer o processo ser mais ágil, é um dos desafios da administração estratégica dos RH’s em todas as empresas independente dos seus portes. A automatização dos processos e a correta exploração do capital humano tornam a empresa mais competitiva, e como gerenciar essa grande quantidade de informações apenas com as suas planilhas?</p>

								<p>Melhorar seus resultados no departamento de RH implica, necessariamente na escolha de  um software criado exclusivamente para o seu segmento. Eu sei que  grande obstáculo é convencer os diretores e presidentes sobre essa importância, pois muitas vezes a decisão de comprar e implantar um novo sistema, não está nas suas mãos, e sim dos diretores, presidentes e às vezes até nas mãos do departamento financeiro.</p>

								<p>Então....”Stop the mimimi” e vamos listar tópicos para uma apresentação incontestável a respeito da adoção de um software de RH:</p>

								<h2>1-Listar problemas</h2>

								<p>Faça uma lista de todas as “dores” do departamento de RH, as dores são os problemas que afetam a administração do departamento. Logo em seguida, amplie a lista mostrando quais os problemas do RH que afetam outros departamentos de forma direta ou indireta, e pense como um software de gestão poderia resolver ou minimizar esses problemas.</p>

								<h2>2-Influenciar pessoas</h2>

								<p>“Uma andorinha só, não faz verão”, provavelmente essa frase já foi ouvida por você. Caso não consiga convencer outras pessoas que não são a diretoria da aplicação da sua ideia, provavelmente não obterá sucesso para aquisição da ferramenta de gestão de recursos humanos.</p>

								<p>Foram identificados os impactos negativos que a administração ineficiente do RH pode causar nos outros setores, agora é a hora de evangelizar colaboradores para a sua causa!. Escolha pessoas chaves para você expor suas ideias e as soluções, essas pessoas nem sempre são necessariamente o(s)  líder(es) do departamento (s). Selecione as que possuem mais poder para influenciar ou as queridinhas da diretoria, ou seja,  aquelas que são referência em seus departamentos. ;)</p>

								<h2>3 – Pesquisar Software</h2>

								<p>Quais são os principais fatores para considerar na hora da escolha do software de gestão de RH? (clique aqui e veja 6 critérios que você pode usar). Busque no google por “Softwares de RH”, as páginas mais relevantes estarão no topo da sua busca, e os melhores softwares de gestão serão listados.</p>

								<h2>4-Demonstrar Valores</h2>

								<p>Quando falamos em pôr a mão no bolso, principalmente na época que está faltando dinheiro, os gestores tendem a resistir. O seu trabalho é converter a ideia de custo para investimento.</p>

								<p>Após ter conhecido e entendido sobre as melhores opções de softwares para a sua realidade, escolha 3 ou 4 e solicite orçamentos.Com os orçamentos em mãos, inclua-os na apresentação, inclua também uma breve apresentação sobre cada software e liste os benefícios que eles trarão a curto, médio e longo prazo. Não esqueça de listar quanto tempo um funcionário demora para ser treinado e quanto é gasto no processo de seleção! Quando estamos falando com a diretoria o mais importante é mostrar o que eles ganharão se recrutarmos melhor.</p>

								<h2>5-Apresentação</h2>

								<p>Com todas as informações em mãos reúna os colaboradores que apoiam a aquisição do software. Marque uma reunião com a diretoria para apresentar as justificativas da aquisição do software.Nessa reunião seja acompanhado por uma ou no máximo duas pessoas e uma lista com a opinião das outras que não estarão presentes. Se você levar todos os funcionários que conversou, a diretoria pode entender que você está organizando um motim!</p>

								<p>Para melhorar a sua auto-confiança lembre-se de alguns pontos importantes:</p>

								<p>A sua postura demonstra que você tem atitude de dono, pois mostra que você está preocupado com as constantes melhorias da empresa.</p>

								<p>A automatização dos processos irá impactar a empresa como um todo, logo você está preocupado não só em ter seu trabalho facilitado e finalmente se livrar das planilhas de Excel, mas você está contribuído para aprimorar, também, os outros setores e garantir: Melhores condições de trabalho, Menor rotatividade e profissionais com o perfil comportamental mais condizente com a cultura organizacional..</p>

								<p>Todos os benefícios do sistema de RH, como: Pesquisa de clima, avaliação de perfil comportamental,engenharia de cargos e salários, avaliação desempenho, melhoria no processo de recrutamento e seleção e novos treinamentos. Com todos esses indicadores vamos elevar os índices do RH o que melhorará todos os processos da sua empresa e facilitará a tomada de decisão.</p>

								<p>Para lhe ajudar no processo que você acabou de aprender, preparamos uma lista com alguns dos melhores softwares de Administração e Recursos Humanos, cadastre o seu e-mail corporativo e receba em alguns minutos. ;)</p>
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
						</ul>
						<p class="copyright">&copy; Untitled <a href="http://rh360.com.br">RH 360</a>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>