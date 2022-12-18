<?php
session_start();
require 'dbcon.php';
if(isset($_SESSION['idioma'])){
    if($_SESSION['idioma']=='pt'){
        require 'idioma_pt.php';        
    }else{
        require 'idioma_in.php';
    }
}else{
    require 'idioma_in.php';
}
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?=$texto['autor']?>.</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include 'mensagem.php'; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?=$texto['registrar']?>
                            <a href="restrita.php" class="btn btn-danger float-end"><?=$texto['voltar']?></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label><?=$texto['autor']?></label>
                                <input type="text" name="Nome" required class="form-control">
                            </div>
                            

                            <div class="mb-3">
                                <button type="submit" name="cadastrarautor" class="btn btn-primary"><?=$texto['registro']?></button>
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
