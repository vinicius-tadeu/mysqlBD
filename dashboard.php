<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

// Exibir o dashboard para o usuário autenticado
echo "Bem-vindo, " . $_SESSION["username"] . "!";
?>