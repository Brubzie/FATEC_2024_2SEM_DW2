<?php

require_once('../dados_banco.php');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM authors WHERE authorid=3";

if (mysqli_query($conn, $sql)) {
    echo "Registro deletado com sucesso";
} else {
    echo "Erro deletando registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>