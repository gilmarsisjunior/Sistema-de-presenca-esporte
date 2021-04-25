<?php 

    require_once('dbconfig.php');
    session_start();
    //recupera valores para se auto inserir e mostrar lista

    $nome = $_POST['login'].',';
    $codigo = $_POST['codigo'];

    //selciona e valida o código para a lista ser inserida
   $validaUsuario = "SELECT lista FROM lista_user where codigo = '$codigo' ";
    $conectaDB = mysqli_query($connect, $validaUsuario);
    $fetch = mysqli_fetch_row ($conectaDB);
    $pegaLista = $fetch[0];

    //concatena o nome inserido com o nome no banco de dados
    $nome = $pegaLista.$nome;
    
    //insere a o nome antigo + o novo registro no banco de dados
 $insereLista = "UPDATE lista_user SET lista ='$nome' WHERE lista = '$pegaLista' ";
    $conectaDB2 = mysqli_query($connect, $insereLista);

    if($conectaDB2) {
       
    }
    else echo 'falha';

    //seleciona pra o registro atualizado do DB
   $validaUsuario = "SELECT lista FROM lista_user where codigo = '$codigo' ";
    $conectaDB = mysqli_query($connect, $validaUsuario);
    $fetch = mysqli_fetch_row ($conectaDB);
    $pegaLista = $fetch[0];
    $dbString= $pegaLista;

    //Transforma a string recuperada do banco de dados em um Array
    $listaArray = explode(',', $dbString);
    //conta os índices do array
    $tamanhoArray = count($listaArray);
    
    //percorre os índices e lista os usuários

    for ($i = 1 ; $i < $tamanhoArray; $i++) {

          
        echo $i.'- '.$listaArray[$i -1].'<br/>'.'<br/>';
        
    }
    echo "<a href='../views/index.html'><h3>Retornar ao ínicio</h3></a>";
?>