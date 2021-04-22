<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

require_once('dbconfig.php');

if($_SESSION['usuario'] == Array ( )){
    header('location: ../views/login.html');

}
if ($_SESSION['usuario']!= Array ( )) {
    $session = $_SESSION['usuario'];
}




$validaUsuario = "SELECT * FROM lista_user where login = '$session' ";
$conectaDB = mysqli_query($connect, $validaUsuario);
$fetch = mysqli_fetch_row ($conectaDB);
$codigo = $fetch[3];

?>