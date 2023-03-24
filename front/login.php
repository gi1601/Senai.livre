<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>
<body>
    
    <header class="header-login">
        <img src="../img/senai.png" alt="Logo">
        <nav>
            <a href="index.php">Sair</a>
        </nav>
    </header>

    <main class="main">
        <section id="form" class="form-formulario-logar">
            <div class="caixa">
                <div id="form-texto">
                    <h1>Logar</h1>
                </div>
                <div id="form-formulario">
                    <form action="" method="POST">
                        <div class="form-formulario-email">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" placeholder="Informe seu login" required>
                        </div>
                        <div class="form-formulario-senha">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Informe sua senha" required>
                        </div>
                        <br> 
                        <div class="form-formulario-submit">
                        <button type= "subtmit">Logar</button>
                        <br> 
                </div>
                <div class="form-formulario-submit2">
                    <a href="registro.html"><button type="button">Ainda não se cadastrou? Cadastre-se</button></a>
                </div>
            </div>
            
       </section>
    </main>
</body>
</html>



<?php
    include("../conexao.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue (":login", $login);
        $stmt->bindValue (":senha", $senha);
        $stmt->execute();

        if($stmt->RowCount() >0){
            echo "Pode logar";
        }else {
            echo "Não pode logar";
        }
    }

    include("../front/rodape.php");
        
?>