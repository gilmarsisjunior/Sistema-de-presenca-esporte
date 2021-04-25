<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir código</title>
    <link rel="stylesheet" href="../style/styleconfirma.css">
</head>
<body>

<div class="posiciona-div">
            <h3>Digite seu Nome & Código</h3>
        </div>
    <div class="posiciona-form">
    <form action="../config/lista.php" method="POST" class="confirmar-form">
        <input type="text" name="login" placeholder="Nome" required id="nome1" autocomplete="off"> <br/><br/>
        <input type="text" name="codigo" placeholder="Insira o código" required id="nome1"autocomplete="off"> <br/><br/>
        <input type="submit" value="Entrar" id="envia" class="botao">

    </form>
</div>
</body>
</html>
