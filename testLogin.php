<?php

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['email'])){
            //acessa

            include_once('conexao.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            //print_r('Email: ' . $email);
            //print_r('<br>');
            //print_r('Senha: ' . $senha);

            $sql= "SELECT * FROM cadastro_h WHERE email_h = '$email' and senha_h = '$senha'";

            $result = $conexao->query($sql);

            //print_r($result);

            if(mysqli_num_rows($result) < 1){
                header('Location: cadastra-hospital.html');
            }
            else{
                header('Location: adicione-escala.html');
            }
    }
    else{
        //não acessa
        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<meta name="viewport" content="width=<a href=index.html><button type="button" class="btn btn-secondary">Voltar ao ínicio</button></a>, initial-scale=1.0">
</body>
</html>