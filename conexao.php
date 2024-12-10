<?php

   $servidor="localhost";
   $usuario="root";
   $senha="";
   $dbname="hospital";
   $port = 3307;
      
      
      $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname, $port);
      if(!$conexao){
         die("Houve um erro" .mysqli_connect_error());
}

?>