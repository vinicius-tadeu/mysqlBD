<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <title>Tela de Login</title>
</head>
<body>
    <div class="container">
        <h2>Tela de Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Email:</label>
            <input type="text" id="username" name="username" required><br><br>
    
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>
    
            <input type="submit" value="Login" class="btn">
        </form>
    </div>
    <div class="container">
        <h2>Tela de Registro</h2>
        <form action="register.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br><br>
    
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>
    
            <input type="submit" value="Registrar" class="btn">
        </form>
    </div>
</body>
</html>