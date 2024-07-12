<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nome1 = $_POST['nome1'];
$nome2 = $_POST['nome2'];
$data_aniver = $_POST['data_aniver'];


$sql = "INSERT INTO autor (Primeiro_Nome, Ultimo_Nome, Data_Aniversario) VALUES ('$nome1', '$nome2',
'$data_aniver')";
if ($conn->query($sql) === TRUE) {
echo "Autor adicionado com sucesso!";
header('Location: list_autor.php');
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
 
    <input type="submit" value="Adicionar">
    </form>
    <br><br><br><br><br>
<div class="celula" >  
<input type="button" value=" lista de Leitores" class="custom-botton" onclick="window.open('list_autor.php','self')"> <br><br><br>

<input type="button" value="Voltar ao menu" class="custom-botton" onclick="window.open('index.html','self')"> 

       
    </body>
    </html>
    

