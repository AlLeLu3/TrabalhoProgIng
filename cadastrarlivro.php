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

    <title><?=$texto['livros']?>.</title>
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
                                <label><?=$texto['titulo']?></label>
                                <input type="text" name="Titulo" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?=$texto['genero']?></label>
                                <input type="text" name="Genero" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?=$texto['ano']?></label>
                                <input type="number" min=1900 max=2023 name="Ano" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?=$texto['autor']?></label>
                                <select name="Nome" required class="form-control">
                            <?php
                                $query = "SELECT Nome, idAutor FROM autor ORDER BY Nome ASC";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $autor){
                                        echo "<option value={$autor['idAutor']}>{$autor['Nome']}</option>";
                                    }
                                }
                            ?>
                            </select>
                            </div>
            

                            <div class="mb-3">
                                <label>PDF</label>
                                <input name="pdf" type='file' required class="form-control">
                            </div>
                            

                            <div class="mb-3">
                                <button type="submit" name="cadastrarlivro" class="btn btn-primary"><?=$texto['registro']?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html
