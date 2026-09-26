<?php
require_once "sessao.inc";

$_SESSION = [];
$parametros_cookie = session_get_cookie_params();
setcookie(
	session_name(),
	"",
	time() - 3600,
	$parametros_cookie["path"],
	$parametros_cookie["domain"],
	$parametros_cookie["secure"],
	$parametros_cookie["httponly"]
);

$caminho_cookies_legados = str_replace(" ", "%20", dirname($_SERVER["SCRIPT_NAME"]));
setcookie("email_usuario", "", time() - 3600, $caminho_cookies_legados);
setcookie("senha_usuario", "", time() - 3600, $caminho_cookies_legados);

session_destroy();
header("Location: login.html");
exit;