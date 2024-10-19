<?php
// Define a porta
$port = getenv('PORT') ?: 3000; // Usa 3000 como padrão se a variável de ambiente PORT não estiver definida
$host = '0.0.0.0';
$address = "$host:$port";

// Exibe o endereço do servidor
echo "Servidor rodando em: $address\n";

// Inicia o servidor PHP embutido
// Você pode usar a função `exec` para rodar o comando
exec("php -S $address");
