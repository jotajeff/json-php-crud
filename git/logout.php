<?php
session_start();
ini_set('default_charset','UTF-8');
unset($_SESSION['usuario']);
unset($_SESSION['ID']);
unset($_SESSION['nome']);
session_destroy();
echo "<script>alert('Logout efetuado com sucesso!'); location.href='../index.php';</script>";
?>