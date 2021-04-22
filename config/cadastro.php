<?php
require_once('dbconfig.php');
$login = $_POST['login'];
$senha = $_POST['senha'];
$codigo = 'zzzzzz';
$hash  = password_hash($senha, PASSWORD_BCRYPT);
$hashcode = $login.$codigo;

$hashCodigo1 = md5($hashcode);
$done = substr($hashCodigo1, 1, 15);


$sql = "INSERT INTO lista_user (login, senha, codigo, lista) VALUES ('$login', '$hash', '$done' , '$login,')";

if(mysqli_query($connect, $sql)){
    header('location: ../views/login.html');
}
else {
    echo "não funcionou";
}

?>