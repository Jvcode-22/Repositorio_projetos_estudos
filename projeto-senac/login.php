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
    <!--<form method="POST" action="autenticar.php">
        <DIV class="eu">
                <h1>Faça login</h1>
                <p>Usuario</p>
                    <input type="text" name="login">
                <p>senha</p>
                    <input type="password" name="senha">
                <p>
                    <button type="submit">enviar</button>
                </p>
                <p>
                    <button type="submit"><a href="registro.php"> Cadastrar</a></button>
                </p>
        </DIV>
    </form>
    -->

    <div class="login-box">
        <h2>Login</h2>
        <form action="autenticar.php" method="POST">
            <div class="user-box">
                <input type="text" name="login" required>
                <label >Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="senha" required>
                <label >password</label>
            </div>
             <a onclick="this.parentNode.submit();" >
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 entrar
             </a>
             <a href="registro.php">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 Cadastrar
             </a>
             <a href="index.php">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 ir para página
             </a>
         
    </div>
    </form>
</body>
</html>