<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="login-box">
        <h2>Cadastrar</h2>
        <form action="processa_registro.php" method="POST">
            <div class="user-box">
                <input type="text" name="nome" require>
                <label >Nome</label>
            </div>
            <div class="user-box">
                <input type="text" name="login" require>
                <label >Login</label>
            </div>
            <div class="user-box">
                <input type="password" name="senha1" requide >
                <label >Senha</label>
            </div>
            <div class="user-box">
                <input type="password" name="senha2" require>
                <label >Repetir senha</label>
            </div class="a">
        <!-- <a href="javascript:validar()">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
   <input type="submit" name="registrar">
             </a> -->
             <a onclick="this.parentNode.submit();">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 Cadastrar
             </a>

             <a href="login.php" >
                 <span></span>  
                 <span></span>
                 <span></span>
                 <span></span>
                 fazer login
             </a>
         
    </div>
    </form>
    <script>
        function validar(){
            var senha = document.getElementById("senha1").value;
            var senha2 = document.getElementById("senha2").value;

            alert(senha); 
            
            if(senha == senha2){
                return true ; 
            }
            else{
                alert("as senhas não conferem");
                return false;
            }
        }
    </script>
</body>
</html>