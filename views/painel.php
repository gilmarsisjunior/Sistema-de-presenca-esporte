<?php 
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }
require_once('../config/codigo.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/stylepainel.css">
</head>
<body> 

<div class="posiciona-nome">
<h1><?php echo 'Seja bem vindo, <br/> '. $_SESSION['usuario'] ; ?></h1> 

</div>
    <div class="posiciona">
     
    <h3>Seu código</h3> <input type="text" value="<?php echo $codigo; ?>">
    <a href=""><?php echo 'sair'; session_destroy()?></a>
</div>  
</body>
</html>