<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['Data_Emp'];
    $data_venci = $_POST['Data_Vencimento'];
    $data_entreg = $_POST['Data_Entrega'];
    $id_livro = $_POST['Livro_ID'];
    $id_leitor = $_POST['Leitor_ID'];

    $sql = "INSERT INTO emprestimo (Data_Emp, Data_Vencimento, Data_Entrega, Livro_ID, Leitor_ID) VALUES ('$data','$data_venci','$data_entreg',$id_livro,$id_leitor)";
    $stmt = $conn->prepare($sql);
  

    if ($stmt->execute()) {
        echo "Empréstimo feito com sucesso!";
        header('Location: list_empres.php');
        exit();
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}

// Consulta para obter os livros
$sql_livros = "SELECT Livro_ID, Titulo FROM livro";
$result_livros = $conn->query($sql_livros);

// Consulta para obter os leitores
$sql_leitores = "SELECT Leitor_ID, CONCAT(Primeiro_nome, ' ', Ultimo_nome) AS Nome FROM leitor";
$result_leitores = $conn->query($sql_leitores);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Empréstimos</title>
</head>
<body>
    <h1>Adicionar Novo Empréstimo</h1>
    <form method="POST" action="">
        <label>Data do Empréstimo:</label><br>
        <input type="date" name="Data_Emp" required><br>
        <label>Data do Vencimento:</label><br>
        <input type="date" name="Data_Vencimento" required><br>
        <label>Data de Entrega:</label><br>
        <input type="date" name="Data_Entrega"><br>

        <label for="Leitor_ID">Leitor:</label>
        <select id="Leitor_ID" name="Leitor_ID" required>
            <?php
            if ($result_leitores->num_rows > 0) {
                while ($row = $result_leitores->fetch_assoc()) {
                    echo "<option value='" . $row['Leitor_ID'] . "'>" . $row['Nome'] . "</option>";
                }
            } else {
                echo "<option value=''>Nenhum leitor disponível</option>";
            }
            ?>
        </select><br><br>

        <label for="Livro_ID">Livro:</label>
        <select id="Livro_ID" name="Livro_ID" required>
            <?php
            if ($result_livros->num_rows > 0) {
                while ($row = $result_livros->fetch_assoc()) {
                    echo "<option value='" . $row['Livro_ID'] . "'>" . $row['Titulo'] . "</option>";
                }
            } else {
                echo "<option value=''>Nenhum livro disponível</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Adicionar">
    </form>

    <br><br><br><br><br>
    <div class="celula">
        <input type="button" value="Lista de Empréstimos" class="custom-button" onclick="window.open('list_empres.php', 'self')"><br><br><br>
        <input type="button" value="Voltar ao menu" class="custom-button" onclick="window.open('index.html', 'self')">
    </div>
</body>
</html>
