<?php
// Ensure proper UTF-8 encoding
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Termos de Uso - Vigorcalrendro">
	<title>Termos de Uso - Vigorcalrendro</title>
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
			<h1>Termos de Uso</h1>

			<div class="policy-content">
				<p>Última atualização: <?php echo date('d/m/Y'); ?></p>

				<h2>1. Aceitação dos Termos</h2>
				<p>Bem-vindo ao site da Vigorcalrendro. Ao acessar e utilizar este site, você concorda em cumprir e estar vinculado aos seguintes termos e condições de uso. Se você não concordar com qualquer parte destes termos, não utilize nosso site.</p>

				<h2>2. Alterações nos Termos</h2>
				<p>Reservamo-nos o direito de modificar estes termos a qualquer momento. As alterações entrarão em vigor imediatamente após sua publicação no site. Ao continuar a usar o site após a publicação de mudanças, você aceita os termos revisados.</p>

				<h2>3. Uso do Site</h2>
				<p>Você concorda em utilizar este site apenas para fins legais e de uma maneira que não infrinja os direitos de qualquer pessoa, ou restrinja ou iniba o uso e aproveitamento do site por qualquer terceiro.</p>
				<p>Comportamentos proibidos incluem, mas não se limitam a:</p>
				<ul>
					<li>Usar o site para qualquer finalidade ilegal ou não autorizada</li>
					<li>Tentar interferir no funcionamento adequado do site</li>
					<li>Fazer upload ou transmitir vírus ou outros códigos maliciosos</li>
					<li>Coletar informações de outros usuários sem autorização</li>
				</ul>

				<h2>4. Produtos e Compras</h2>
				<p>Ao realizar uma compra em nosso site, você declara que:</p>
				<ul>
					<li>Todas as informações fornecidas durante o processo de compra são verdadeiras e precisas</li>
					<li>Você possui capacidade legal para realizar transações financeiras</li>
					<li>Compreende que os preços estão sujeitos a alterações sem aviso prévio</li>
				</ul>

				<h2>5. Política de Entregas e Devoluções</h2>
				<p>Nossos prazos de entrega são estimados e podem variar dependendo da sua localização. Para mais informações sobre entregas e nossa política de devoluções, entre em contato com nossa equipe de atendimento ao cliente.</p>

				<h2>6. Direitos de Propriedade Intelectual</h2>
				<p>Todo o conteúdo deste site, incluindo, mas não se limitando a textos, gráficos, logos, ícones, imagens, clipes de áudio, downloads digitais e compilações de dados, é propriedade da Vigorcalrendro e está protegido por leis brasileiras e internacionais de direitos autorais.</p>
				<p>Você não pode reproduzir, distribuir, modificar, exibir, preparar trabalhos derivados ou utilizar qualquer conteúdo deste site sem nossa autorização prévia por escrito.</p>

				<h2>7. Limitação de Responsabilidade</h2>
				<p>A Vigorcalrendro não se responsabiliza por quaisquer danos diretos, indiretos, incidentais, consequenciais ou punitivos decorrentes do uso ou incapacidade de uso deste site ou dos produtos adquiridos através dele.</p>
				<p>Não garantimos que o site funcionará sem interrupções ou erros. Ocasionalmente, o acesso ao site pode ser suspenso ou restrito para permitir reparos, manutenção ou a introdução de novas funcionalidades.</p>

				<h2>8. Links para Sites de Terceiros</h2>
				<p>Nosso site pode conter links para sites de terceiros que não são operados por nós. Não temos controle sobre esses sites e não somos responsáveis pelo conteúdo, políticas de privacidade ou práticas dos mesmos.</p>

				<h2>9. Lei Aplicável</h2>
				<p>Estes termos são regidos e interpretados de acordo com as leis do Brasil. Qualquer disputa decorrente ou relacionada a estes termos será submetida à jurisdição exclusiva dos tribunais brasileiros.</p>

				<h2>10. Contato</h2>
				<p>Se você tiver dúvidas sobre estes Termos de Uso, entre em contato conosco:</p>
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