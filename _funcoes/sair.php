<?php
// destri a sessao do usuario
session_destroy();
$_SESSION = null;

// redireciona
print "<script>setTimeout(\"window.location='javascript:history.go(-1)'\", 0);</script>";
