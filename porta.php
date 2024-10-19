<?php
$port = getenv('PORT') ?: 8080; // Pega a variável de ambiente PORT ou usa 8080 como padrão
$host = '0.0.0.0'; // Define o host

// Código para iniciar seu servidor
// Exemplo: servidor HTTP simples
$server = new \Swoole\Http\Server($host, $port);
$server->on('request', function ($request, $response) {
    // Lógica de tratamento de requisições
});

$server->start();
?>
