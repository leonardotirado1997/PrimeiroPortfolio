<?php

if(!isset($_SESSION)) {
    session_start ();
}

$servidor = 'localhost:3306';
$usuario = 'root';
$senha = 'root';
$bd ='portfolio';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die('Falha ao conectar: ' . mysqli_connect_error()) ;
}
