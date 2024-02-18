<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Registros</title>
</head>
<body>
    <h1>Consultar Registros</h1>
    <form action="consulta.php" method="GET">
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf">
        <input type="submit" value="Consultar">
    </form>

    <?php
    // Verifica se o CPF foi enviado via GET
    if (isset($_GET['cpf'])) {
        // Inclui o arquivo de conexão
        include("conexao.php");

        // Obtém o CPF enviado via GET
        $cpf = $_GET['cpf'];

        // Consulta SQL para obter os registros do CPF fornecido
        $sql = "SELECT * FROM usuario WHERE cpf='$cpf'";
        $resultado = mysqli_query($conexao, $sql);

        // Verifica se há resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Loop pelos resultados e exibição
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<p>Nome: " . $row['nome'] . "</p>";
                echo "<p>CPF: " . $row['cpf'] . "</p>";
                echo "<p>Data de Nascimento: " . $row['data_nascimento'] . "</p>";
            }
        } else {
            echo "<p>Nenhum registro encontrado para o CPF fornecido.</p>";
        }

        // Fecha a conexão
        mysqli_close($conexao);
    }
    ?>
</body>
</html>