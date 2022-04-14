<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
            if(isset($_POST['enviado'])){
                $login = 'ericksilverio';
                $senha = '123456';
                $login_formulario = $_POST['login'];
                $senha_formulario = $_POST['senha'];
                if($login == $login_formulario && $senha == $senha_formulario){
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                } else{
                    echo "E-mail ou Senha inválido(s)!<br>";
                }
            }
            include('login.php');
        } else{
            include('home.php');
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
        }
    ?>
</body>
</html>