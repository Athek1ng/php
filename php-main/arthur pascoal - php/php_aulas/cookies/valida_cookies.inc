<?php
require_once "sessao.inc";

if (empty($_SESSION["email_usuario"])) {
    header("Location: login.html");
    exit;
}
