<?php 
session_start();

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


 <h1> Seja bem vindo, <?php echo $_SESSION['nome'] ?></h1> <br/>
 <h2><?php echo $_SESSION['nome'] ?>, Desejs confirmar sua presença? </h2>

    
</body>
</html>