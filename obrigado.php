<?php
// Ensure proper UTF-8 encoding
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Obrigado por seu pedido - Vigorcalrendro">
	<title>Obrigado por seu pedido - Vigorcalrendro</title>
	<link rel="stylesheet" href="./css/style.css">
	<!-- Favicon -->
	<link rel="icon" href="./img/Flux_Dev_A_realistically_illustrated_portrait_of_Simona_Tebet__0.jpeg" type="image/jpeg">
</head>

<body>
	<section class="thank-you-section">
		<div class="container">
			<div class="thank-you-content">
				<div class="thank-you-icon">✓</div>
				<h1>Seu pedido foi recebido com sucesso!</h1>
				<p>Obrigado por adquirir a autobiografia de Simona Tebet. Seu pedido foi registrado e você receberá uma confirmação em breve.</p>
				<p>O livro será enviado para o endereço fornecido em até 5 dias úteis.</p>

				<div class="order-details">
					<h2>Próximos passos:</h2>
					<ol>
						<li>Você receberá um e-mail de confirmação com os detalhes do seu pedido</li>
						<li>Nossa equipe entrará em contato para confirmar seus dados</li>
						<li>O livro será enviado pelos Correios</li>
						<li>Você receberá um código de rastreamento para acompanhar a entrega</li>
					</ol>
				</div>

				<div class="back-home">
					<a href="./" class="btn-primary">Voltar para a página inicial</a>
				</div>
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

	<style>
		.thank-you-section {
			padding: 100px 0;
			min-height: 80vh;
			display: flex;
			align-items: center;
		}

		.thank-you-content {
			max-width: 800px;
			margin: 0 auto;
			text-align: center;
			background-color: white;
			padding: var(--spacing-lg);
			border-radius: var(--radius-lg);
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
			animation: fadeIn 1s ease-out;
		}

		.thank-you-icon {
			font-size: 80px;
			color: #4CAF50;
			margin-bottom: var(--spacing-md);
			background-color: rgba(76, 175, 80, 0.1);
			width: 120px;
			height: 120px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto var(--spacing-md);
		}

		.thank-you-content h1 {
			color: var(--primary-color);
			margin-bottom: var(--spacing-md);
		}

		.order-details {
			margin: var(--spacing-lg) 0;
			text-align: left;
			background-color: #f9f9f9;
			padding: var(--spacing-md);
			border-radius: var(--radius-md);
		}

		.order-details h2 {
			color: var(--primary-color);
			font-size: 1.5rem;
			margin-bottom: var(--spacing-sm);
		}

		.order-details ol {
			margin-left: var(--spacing-md);
		}

		.order-details li {
			margin-bottom: var(--spacing-xs);
		}

		.back-home {
			margin-top: var(--spacing-lg);
		}

		@media screen and (max-width: 768px) {
			.thank-you-section {
				padding: 80px 0;
			}

			.thank-you-content {
				padding: var(--spacing-md);
			}
		}
	</style>
</body>

</html>