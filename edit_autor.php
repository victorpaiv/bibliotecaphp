<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $autor_id = $_POST['autor_id'];
        $nome1 = $_POST['nome1'];
        $nome2 = $_POST['nome2'];
        $data_aniver = $_POST['data_aniver'];
        $sql = "UPDATE autor SET Primeiro_Nome='$nome1', Ultimo_Nome='$nome2', Data_Aniversario='$data_aniver'
        WHERE Autor_ID=$autor_id";
        if ($conn->query($sql) === TRUE) {
        echo "Autor adicionado com sucesso!";
        header('Location: list_autor.php');
} else {
echo "Erro: " . $sql . "<br>" . $conn->error;
}
} else {
$autor_id = $_GET['id'];
$sql = "SELECT * FROM autor WHERE Autor_ID =$autor_id";
$result = $conn->query($sql);
$autor = $result->fetch_assoc();
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Editar Autor</title>
</head>
<body>
<form method="POST" action="">
<input type="hidden" name="autor_id" value="<?php echo $autor['Autor_ID']; ?>">
    <label>Primeiro nome: </label> <br>
    <input type="text" name="nome1"  value="<?php echo $autor['Primeiro_Nome']; ?>" required><br>
    <label>Ultimo nome: </label><br>
    <input type="text" name="nome2" value="<?php echo $autor['Ultimo_Nome']; ?>" required><br>
    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_aniver" value="<?php echo $autor['Data_Aniversario']; ?>"><br>

    <input type="submit" value="Alterar">
    </form>
<br><br><br><br><br>
<div class="celula" >  
        <input type="button" value="Voltar" class="custom-botton" onclick="window.open('index.html','self')">


</body>
</html>
