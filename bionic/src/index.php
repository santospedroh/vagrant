<?php
echo "Testando conexao <br /> <br />";
$servername = "172.0.1.100";
$username = "phpuser";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>