<?php
require 'dbcon.php';
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
    <div class="container mt-4">

        <?php include('mensagem.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <?=$texto['autores']?> 

                            <a href="restrita.php" class="btn btn-danger float-end"><?=$texto['voltar']?></a>
                            <a href="cadastrarautor.php" class="btn btn-primary float-end"><?=$texto['criarAutor']?></a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?=$texto['autor']?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM autor a ORDER BY Nome ASC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $autor)
                                        {
                                            ?>
                                                <td><?= $autor['Nome']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> {$texto['restritaSAutor']} </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php