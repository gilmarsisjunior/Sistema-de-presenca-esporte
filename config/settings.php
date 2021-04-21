<?php


if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    header('location: ../views/confirmar.php');
    
exit();
}

?> 