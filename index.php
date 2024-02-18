<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method= "POST">
        <label for="">Nome: </label>
        <input type="text" name = "nome">

        <label for="">CPF: </label>
        <input type="number" name = "cpf">

        <label for="">data_nascimento: </label>
        <input type="date" name = "data_nascimento">

        <input type= "submit" value="Enviar">
    </form>
    <h1>
        <?php 
        
        include("conexao.php");
        include("consulta.php");

        $cpf= $_POST['cpf'];
        $nome= $_POST['nome'];
        $data_nascimento= $_POST['data_nascimento'];

        $sql= "INSERT INTO usuario(cpf, nome, data_nascimento) VALUES ('$cpf', '$nome', '$data_nascimento')";
        
        if(mysqli_query($conexao, $sql)){
            print "Cadastrado";
        }
        else{
            print "Erro";
        }
        mysqli_close($conexao)

        ?>
    </h1>
</body>
</html>