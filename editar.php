<?php
include 'conexao.php';

// Receber o ID do contato a ser editado
$id = $_GET['id'];

// Consultar o contato no banco de dados
$sql = "SELECT * FROM contatos WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
</head>
<body>
    <h2>Editar Contato</h2>
    <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Telefone: <input type="tel" name="telefone" value="<?php echo $row['telefone']; ?>"><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>

<?php
} else {
    echo "Contato não encontrado.";
}

$conn->close();
?>