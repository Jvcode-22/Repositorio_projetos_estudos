<?php

    //conexão com o mysql(host, usuário, senha, banco de dados) //Estilo Proceduraç
  //  $con = mysqli_connect("localhost", "root", "", "usuario"); 
    
    //Estilo Orientado ao Objeto
    $con2 = new mysqli("localhost", "root", "", "madureira");
    if(mysqli_connect_errno()){
        echo "Erro ao conectar com o banco de dados";
        exit();
    }
?>