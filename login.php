<?php
session_start();

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsql";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consultar o banco de dados para verificar as credenciais do usuário
    $sql = "SELECT * FROM users WHERE email = '$username' AND senha = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login bem-sucedido
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
    } else {
        // Login falhou
        echo "Nome de usuário ou senha incorretos.";
    }

    $conn->close();
}
?>