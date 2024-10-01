<?php
require_once('../dados_banco.php');

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error)
{
    die("Falha na conexão: " . $conn->connect_error);
}

// SQL para deletar
$sql = "DELETE FROM authors WHERE authorid=3";

if ($conn->query($sql) === TRUE)
{
    echo "Registro deletado com sucesso";
} else
{
    echo "Erro deletando registro: " . $conn->error;
}

$conn->close();
?>