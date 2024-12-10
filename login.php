<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(224, 255, 255), rgb(133, 212, 230));

        }
        div{
            background-color: rgba(0,0,0,0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px; 
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
    <body>
            <h1>Faça seu login</h1>

            <div>
                <h1>Login</h1>
                <form action="testLogin.php" method="POST">
                    
                
                <input type="text" name="email" placeholder="Email">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                
                </form>
            </div>
    </body>
</html>
    
</html>