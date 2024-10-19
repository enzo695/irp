<?php
$port = 1000; // Definindo a porta

// Inicie o servidor PHP na porta especificada
exec("php -S 0.0.0.0:$port", $output, $return_var);

// Mostra o resultado da execução
if ($return_var !== 0) {
    echo "Erro ao iniciar o servidor: " . implode("\n", $output);
} else {
    echo "Servidor iniciado na porta $port.";
}
?>
