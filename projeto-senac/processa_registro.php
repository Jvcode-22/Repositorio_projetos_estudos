<?php
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha1"];
$senha2 = $_POST["senha2"];

 if(isset($_POST['registrar']))
{
    if(empty($_POST['nome'])    || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100){
        echo "<script> alert('Preencha o campo nome corretamente') 
        window.location = 'registro.php';
        </script>";
        die();
    }
    if(empty($_POST['login'])  || strlen($_POST['login']) < 3 || strlen($_POST['login']) > 50){
        echo  "<script> alert('Preencha o campo com um login válido') 
        window.location = 'registro.php';
        </script>";
        die();
    }
    if(empty($_POST['senha1'])  || strlen($_POST['senha1']) < 8 || strlen($_POST['senha1']) > 50){
        echo  "<script> alert('Crie uma senha com mínimo de oito caracteres') 
        window.location = 'registro.php';
        </script>";
        die();
    }
    if($_POST["senha1"] != $_POST["senha2"]){
        echo  "<script> alert('As senhas não são iguais') 
        window.location = 'registro.php';
        </script>";
        die();
    }
    else{
        echo "<script> alert('Usuário cadastrado com sucesso!') 
        window.location = 'registro.php';
        </script>";
    }
   
}
else{
    echo "<script> alert('Usuário cadastrado com sucesso!') 
    window.location = 'registro.php';
    </script>";
}

//$con = mysqli_connect("localhost" , "root" , "" , "joao");

include "conexao.php";

$senhacripto = md5($senha); 

$sql  = "insert into usuario(login , senha, nome)
values('" . $login . "', '" . $senhacripto . "' , '" . $nome . "')"; 

mysqli_query($con2 , $sql);

//header("Location: registro.php");
?>