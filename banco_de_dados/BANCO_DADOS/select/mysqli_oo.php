<?php
require_once('../dados_banco.php');

try {
    // Criação da conexão PDO
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8"; // Adiciona charset para evitar problemas de encoding
    $conn = new PDO($dsn, $username, $password);

    // Configura PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query SQL
    $sql = "SELECT * FROM authors";

    // Executa a query
    $stmt = $conn->query($sql);

    // Loop para exibir os resultados
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo htmlspecialchars($row['firstName']). " - " .htmlspecialchars($row['lastName'])."<br/>\n";
    }

} catch (PDOException $e) {
    // Exibe mensagem de erro
    echo "Erro: " . $e->getMessage();
}
?>