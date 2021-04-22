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
</head>
<body> 
    <h1><?php echo 'Seja bem vindo, '. $_SESSION['usuario'] ; ?></h1>
    <h3>Seu código é:</h3> <input type="text" value="<?php echo $codigo; ?>">
    <a href=""><?php echo 'sair'; session_destroy()  ;?></a>
    
</body>
</html>