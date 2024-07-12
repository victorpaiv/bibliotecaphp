<?php
include 'config.php';
$autor_id = $_GET['id'];
$sql = "DELETE FROM autor WHERE Autor_ID=$autor_id";
if ($conn->query($sql) === TRUE) {
echo "Autor liminado com sucesso!";
} else {
echo "Erro ao eliminar: " . $conn->error;
}
$conn->close();
header('Location: list_autor.php');
?>