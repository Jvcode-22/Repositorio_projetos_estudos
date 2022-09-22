
<?php 
$login = $_POST["login"];
$senha = $_POST["senha"];
$senhacript = md5($senha);
include "conexao.php";
$sql = "select * from usuario where login = '" . $login . "' and senha = '" . $senhacript . "'";

$resultado = mysqli_query($con2, $sql);
if($linha = mysqli_fetch_array($resultado)){
    session_start();
    $_SESSION["usuario_logado"] = $linha["nome"];
    
    header("Location: index.php");
}else{
    echo "<script>
    alert('usuario invalido');
    window.location = 'login.php';
    </script>
    ";
}
?>
