<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Captura os dados enviados pelo formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];
    $assunto = $_POST['subject'];
    $mensagem = $_POST['message'];

    // Validação simples para evitar envio de campos vazios
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    // Configurações do destinatário e assunto do e-mail
    $to = "orcamento@recicle.org.br";  // Substitua com o e-mail que receberá as informações
    $subject = "Nova Solicitação de Orçamento: $assunto";

    // Monta o corpo do e-mail
    $body = "Nome: $nome\n";
    $body .= "Email: $email\n";
    $body .= "Telefone: $telefone\n";
    $body .= "Assunto: $assunto\n";
    $body .= "Mensagem: \n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";  // O e
