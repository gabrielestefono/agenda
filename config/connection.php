<?php

$host = "localhost";
$user = "gabriel";
$pass = "teste123";
$db = "agenda";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    // Erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
}

?>