<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista autor</title>
</head>
<body>
    






<?php
include 'config.php';
$sql = "SELECT * FROM autor";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Lista de Autores</title>
</head>
<body>
<h1>adicionar e  listar</h1>
<input type="button" value="Adcionar Autor" class="custom-botton" onclick="window.open('add_autor.php','self')"> <br><br><br>



<table border="1">
<tr>
<th>ID</th>
<th>Primeiro nome</th>
<th>Ultimo nome</th>
<th>data de Nascimento</th>

</tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['Autor_ID']; ?></td>
<td><?php echo $row['Primeiro_Nome']; ?></td>
<td><?php echo $row['Ultimo_Nome']; ?></td>
<td><?php echo $row['Data_Aniversario']; ?></td>

<td>
<a href="edit_autor.php?id=<?php echo $row['Autor_ID']; ?>">Editar</a>
        <a href="delete_autor.php?id=<?php echo $row['Autor_ID']; ?>" onclick="return confirm('Tem certeza que deseja apagar este livro?')">Apagar</a>
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
