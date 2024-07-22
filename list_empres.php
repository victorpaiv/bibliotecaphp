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
$sql = "SELECT * FROM emprestimo";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Lista de Emprestimos</h1>
<input type="button" value="Adcionar Emprestimo" class="custom-botton" onclick="window.open('add_book.php','self')"> <br><br><br>



<table border="1">
<tr>
<th>Emprestimo Id</th>
<th>Livro Id</th>
<th>Leitor Id</th>
<th>Data Emprestimo</th>
<th>Data Vencimento</th>
<th>Data de Entrega</th>

</tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['Emprestimo_ID']; ?></td>
<td><?php echo $row['Livro_ID']; ?></td>
<td><?php echo $row['Leitor_ID']; ?></td>
<td><?php echo $row['Data_Emp']; ?></td>
<td><?php echo $row['Data_Vencimento']; ?></td>
<td><?php echo $row['Data_Entrega']; ?></td>
<td>
<a href="edit_empres.php?id=<?php echo $row['Emprestimo_ID']; ?>">Editar</a>
        <a href="delete_empres.php?id=<?php echo $row['Emprestimo_ID']; ?>" onclick="return confirm('Tem certeza que deseja apagar este Emprestimo?')">Apagar</a>
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
