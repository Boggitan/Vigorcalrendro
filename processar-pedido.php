<?php
// Process order form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Form validation
	$errors = [];

	// Required fields
	$required_fields = ['nome', 'telefone', 'endereco'];
	foreach ($required_fields as $field) {
		if (empty($_POST[$field])) {
			$errors[] = "O campo " . ucfirst($field) . " é obrigatório.";
		}
	}

	// Check for terms acceptance
	if (!isset($_POST['termos'])) {
		$errors[] = "Você deve aceitar os Termos de Uso.";
	}

	if (!isset($_POST['politica'])) {
		$errors[] = "Você deve aceitar a Política de Privacidade.";
	}

	// If no errors, process the form
	if (empty($errors)) {
		// Get form data
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
		$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

		// Get server domain - more reliable method
		$server_domain = '';

		// First try HTTP_HOST
		if (isset($_SERVER['HTTP_HOST']) && !empty($_SERVER['HTTP_HOST'])) {
			$server_domain = $_SERVER['HTTP_HOST'];
		}
		// If not available, try SERVER_NAME
		elseif (isset($_SERVER['SERVER_NAME']) && !empty($_SERVER['SERVER_NAME'])) {
			$server_domain = $_SERVER['SERVER_NAME'];
		}
		// Default fallback
		else {
			$server_domain = 'vigorcalrendro.com';
		}

		// Clean the domain (remove port if exists)
		$server_domain = preg_replace('/:\d+$/', '', $server_domain);

		// Set up email
		$to = "goreh18529@macho3.com";

		// Using base64 encoding for headers to handle UTF-8
		$subject = "=?UTF-8?B?" . base64_encode("Novo Pedido da Autobiografia de Simona Tebet") . "?=";
		$from = "=?UTF-8?B?" . base64_encode("Vigorcalrendro") . "?= <noreply@" . $server_domain . ">";
		$reply_to = "noreply@" . $server_domain;

		// Create email body
		$message = "Novo pedido recebido:\n\n";
		$message .= "Nome: " . $nome . "\n";
		$message .= "Telefone: " . $telefone . "\n";
		$message .= "Endereço: " . $endereco . "\n";
		$message .= "Data do pedido: " . date("d/m/Y H:i:s") . "\n";
		$message .= "Origem: " . $server_domain . "\n";

		// Email headers
		$headers = "From: " . $from . "\r\n";
		$headers .= "Reply-To: " . $reply_to . "\r\n";
		$headers .= "Return-Path: " . $reply_to . "\r\n"; // Ensures bounces go to valid domain
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		// Send email
		$mail_sent = mail($to, $subject, $message, $headers);

		// Log the order in a file as a backup
		$log_file = 'pedidos.log';
		$log_message = "[" . date("Y-m-d H:i:s") . "] " . $nome . " | " . $telefone . " | " . $endereco . " | Domínio: " . $server_domain . "\n";
		file_put_contents($log_file, $log_message, FILE_APPEND);

		// Redirect to thank you page
		header("Location: ./obrigado.php");
		exit;
	} else {
		// If there are errors, go back to the homepage with error messages
		$error_string = implode("<br>", $errors);
		header("Location: ./index.php?errors=" . urlencode($error_string));
		exit;
	}
} else {
	// If accessed directly without POST, redirect to homepage
	header("Location: ./");
	exit;
}
