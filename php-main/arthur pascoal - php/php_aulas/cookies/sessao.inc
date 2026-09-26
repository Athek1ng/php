<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    ini_set("session.use_strict_mode", "1");
    $https = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off";
    session_set_cookie_params([
        "lifetime" => 0,
        "path" => "/",
        "secure" => $https,
        "httponly" => true,
        "samesite" => "Lax",
    ]);
    session_start();
}