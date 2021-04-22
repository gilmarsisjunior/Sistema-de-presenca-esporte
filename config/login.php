<?php 
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }
require_once('dbconfig.php');

//pega credenciais

$login = $_POST['login'];
$senha = $_POST['senha'];
$_SESSION['usuario'] = $login;



//valida user
$validaUsuario = "SELECT * FROM lista_user where login = '$login' ";
$conectaDB = mysqli_query($connect, $validaUsuario);
$fetch = mysqli_fetch_row ($conectaDB);
$decodeSenha = $fetch[2];
$verificaSenha = password_verify ($senha ,$decodeSenha );
if ($verificaSenha) {
    
    header('location: ../views/painel.php');
}
else {
    header('location: ../views/cadastro.html');
}

//seleciona codigo


?>