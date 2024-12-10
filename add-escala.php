<?php
    
    include("conexao.php");

        $nome= $_POST['nome'];
        $especialidade= $_POST['especialidade'];
        $dia= $_POST['dia'];
        $hospital= $_POST['hospital'];

            $sql=" INSERT INTO escala(nome_m, especialidade_m, dias_m, hospital) 
            VALUES ('$nome', '$especialidade', '$dia', '$hospital')";


                if(mysqli_query($conexao, $sql)){
                    echo "Escala cadastrada com sucesso";
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