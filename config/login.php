<?php 
session_start();
require_once('dbconfig.php');

//pega credenciais
$login = $_POST['login'];
$senha = $_POST['senha'];
$sessao = $_SESSION['usuario'] = $login;


//valida user
$validaUsuario = "SELECT * FROM lista_user where login = '$login' ";
$conectaDB = mysqli_query($connect, $validaUsuario);
$fetch = mysqli_fetch_row ($conectaDB);
$decodeSenha = $fetch[2];
$verificaSenha = password_verify ($senha ,$decodeSenha );
if ($verificaSenha) {
    echo ("<a href = ../views/painel.php> olá </a>");
}
else echo "Usuário não autênticado";

?>