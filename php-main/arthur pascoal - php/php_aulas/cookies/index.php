<?php
include "valida_cookies.inc";
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Cookies</title>
</head>
<body>
    <p>Bem-vindo, <?= htmlspecialchars($_SESSION["email_usuario"], ENT_QUOTES, "UTF-8") ?>!</p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>