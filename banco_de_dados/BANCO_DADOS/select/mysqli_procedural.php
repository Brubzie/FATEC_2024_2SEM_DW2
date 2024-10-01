<?php
require_once('../dados_banco.php');

// Cria conxão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica conexão
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT AuthorID, firstname, lastname FROM authors WHERE lastname='Doe'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["AuthorID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else
{
    echo "0 results";
}

mysqli_close($conn);
?>