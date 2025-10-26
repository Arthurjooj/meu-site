<?php
// Caminho do arquivo de log
$logFile = "cliques_log.txt";

// Mensagem de log
$logEntry = date('Y-m-d H:i:s') . " - Clique detectado\n";

// Grava no arquivo de log
file_put_contents($logFile, $logEntry, FILE_APPEND);

// Destino do redirecionamento
$destino = "https://www.youtube.com/watch?v=TcQf2mP5mYY"; // Substitua pelo link desejado

// Redireciona o usuário
header("Location: " . $destino);
exit;
?>
