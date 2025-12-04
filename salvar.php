<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acesso inválido!");
}
if (isset($_POST[""])) {
include "conexao.php";
}
$os = $_POST["os"];
$data = $_POST["data"];
$situacao = $_POST["situacao"];
$solicitante = $_POST["solicitante"];
$area = $_POST["area"];

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

$local_equip = $_POST['local_equip'];
$justificativa = $_POST['justificativa'];
$defeito = $_POST['defeito'];
$observacoes = $_POST['observacoes'];

$inicio1 = $_POST['inicio1'];
$fim1 = $_POST['fim1'];
$atividade1 = $_POST['atividade1'];
$tecnico1 = $_POST['tecnico1'];

$inicio2 = $_POST['inicio2'];
$fim2 = $_POST['fim2'];
$atividade2 = $_POST['atividade2'];
$tecnico2 = $_POST['tecnico2'];

$sql = "INSERT INTO ordem_servico 
(os, data, situacao, solicitante, area, nome, telefone, endereco, bairro, cidade, uf, cep,
local_equip, justificativa, defeito, observacoes,
inicio1, fim1, atividade1, tecnico1,
inicio2, fim2, atividade2, tecnico2)
VALUES 
('$os', '$data', '$situacao', '$solicitante', '$area', '$nome', '$telefone', '$endereco', '$bairro',
'$cidade', '$uf', '$cep', '$local_equip', '$justificativa', '$defeito', '$observacoes',
'$inicio1', '$fim1', '$atividade1', '$tecnico1',
'$inicio2', '$fim2', '$atividade2', '$tecnico2')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>OS salva com sucesso!</h1>";
} else {
    echo "Erro ao salvar: " . $conn->error;
}

$conn->close();
?>

