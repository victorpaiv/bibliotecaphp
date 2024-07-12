<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$leitor_id = $_POST['leitor_id'];
$nome1 = $_POST['nome1'];
$nome2 = $_POST['nome2'];
$data_aniver = $_POST['data_aniver'];
$morada= $_POST['morada'];
$telemovel= $_POST['telemovel'];
$email= $_POST['email'];
$sql = "UPDATE leitor SET Primeiro_nome='$nome1', Ultimo_nome='$nome2', Data_Aniversario='$data_aniver',
Morada='$morada', Telemovel='$telemovel', Email='$email' WHERE Leitor_ID=$leitor_id";
if ($conn->query($sql) === TRUE) {
echo "leitor atualizado com sucesso!";
header('Location: list_leitor.php');
} else {
echo "Erro: " . $sql . "<br>" . $conn->error;
}
} else {
$leitor_id = $_GET['id'];
$sql = "SELECT * FROM leitor WHERE Leitor_ID=$leitor_id";
$result = $conn->query($sql);
$leitor = $result->fetch_assoc();
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Editar Livro</title>
</head>
<body>
<form method="POST" action="">
<input type="hidden" name="leitor_id" value="<?php echo $leitor['Leitor_ID']; ?>">
    <label>Primeiro nome: </label> <br>
    <input type="text" name="nome1"  value="<?php echo $leitor['Primeiro_nome']; ?>" required><br>
    <label>Ultimo nome: </label><br>
    <input type="text" name="nome2" value="<?php echo $leitor['Ultimo_nome']; ?>" required><br>
    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_aniver" value="<?php echo $leitor['Data_Aniversario']; ?>"><br>
    <label>Morada:</label><br>
    <input type="text" name="morada" value="<?php echo $leitor['Morada']; ?>"><br>
    <label>telemovel:</label><br>
    <input type="text" name="telemovel"  value="<?php echo $leitor['Telemovel']; ?>"><br>
    <label>Email:</label><br>
    <input type="text" name="email" value="<?php echo $leitor['Email']; ?>"><br><br>
    <input type="submit" value="Adicionar">
    </form>
<br><br><br><br><br>
<div class="celula" >  
        <input type="button" value="Voltar" class="custom-botton" onclick="window.open('index.html','self')">


</body>
</html>
