<?php
require_once('../dados_banco.php');

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// SQL para deletar
$sql = "DELETE FROM authors WHERE authorid=3";

if ($conn->query($sql) === TRUE)
{
    echo "Record deleted successfully";
} else
{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>