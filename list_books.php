<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    






<?php
include 'config.php';
$sql = "SELECT * FROM livro";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Lista de Livros</title>
</head>
<body>
<h1>Lista de Livros</h1>
<input type="button" value="Adcionar Livro" class="custom-botton" onclick="window.open('add_book.php','self')"> <br><br><br>



<table border="1">
<tr>
<th>ID</th>
<th>Título</th>
<th>Gênero</th>
<th>Ano de Publicação</th>
<th>ISBN</th>
<th>Ações</th>
</tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['Livro_ID']; ?></td>
<td><?php echo $row['Titulo']; ?></td>
<td><?php echo $row['Genero']; ?></td>
<td><?php echo $row['Ano_Publicacao']; ?></td>
<td><?php echo $row['ISBN']; ?></td>
<td>
<a href="edit_book.php?id=<?php echo $row['Livro_ID']; ?>">Editar</a>
        <a href="delete_book.php?id=<?php echo $row['Livro_ID']; ?>" onclick="return confirm('Tem certeza que deseja apagar este livro?')">Apagar</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
<?php
$conn->close();
?>
<br><br><br><br><br>

<div class="celula" >  
<input type="button" value="Voltar" class="custom-botton" onclick="window.open('index.html','self')">


</body>
</html>