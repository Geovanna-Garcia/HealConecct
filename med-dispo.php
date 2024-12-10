<?php
    include('conexao.php');
        $sql = "SELECT * FROM escala ORDER BY nome_m DESC";

        $result= $conexao->query($sql);

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>

    <style>
    body{
        background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        color: white;
        text-align: center;
    }
    .table-bg{
        background: rgba(0,0,0,0.3);
        border-radius: 15px 15px 0 0;
    }
    </style>
</head>
            <h1>Tabela de médicos</h1>
    <div class="m-5">
        <table class="table text-black table-bg">
    <thead>
        <tr>
        <th scope="col">Nome do Médico</th>
        <th scope="col">Especialidade</th>
        <th scope="col">Dias que Atende</th>
        <th scope="col">Hospital que atende</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo "<td>" . $user_data['nome_m']. "</td>";
                echo "<td>" . $user_data['especialidade_m']. "</td>";
                echo "<td>" . $user_data['dias_m']. "</td>";
                echo "<td>" . $user_data['hospital']. "</td>";
                
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
    </div>


    
    </tbody>
    </table>
    </div>
    <a href=index.html><button type="button" class="btn btn-secondary">Voltar ao ínicio</button></a>
    <body>
    
</body>
</html>