<?php
// ... (código para conectar ao banco de dados)

// Consultar todos os contatos
$sql = "SELECT * FROM contatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // ... (código para exibir os contatos em uma tabela HTML)
} else {
    echo "Nenhum contato encontrado.";
}

$conn->close();
