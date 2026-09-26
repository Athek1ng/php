<?php
require_once "sessao.inc";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.html");
    exit;
}

$email = filter_var(trim($_POST["email"] ?? ""), FILTER_VALIDATE_EMAIL);
$senha = $_POST["senha"] ?? "";
$mensagem = "E-mail ou senha incorretos.";

if ($email === false || $senha === "") {
    http_response_code(400);
    $mensagem = "Informe um e-mail e uma senha válidos.";
} else {
    require "conecta_my_sql.inc";

    $consulta = $conexao->prepare("SELECT email, senha FROM usuarios WHERE email = ? LIMIT 1");
    $consulta->bind_param("s", $email);
    $consulta->execute();
    $consulta->bind_result($email_banco, $senha_banco);
    $encontrado = $consulta->fetch();
    $consulta->close();

    $senha_legada = $encontrado && hash_equals($senha_banco, $senha);
    $autenticado = $senha_legada || ($encontrado && password_verify($senha, $senha_banco));

    if ($autenticado) {
        if ($senha_legada) {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $atualizacao = $conexao->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
            $atualizacao->bind_param("ss", $senha_hash, $email_banco);
            $atualizacao->execute();
            $atualizacao->close();
        }

        session_regenerate_id(true);
        $_SESSION["email_usuario"] = $email_banco;
        $conexao->close();
        header("Location: index.php");
        exit;
    }

    $conexao->close();
    http_response_code(401);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falha no login</title>
</head>
<body>
    <p><?= htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8") ?></p>
    <p><a href="login.html">Voltar ao login</a></p>
</body>
</html>
