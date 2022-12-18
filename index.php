<?php
session_start();
if(isset($_SESSION['idioma'])){
    if($_SESSION['idioma']=='pt'){
        require 'idioma_pt.php';        
    }else{
        require 'idioma_in.php';
    }
}else{
    require 'idioma_in.php';
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $u = new Usuario($_POST['email'],$_POST['senha']);
    if($u->authenticate()){  
        header("location: restrita.php");
    }else{
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include 'mensagem.php'; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                        <h4><?=$texto['login']?> 
                            <a href="idioma.php?l=pt" class="btn btn-primary float-end">port</a>
                            <a href="idioma.php?l=in" class="btn btn-primary float-end">ing</a>
                            </h4>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for='email'><?=$texto['emailins']?></label>
                                <input type="email" name="email" id="email" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for='senha'><?=$texto['senha']?></label>
                                <input type="password" name="senha" id="senha" required class="form-control">
                            </div>
                            <div>
                                <input type='submit' class='botao' name='botao' value=<?=$texto['logar']?>>
                            </div>
                        </form>
                        <br>
                <div class="card">
                    <div class="card-body">
                        <h5><?=$texto['primeiravez']?></h5>
                        <p><?=$texto['contaacesso']?></p>
                        <form action="index.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <a href='formCadUsuario.php' class="btn btn-primary"><?=$texto['criar']?></a>
                            </div>
                    </div>
                </div>            
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Login page</title>
</head>
<body>
    <div class="logo_ifrs">
        <img src="logo_feliz_ifrs.png">
    </div>
    <br>
<div class="login">
<fieldset>
    <?php/*
    echo "<h1>Login</h1>";
    ?>
    <br>
    <form action='index.php' method='post'>
        <label for='email'>Institutional E-mail:</label>
        <input type='email' name='email' id='email' required>
        <br>
        <label for='senha'>Password:</label>
        <input type='password' name='senha' id='senha' required>
        <input type='submit' class='botao' name='botao' value='Log in'>
    </form>
    <br>
    <hr>
    <br>
    <?php/*
    echo "<h3>First time here?</h3>";
    echo "<h4>Create your account to have a full access to this site.</h4>";
    ?>
    <br>
    <a href='formCadUsuario.php'>Create new account</a>
    <br>
    <hr>
</fieldset>
</div>
</body>
</html>