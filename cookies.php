<?php
// Ensure proper UTF-8 encoding
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Política de Cookies - Vigorcalrendro">
	<title>Política de Cookies - Vigorcalrendro</title>
	<link rel="stylesheet" href="./css/style.css">
	<!-- Favicon -->
	<link rel="icon" href="./img/Flux_Dev_A_realistically_illustrated_portrait_of_Simona_Tebet__0.jpeg" type="image/jpeg">
</head>

<body>
	<!-- Navigation for mobile -->
	<nav class="mobile-nav">
		<div class="burger-menu">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<div class="mobile-menu">
			<a href="./">Página Inicial</a>
			<a href="./politica.php">Política de Privacidade</a>
			<a href="./termos.php">Termos de Uso</a>
			<a href="./aviso-legal.php">Aviso Legal</a>
			<a href="./cookies.php">Política de Cookies</a>
		</div>
	</nav>

	<section class="policy-section">
		<div class="container">
			<h1>Política de Cookies</h1>

			<div class="policy-content">
				<p>Última atualização: <?php echo date('d/m/Y'); ?></p>

				<h2>1. O que são Cookies?</h2>
				<p>Cookies são pequenos arquivos de texto que são armazenados no seu computador ou dispositivo móvel quando você visita um site. Eles são amplamente utilizados para fazer os sites funcionarem de maneira mais eficiente, bem como fornecer informações aos proprietários do site.</p>

				<h2>2. Como Utilizamos Cookies</h2>
				<p>Utilizamos cookies por várias razões, detalhadas abaixo. Infelizmente, na maioria dos casos, não existem opções padrão do setor para desativar cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos os cookies ativos se não tiver certeza se precisa deles ou não.</p>

				<h2>3. Tipos de Cookies que Utilizamos</h2>

				<h3>3.1. Cookies Essenciais</h3>
				<p>Esses cookies são necessários para o funcionamento básico do site. Eles incluem, por exemplo, cookies que permitem que você faça login em áreas seguras do site ou use um carrinho de compras.</p>

				<h3>3.2. Cookies de Preferências</h3>
				<p>Esses cookies permitem que o site lembre escolhas que você faz (como seu nome de usuário, idioma ou região em que você está) e forneça recursos aprimorados e mais personalizados.</p>

				<h3>3.3. Cookies Analíticos</h3>
				<p>Estes cookies nos permitem contar visitas e fontes de tráfego para que possamos medir e melhorar o desempenho do nosso site. Eles nos ajudam a saber quais páginas são as mais e menos populares e ver como os visitantes se movimentam pelo site.</p>

				<h2>4. Gerenciamento de Cookies</h2>
				<p>A maioria dos navegadores permite que você controle os cookies através das configurações de preferências. No entanto, se você limitar a capacidade dos sites de definir cookies, isso pode afetar sua experiência geral do usuário, pois não será personalizada para você. Também pode impedir que você salve configurações personalizadas, como informações de login.</p>

				<h2>5. Cookies de Terceiros</h2>
				<p>Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. Este site usa serviços de análise que nos ajudam a entender como você usa o site e como podemos melhorar sua experiência.</p>

				<h2>6. Consentimento</h2>
				<p>Ao continuar a usar nosso site após ter visto o aviso de cookies, você concorda com o uso de cookies conforme descrito nesta política. Se você não concorda, deve deixar de usar este site imediatamente.</p>

				<h2>7. Alterações em Nossa Política de Cookies</h2>
				<p>Podemos atualizar nossa Política de Cookies periodicamente. Quaisquer alterações serão publicadas nesta página. Verifique regularmente para estar ciente de quaisquer atualizações.</p>

				<h2>8. Contato</h2>
				<p>Se você tiver alguma dúvida sobre nossa política de cookies, entre em contato conosco:</p>
				<p>
					Vigorcalrendro<br>
					Rua das Letras, 125<br>
					São Paulo, SP, 01310-001<br>
					Brasil<br>
					Tel: +55 (11) 4002-8922<br>
					Email: contato@vigorcalrendro.com
				</p>
			</div>

			<div class="back-home">
				<a href="./" class="btn-primary">Voltar para a página inicial</a>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="footer-content">
				<div class="footer-info">
					<h3>Vigorcalrendro</h3>
					<p>Rua das Letras, 125<br>São Paulo, SP, 01310-001<br>Brasil</p>
					<p>Tel: +55 (11) 4002-8922</p>
				</div>
				<div class="footer-links">
					<h4>Links Úteis</h4>
					<ul>
						<li><a href="./politica.php">Política de Privacidade</a></li>
						<li><a href="./termos.php">Termos de Uso</a></li>
						<li><a href="./aviso-legal.php">Aviso Legal</a></li>
						<li><a href="./cookies.php">Política de Cookies</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-copyright">
				<p>&copy; <?php echo date('Y'); ?> Vigorcalrendro. Todos os direitos reservados.</p>
			</div>
		</div>
	</footer>

	<!-- PHP script for mobile menu toggle -->
	<?php
	echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            var burgerMenu = document.querySelector(".burger-menu");
            var mobileMenu = document.querySelector(".mobile-menu");
            
            burgerMenu.addEventListener("click", function() {
                burgerMenu.classList.toggle("active");
                mobileMenu.classList.toggle("active");
            });
        });
    </script>';
	?>

	<style>
		.policy-section {
			padding: 100px 0;
			min-height: 80vh;
		}

		.policy-content {
			max-width: 800px;
			margin: 0 auto var(--spacing-lg);
			background-color: white;
			padding: var(--spacing-lg);
			border-radius: var(--radius-lg);
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
		}

		.policy-section h1 {
			text-align: center;
			color: var(--primary-color);
			margin-bottom: var(--spacing-lg);
		}

		.policy-content h2 {
			color: var(--secondary-color);
			margin-top: var(--spacing-md);
			margin-bottom: var(--spacing-sm);
			font-size: 1.5rem;
		}

		.policy-content h3 {
			color: var(--primary-color);
			margin-top: var(--spacing-sm);
			margin-bottom: var(--spacing-xs);
			font-size: 1.2rem;
		}

		.policy-content ul {
			margin-left: var(--spacing-md);
			margin-bottom: var(--spacing-md);
		}

		.policy-content li {
			margin-bottom: var(--spacing-xs);
		}

		.back-home {
			text-align: center;
			margin-top: var(--spacing-lg);
		}

		@media screen and (max-width: 768px) {
			.policy-section {
				padding-top: calc(var(--spacing-lg) + 50px);
			}

			.policy-content {
				padding: var(--spacing-md);
			}
		}
	</style>
</body>

</html>