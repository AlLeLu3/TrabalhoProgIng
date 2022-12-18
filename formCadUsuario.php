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
    $u->save();
    header("location: index.php");
}
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create an account</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include 'mensagem.php'; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                        <h4><?=$texto['criarconta']?>
                            <a href="index.php" class="btn btn-danger float-end"><?=$texto['cancela']?></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="formCadusuario.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for='email'><?=$texto['emailins']?></label>
                                <input type="email" name="email" id="email" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for='senha'><?=$texto['senha']?></label>
                                <input type="password" name="senha" id="senha" required class="form-control">
                            </div>
                            <div>
                                <input type='submit' class='botao' name='botao' value=<?=$texto['criar']?>>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Create an account</title>
</head>
<body>
    <div class="logo_ifrs">
        <img src="logo_feliz_ifrs.png">
</div>

<div class="login">
<fieldset>
    <form action='formCadUsuario.php' method='post'>
        <label for='email'>E-mail:</label>
        <input type='email' name='email' id='email' required>
        <label for='senha'>Password:</label>
        <input type='password' name='senha' id='senha' required>
        <input type='submit' name='botao' value='Create'>
    
    <a href='index.php'>Cancel</a>
    </form>
</fieldset>
</div>
</body>
</html>

