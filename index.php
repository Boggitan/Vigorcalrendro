<?php
// Ensure proper UTF-8 encoding
header('Content-Type: text/html; charset=utf-8');

// Display error messages if any
if (isset($_GET['errors'])) {
	$error_messages = urldecode($_GET['errors']);
	echo '<div class="error-messages">' . $error_messages . '</div>';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Vigorcalrendro - A autobiografia inspiradora de Simona Tebet">
	<meta name="keywords" content="Simona Tebet, autobiografia, livro, Brasil, política">
	<meta name="author" content="Vigorcalrendro">
	<title>Vigorcalrendro - A Autobiografia de Simona Tebet</title>
	<link rel="stylesheet" href="./css/style.css">
	<!-- Favicon -->
	<link rel="icon" href="./img/LVNAng.jpeg" type="image/jpeg">
	<!-- Open Graph Tags -->
	<meta property="og:title" content="Vigorcalrendro - A Autobiografia de Simona Tebet">
	<meta property="og:description" content="Conheça a história inspiradora de Simona Tebet em sua autobiografia oficial">
	<meta property="og:image" content="./img/LVNAng.jpeg">
	<meta property="og:url" content="https://vigorcalrendro.com">
	<meta property="og:type" content="website">
</head>

<body>
	<!-- Cookie Consent Popup -->
	<?php
	$cookie_consent = isset($_COOKIE['cookie_consent']) ? $_COOKIE['cookie_consent'] : '';
	if ($cookie_consent != 'accepted') {
	?>
		<div id="cookie-consent" class="cookie-popup">
			<div class="cookie-content">
				<p>Utilizamos cookies para melhorar sua experiência em nosso site. Ao continuar navegando, você concorda com nossa <a href="./cookies.php">Política de Cookies</a>.</p>
				<form method="post" action="">
					<button type="submit" name="accept_cookies" class="btn-accept">Aceitar</button>
				</form>
			</div>
		</div>
	<?php
	}

	// Handle cookie consent submission
	if (isset($_POST['accept_cookies'])) {
		setcookie('cookie_consent', 'accepted', time() + (365 * 24 * 60 * 60), '/');
		echo '<script>document.getElementById("cookie-consent").style.display = "none";</script>';
	}
	?>

	<!-- Navigation for mobile -->
	<nav class="mobile-nav">
		<div class="burger-menu">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<div class="mobile-menu">
			<a href="./#livro">O Livro</a>
			<a href="./#autora">A Autora</a>
			<a href="./#vantagens">Vantagens</a>
			<a href="./#depoimentos">Depoimentos</a>
			<a href="./#galeria">Galeria</a>
			<a href="./#sobre">Sobre Nós</a>
			<a href="./#faq">FAQ</a>
		</div>
	</nav>

	<!-- Hero Section -->
	<section id="hero" class="hero-section">
		<div class="container">
			<div class="hero-content">
				<div class="hero-text">
					<h1>A Jornada de Simona Tebet</h1>
					<h2>Uma autobiografia inspiradora que mudará sua perspectiva</h2>
					<p>Uma história fascinante de superação, liderança e compromisso com o Brasil</p>
					<div class="cta-button">
						<a href="./#formulario" class="btn-primary">Adquira Agora</a>
					</div>
				</div>
				<div class="hero-image">
					<img src="./img/LVNAng.jpeg" alt="Capa do livro - Autobiografia de Simona Tebet">
				</div>
			</div>
		</div>
	</section>

	<!-- Book Description Section -->
	<section id="livro" class="book-section">
		<div class="container">
			<h2 class="section-title">Sobre o Livro</h2>
			<div class="book-content">
				<div class="book-image">
					<img src="./img/mLFDDl.jpeg" alt="Simona Tebet - Cenas do livro">
				</div>
				<div class="book-text">
					<p>Em sua autobiografia fascinante, Simona Tebet revela os bastidores de sua trajetória política e pessoal, desde sua infância no Mato Grosso do Sul até se tornar uma das vozes mais respeitadas na política brasileira.</p>
					<p>Com uma narrativa envolvente e sincera, a autora compartilha momentos decisivos, desafios superados e as importantes lições aprendidas ao longo de sua carreira.</p>
					<p>Este livro não é apenas uma biografia, mas um testemunho de perseverança, ética e compromisso com a transformação do Brasil, oferecendo inspiração para leitores de todas as idades e convicções políticas.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Author Biography Section -->
	<section id="autora" class="author-section">
		<div class="container">
			<h2 class="section-title">A Autora</h2>
			<div class="author-content">
				<div class="author-text">
					<h3>Simona Tebet</h3>
					<p>Advogada, professora e política brasileira com uma carreira destacada no serviço público. Filha do ex-presidente do Senado Ramez Tebet, Simona seguiu os passos do pai na política, construindo seu próprio legado com trabalho árduo e dedicação.</p>
					<p>Foi prefeita de Três Lagoas por dois mandatos, senadora pelo Mato Grosso do Sul e candidata à presidência da República. Sempre se destacou pela defesa da igualdade de gênero, educação e desenvolvimento sustentável.</p>
					<p>Atualmente, continua sendo uma das vozes mais importantes no cenário político brasileiro, reconhecida por sua capacidade de diálogo e busca por consensos que beneficiem o país.</p>
				</div>
				<div class="author-image">
					<img src="./img/vQOlGu.jpeg" alt="Simona Tebet - Retrato oficial">
				</div>
			</div>
		</div>
	</section>

	<!-- Advantages Section -->
	<section id="vantagens" class="advantages-section">
		<div class="container">
			<h2 class="section-title">Por que ler este livro?</h2>
			<div class="advantages-grid">
				<div class="advantage-card">
					<div class="advantage-icon">📖</div>
					<h3>Inspiração</h3>
					<p>Uma jornada inspiradora que mostra como superar obstáculos e permanecer fiel aos seus valores.</p>
				</div>
				<div class="advantage-card">
					<div class="advantage-icon">🔍</div>
					<h3>Visão Interna</h3>
					<p>Conheça os bastidores da política brasileira através dos olhos de uma das suas mais importantes figuras femininas.</p>
				</div>
				<div class="advantage-card">
					<div class="advantage-icon">🌱</div>
					<h3>Desenvolvimento Pessoal</h3>
					<p>Aprenda lições valiosas sobre liderança, perseverança e como manter a integridade em momentos desafiadores.</p>
				</div>
				<div class="advantage-card">
					<div class="advantage-icon">🇧🇷</div>
					<h3>Contexto Histórico</h3>
					<p>Compreenda importantes momentos da história política recente do Brasil através de uma perspectiva privilegiada.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials Section -->
	<section id="depoimentos" class="testimonials-section">
		<div class="container">
			<h2 class="section-title">O que dizem os leitores</h2>
			<div class="testimonials-slider">
				<div class="testimonial-card">
					<div class="testimonial-text">
						<p>"Um livro inspirador que revela o lado humano de uma das figuras políticas mais interessantes do Brasil. Não consegui parar de ler!"</p>
					</div>
					<div class="testimonial-author">
						<p><strong>Maria Helena Santos</strong><br>Professora</p>
					</div>
				</div>
				<div class="testimonial-card">
					<div class="testimonial-text">
						<p>"A trajetória de Simona Tebet é contada com sinceridade e profundidade, oferecendo reflexões importantes sobre o papel da mulher na política brasileira."</p>
					</div>
					<div class="testimonial-author">
						<p><strong>Carlos Eduardo Mendes</strong><br>Jornalista</p>
					</div>
				</div>
				<div class="testimonial-card">
					<div class="testimonial-text">
						<p>"Uma narrativa envolvente que combina história pessoal e análise política de forma equilibrada. Recomendo para todos os interessados em política brasileira."</p>
					</div>
					<div class="testimonial-author">
						<p><strong>Ana Luiza Oliveira</strong><br>Estudante de Ciências Políticas</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Gallery Section -->
	<section id="galeria" class="gallery-section">
		<div class="container">
			<h2 class="section-title">Galeria</h2>
			<div class="gallery-grid">
				<div class="gallery-item">
					<img src="./img/LVNAng.jpeg" alt="Simona Tebet - Imagem 1">
				</div>
				<div class="gallery-item">
					<img src="./img/mLFDDl.jpeg" alt="Simona Tebet - Imagem 2">
				</div>
				<div class="gallery-item">
					<img src="./img/vQOlGu.jpeg" alt="Simona Tebet - Imagem 3">
				</div>
				<div class="gallery-item">
					<img src="./img/IINyjX.jpeg" alt="Simona Tebet - Imagem 4">
				</div>
				<div class="gallery-item">
					<img src="./img/tUVlkP.jpeg" alt="Simona Tebet - Imagem 5">
				</div>
				<div class="gallery-item">
					<img src="./img/Dv7icm.jpeg" alt="Simona Tebet - Imagem 6">
				</div>
			</div>
		</div>
	</section>

	<!-- About Us Section -->
	<section id="sobre" class="about-section">
		<div class="container">
			<h2 class="section-title">Sobre a Vigorcalrendro</h2>
			<div class="about-content">
				<div class="about-text">
					<p>A Vigorcalrendro é uma editora brasileira dedicada a publicar obras que inspiram, educam e promovem reflexões importantes para a sociedade. Fundada com a missão de dar voz a histórias que merecem ser contadas, nos especializamos em biografias e autobiografias de personalidades que contribuíram significativamente para o Brasil.</p>
					<p>Com um compromisso inabalável com a qualidade editorial e a autenticidade das narrativas, trabalhamos em estreita colaboração com nossos autores para garantir que suas histórias sejam contadas com precisão e sensibilidade.</p>
					<p>Acreditamos no poder transformador da leitura e no valor de compartilhar experiências de vida que possam inspirar gerações atuais e futuras.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ Section -->
	<section id="faq" class="faq-section">
		<div class="container">
			<h2 class="section-title">Perguntas Frequentes</h2>
			<div class="faq-accordion">
				<div class="faq-item">
					<div class="faq-question">
						<h3>Quanto tempo demora para receber o livro?</h3>
						<div class="faq-toggle">+</div>
					</div>
					<div class="faq-answer">
						<p>O prazo de entrega é de 5 a 10 dias úteis, dependendo da sua localização no Brasil.</p>
					</div>
				</div>
				<div class="faq-item">
					<div class="faq-question">
						<h3>O livro está disponível em formato digital?</h3>
						<div class="faq-toggle">+</div>
					</div>
					<div class="faq-answer">
						<p>Sim, após a compra você receberá instruções para acessar a versão digital em formato PDF, além do livro físico.</p>
					</div>
				</div>
				<div class="faq-item">
					<div class="faq-question">
						<h3>Quais formas de pagamento são aceitas?</h3>
						<div class="faq-toggle">+</div>
					</div>
					<div class="faq-answer">
						<p>Aceitamos cartões de crédito, boleto bancário e Pix.</p>
					</div>
				</div>
				<div class="faq-item">
					<div class="faq-question">
						<h3>O livro é autografado pela autora?</h3>
						<div class="faq-toggle">+</div>
					</div>
					<div class="faq-answer">
						<p>As primeiras 500 cópias vendidas serão autografadas pela própria Simona Tebet.</p>
					</div>
				</div>
				<div class="faq-item">
					<div class="faq-question">
						<h3>Posso comprar mais de um exemplar?</h3>
						<div class="faq-toggle">+</div>
					</div>
					<div class="faq-answer">
						<p>Sim, basta indicar a quantidade desejada no formulário de pedido.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Order Form Section -->
	<section id="formulario" class="order-form-section">
		<div class="container">
			<div class="order-form">
				<h3>Faça seu pedido</h3>
				<form method="post" action="./processar-pedido.php">
					<div class="form-group">
						<label for="nome">Nome Completo</label>
						<input type="text" id="nome" name="nome" required>
					</div>
					<div class="form-group">
						<label for="telefone">Telefone</label>
						<input type="tel" id="telefone" name="telefone" required>
					</div>
					<div class="form-group">
						<label for="endereco">Endereço de Entrega</label>
						<input type="text" id="endereco" name="endereco" required>
					</div>
					<div class="form-check">
						<input type="checkbox" id="termos" name="termos" required>
						<label for="termos">Li e concordo com os <a href="./termos.php">Termos de Uso</a></label>
					</div>
					<div class="form-check">
						<input type="checkbox" id="politica" name="politica" required>
						<label for="politica">Aceito a <a href="./politica.php">Política de Privacidade</a></label>
					</div>
					<button type="submit" class="btn-submit">Encomendar</button>
				</form>
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
            
            var faqItems = document.querySelectorAll(".faq-item");
            faqItems.forEach(function(item) {
                var question = item.querySelector(".faq-question");
                question.addEventListener("click", function() {
                    item.classList.toggle("active");
                    var toggle = question.querySelector(".faq-toggle");
                    toggle.textContent = item.classList.contains("active") ? "-" : "+";
                });
            });
        });
    </script>';
	?>
</body>

</html>