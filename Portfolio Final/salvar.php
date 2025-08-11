<?php
 
include ('conexao.php');
 
$name = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem']; 
 
$sqlInsert = "INSERT INTO contatos(name, email, telefone, assunto, mensagem) VALUES('$name', '$email','$telefone','$assunto','$mensagem');";
$result = mysqli_query($conexao, $sqlInsert);
 
if(!$result){
    die('erro ao inserir no bando de dados.');
}
 
header("location: envio.php");