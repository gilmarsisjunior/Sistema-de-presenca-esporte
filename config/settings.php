<?php
session_start();


if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $_SESSION['nome'] = $nome;
    header('location: ../views/confirmar.php');
}




?> 