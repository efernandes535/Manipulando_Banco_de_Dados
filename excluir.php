<?php
include 'conexao.php';

// Receber o ID do contato a ser excluído
$id = $_GET['id'];

// Excluir o contato do banco de dados
$sql = "DELETE FROM contatos WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Contato excluído com sucesso";
    // Redirecionar para a página de listagem
    header("Location: listar.php"); // Substitua "listar.php" pelo nome da sua página de listagem
} else {
    echo "Erro ao excluir contato: " . $conn->error;
}

$conn->close();
