<?php
if(isset($_POST['email']) && isset($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == 'usuario' && $senha == '1234'){
        header("location: ../main-page/index.php"); 
        die();
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="index.php" method="post">
                    <h2>Login ADM</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="email" class="tira_fundo" required>
                        <label for="">E-mail</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="senha" class="tira_fundo" required>
                        <label for="">Senha</label>
                    </div>
                    <button type="submit" name="envia_form">Entrar</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>