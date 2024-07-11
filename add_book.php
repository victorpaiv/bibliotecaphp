<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$ano_publicacao = $_POST['ano_publicacao'];
$isbn = $_POST['isbn'];
$sql = "INSERT INTO livro (titulo, Genero, Ano_publicacao, isbn) VALUES ('$titulo', '$genero',
$ano_publicacao, '$isbn')";
if ($conn->query($sql) === TRUE) {
echo "Livro adicionado com sucesso!";
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
    <title>Adicionar Livro</title>
    </head>
    <body>
    <h1>Adicionar Livro</h1>
    <form method="POST" action="">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br>
    <label>Gênero:</label><br>
    <input type="text" name="genero"><br>
    <label>Ano de Publicação:</label><br>
    <input type="number" name="ano_publicacao"><br>
    <label>ISBN:</label><br>
    <input type="text" name="isbn" required><br><br>
    <input type="submit" value="Adicionar">
    </form>
    <br><br><br><br><br>
<div class="celula" >  
<input type="button" value=" lista de livros" class="custom-botton" onclick="window.open('list_books.php','self')"> <br><br><br>

<input type="button" value="Voltar ao menu" class="custom-botton" onclick="window.open('index.html','self')"> 

       
    </body>
    </html>
    