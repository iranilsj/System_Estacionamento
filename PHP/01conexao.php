<?php
//BANCO DE DADOS
//1 CREDENCIAIS DO BANCO
$DB_HOST = 'localhost';
$DB_USUARIO = 'root';
$DB_SENHA = '';
$DB_BANCO = 'estacionamento';
//2 CRIAR CONEXAO - ORIENTADO A OBJETOS
$conexao = mysqli_connect($DB_HOST, $DB_USUARIO, $DB_SENHA, $DB_BANCO);
//CONFERIR CONEXAO

/*if ($conexao->connect_errno){
    echo"Verificar a sua conexão!!!";
}else {
    echo" Banco de dados Conectado";
}*/

?>