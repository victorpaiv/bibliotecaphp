<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nome1 = $_POST['nome1'];
$nome2 = $_POST['nome2'];
$data_aniver = $_POST['data_aniver'];
$morada = $_POST['morada'];
$telemovel = $_POST['telemovel'];
$email = $_POST['email'];

$sql = "INSERT INTO leitor (Primeiro_nome, Ultimo_nome, Data_Aniversario, Morada, Telemovel, Email) VALUES ('$nome1', '$nome2',
'$data_aniver','$morada', '$telemovel','$email')";
if ($conn->query($sql) === TRUE) {
echo "Leitor adicionado com sucesso!";
header('Location: list_books.php');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    }
    $conn->close();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Adicionar Leitor</title>
    </head>
    <body>
    <h1>Adicionar </h1>
    <form method="POST" action="">
    <label>Primeiro nome:</label><br>
    <input type="text" name="nome1" required><br>
    <label>Ultimo nome: </label><br>
    <input type="text" name="nome2" required><br>
    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_aniver"><br>
    <label>Morada:</label><br>
    <input type="text" name="morada"><br>
    <label>telemovel:</label><br>
    <input type="text" name="telemovel" ><br>
    <label>Email:</label><br>
    <input type="text" name="email" ><br><br>
    <input type="submit" value="Adicionar">
    </form>
    <br><br><br><br><br>
<div class="celula" >  
<input type="button" value=" lista de Leitores" class="custom-botton" onclick="window.open('list_leitor.php','self')"> <br><br><br>

<input type="button" value="Voltar ao menu" class="custom-botton" onclick="window.open('index.html','self')"> 

       
    </body>
    </html>
    


	