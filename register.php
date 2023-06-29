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

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Inserir um registro na tabela
    $sql = "INSERT INTO users (nome, email, senha) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        ?>
         <div>Registro inserido com sucesso!</div>
         <a style="" href="./index.php">Voltar para o Login.</a>
        <?php
    } else {
        echo "Erro ao inserir o registro: " . $conn->error;
    }

    $conn->close();
}
?>