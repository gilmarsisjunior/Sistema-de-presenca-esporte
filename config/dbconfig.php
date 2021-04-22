<?php 
$host = 'localhost';
$user = 'root' ; 
$password = '';
$base = 'usuarios' ;
$link = $link = mysqli_connect($host, $user, $password , $base);

if(!$link) {
    echo 'Falha em se conectar com o banco de dados, contate um adm';
    exit;
}
else {
    echo 'Conectado com sucesso';
}

?>