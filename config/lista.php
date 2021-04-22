<?php 
    require_once('dbconfig.php');



    $nome = $_POST['login'];

   $validaUsuario = "SELECT lista FROM lista_user where codigo = '2293d4f10ed037d' ";
    $conectaDB = mysqli_query($connect, $validaUsuario);
    $fetch = mysqli_fetch_row ($conectaDB);
    $pegaLista = $fetch[0];

    $nome = $pegaLista.$nome;

    $insereLista = "UPDATE lista_user SET lista ='$nome' WHERE lista = '$pegaLista' ";
    $conectaDB2 = mysqli_query($connect, $insereLista);

    if($conectaDB2) {
        echo 'sucesso';
    }
    else echo 'falha';
?>