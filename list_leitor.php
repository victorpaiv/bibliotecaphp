<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes</title>
</head>
<body>
    






<?php
include 'config.php';
$sql = "SELECT * FROM leitor";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Lista de Leitores</title>
</head>
<body>
<h1>Lista de Leitores</h1>
<input type="button" value="Adcionar Leitor" class="custom-botton" onclick="window.open('add_leitor.php','self')"> <br><br><br>



<table border="1">
<tr>
<th>Leitor id</th>
<th>Primeiro nome</th>
<th>Ultimo nome</th>
<th>data de nascimento</th>
<th>Morada</th>
<th>telemovel</th>
<th>Email</th>
</tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['Leitor_ID']; ?></td>
<td><?php echo $row['Primeiro_nome']; ?></td>
<td><?php echo $row['Ultimo_nome']; ?></td>
<td><?php echo $row['Data_Aniversario']; ?></td>
<td><?php echo $row['Morada']; ?></td>
<td><?php echo $row['Telemovel']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td>
<a href="edit_leitor.php?id=<?php echo $row['Leitor_ID']; ?>">Editar</a>
        <a href="delete_leitor.php?id=<?php echo $row['Leitor_ID']; ?>" onclick="return confirm('Tem certeza que deseja apagar este Leitor ?')">Apagar</a>
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
<input type="button" value="Voltar ao Menu" class="custom-botton" onclick="window.open('index.html','self')">


</body>
</html>




