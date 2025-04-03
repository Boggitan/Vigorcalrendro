<?php
// Ensure proper UTF-8 encoding
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Aviso Legal - Vigorcalrendro">
	<title>Aviso Legal - Vigorcalrendro</title>
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
			<h1>Aviso Legal</h1>

			<div class="policy-content">
				<p>Última atualização: <?php echo date('d/m/Y'); ?></p>

				<h2>1. Identificação</h2>
				<p>O site vigorcalrendro.com é de propriedade e operado por Vigorcalrendro, empresa registrada no Brasil com sede em:</p>
				<p>
					Rua das Letras, 125<br>
					São Paulo, SP, 01310-001<br>
					Brasil<br>
					CNPJ: XX.XXX.XXX/0001-XX
				</p>

				<h2>2. Objetivo</h2>
				<p>Este site tem como objetivo principal a comercialização da autobiografia de Simona Tebet. Todo o conteúdo disponibilizado neste site é meramente informativo e não constitui aconselhamento profissional de qualquer tipo.</p>

				<h2>3. Propriedade Intelectual</h2>
				<p>Todos os elementos deste site, incluindo, mas não se limitando a, textos, imagens, design gráfico, logotipos, ícones, código-fonte e software, são de propriedade exclusiva da Vigorcalrendro ou de seus licenciadores, e estão protegidos pelas leis brasileiras e internacionais de propriedade intelectual.</p>
				<p>Qualquer reprodução, distribuição, modificação, exibição, transmissão ou uso do conteúdo deste site para fins comerciais ou não comerciais é estritamente proibida sem autorização prévia por escrito.</p>

				<h2>4. Exatidão e Atualização</h2>
				<p>A Vigorcalrendro envida todos os esforços para garantir a exatidão, veracidade e atualização das informações apresentadas neste site. No entanto, não garantimos a ausência de erros, imprecisões ou omissões, reservando-nos o direito de modificar o conteúdo a qualquer momento sem aviso prévio.</p>

				<h2>5. Política de Privacidade e Cookies</h2>
				<p>O uso deste site está sujeito à nossa <a href="./politica.php">Política de Privacidade</a> e <a href="./cookies.php">Política de Cookies</a>, que explicam como coletamos, usamos e protegemos suas informações pessoais.</p>

				<h2>6. Responsabilidade</h2>
				<p>A Vigorcalrendro não se responsabiliza por:</p>
				<ul>
					<li>Quaisquer danos diretos, indiretos, incidentais, consequenciais ou punitivos decorrentes do uso ou incapacidade de uso deste site;</li>
					<li>Interrupções temporárias devido a manutenção, atualizações ou falhas técnicas;</li>
					<li>Conteúdo ou serviços oferecidos por sites de terceiros que possam ser acessados através de links fornecidos em nosso site.</li>
				</ul>

				<h2>7. Links para Sites de Terceiros</h2>
				<p>Este site pode conter links para sites de terceiros que não são controlados pela Vigorcalrendro. Não endossamos ou assumimos qualquer responsabilidade pelo conteúdo, políticas de privacidade ou práticas desses sites.</p>

				<h2>8. Lei Aplicável e Foro</h2>
				<p>Este Aviso Legal é regido e interpretado de acordo com as leis do Brasil. Qualquer disputa decorrente ou relacionada a este aviso será submetida à jurisdição exclusiva dos tribunais da Comarca de São Paulo, SP.</p>

				<h2>9. Modificações</h2>
				<p>A Vigorcalrendro se reserva o direito de modificar este Aviso Legal a qualquer momento. As alterações entrarão em vigor imediatamente após sua publicação no site. Recomendamos que você verifique regularmente esta página para se manter informado sobre quaisquer atualizações.</p>

				<h2>10. Contato</h2>
				<p>Se você tiver dúvidas ou comentários sobre este Aviso Legal, entre em contato conosco através dos seguintes canais:</p>
				<p>
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