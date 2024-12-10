<?php

        include("conexao.php");

        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        $cidade= $_POST['cidade'];
        $estado= $_POST['estado'];
        $endereco= $_POST['endereco'];

            $sql="INSERT INTO cadastro_h (nome_h, email_h, senha_h, cidade_h, estado_h, endereco_h) 
            VALUES ('$nome', '$email', '$senha', '$cidade', '$estado', '$endereco')";


                if(mysqli_query($conexao, $sql)){
                    echo "Usuário cadastrado com sucesso";
                }

                else{
                    echo "Erro".mysqli_connect_error($conexao);
                }
                mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href=index.html><button type="button" class="btn btn-secondary">Voltar ao ínicio</button></a>
</body>
</html>