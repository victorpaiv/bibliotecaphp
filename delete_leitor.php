<?php
include 'config.php';
$leitor_id = $_GET['id'];
$sql = "DELETE FROM leitor WHERE Leitor_ID=$leitor_id";
if ($conn->query($sql) === TRUE) {
echo "Leitor liminado com sucesso!";
} else {
echo "Erro ao eliminar: " . $conn->error;
}
$conn->close();
header('Location: list_leitor.php');
?>