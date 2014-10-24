<?
header("WWW-Authenticate: Basic realm=\"Test Authentication System\"");
header("HTTP/1.0 401 Unauthorized");
?>