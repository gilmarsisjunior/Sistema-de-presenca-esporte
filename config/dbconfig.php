<?php 
$host = 'localhost';
$user = 'root' ; 
$password = '';
$base = 'usuarios' ;
$connect = mysqli_connect($host, $user, $password , $base);

if(!$connect) {
    echo 'Falha em se conectar com o banco de dados, contate um adm';
    exit;
}
else {
;
}

?>