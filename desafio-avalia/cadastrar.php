<?php
session_start();
include("conexao.php");

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$valor = $_POST['valor'];

$sql = "INSERT INTO veiculo (marca, modelo, ano, valor, data_cadastro) VALUES ('$marca', '$modelo', '$ano', '$valor', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

if(empty($_POST['marca']) || empty($_POST['modelo']) || empty($_POST['ano']) || empty($_POST['valor'])){
	$_SESSION['erro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>