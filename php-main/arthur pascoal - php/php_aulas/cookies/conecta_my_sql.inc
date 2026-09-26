<?php
//configurações do banco de dados
$servidor = "localhost";
$usuario_bd = "root";
$senha_db = "";
$banco = "bd";

$conexao = new mysqli($servidor, $usuario_bd, $senha_db, $banco);
$conexao->set_charset("utf8mb4");
