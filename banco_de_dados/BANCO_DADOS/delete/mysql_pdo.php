<?php

require_once('../dados_banco.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Define o modo de erro PDO como exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL para apagar um registro
    $sql = "DELETE FROM authors WHERE authorid=3";

    // Usa exec() porquê nenhum resultado é retornado
    $conn->exec($sql);
    echo "Registro deletado com sucesso";
} catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>