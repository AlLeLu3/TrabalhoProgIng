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
if(!isset($_SESSION['idUsuario'])){
    header("location:index.php");
}
require_once __DIR__ ."/vendor/autoload.php";

$usuaria = Usuario::find($_SESSION['idUsuario']);
if($usuaria->getadmin()==1){
?>
<!--
ADMINSTRADOR
-->
<?php
    require 'dbcon.php';
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
  
    <div class="container mt-4">

        <?php include('mensagem.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <a href="sair.php" class="btn btn-primary"><?=$texto['sair']?></a>
                    </div>
                    <div class="card-header">
                        <h4>
                            <?=$texto['biblioteca']?>
                            <a href="cadastrarautor.php" class="btn btn-primary float-end"><?=$texto['criarAutor']?></a>
                            <a href="cadastrarlivro.php" class="btn btn-primary float-end"><?=$texto['criarLivro']?></a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?=$texto['titulo']?></th>
                                    <th><?=$texto['genero']?></th>
                                    <th><?=$texto['ano']?></th>
                                    <th><?=$texto['autor']?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT l.idLivro, l.Titulo, l.Genero, l.Ano, a.Nome, l.Pdf FROM livro l, autor a WHERE l.idAutor=a.idAutor ORDER BY Titulo ASC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $livro)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $livro['Titulo']; ?></td>
                                                <td><?= $livro['Genero']; ?></td>
                                                <td><?= $livro['Ano']; ?></td>
                                                <td><?= $livro['Nome']; ?></td>
                                                <td>
                                                    <a href="<?=$livro['Pdf']; ?>" target='_blank' class="btn btn-info btn-sm">Download</a>
                                                    <a href="editarlivro.php?idLivro=<?= $livro['idLivro']; ?>" class="btn btn-success btn-sm"><?=$texto['editar']?></a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="excluirlivro" value="<?=$livro['idLivro'];?>" class="btn btn-danger btn-sm"><?=$texto['deletar']?></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> {$texto['restritaSLivro']} </h5>";
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
    
    <footer id='page-footer'>
    <h3>Programming  3 - 2022</h3>
    <h4><?=$texto['dev']?>: Allana dos Santos, Leonardo Haas Pies e Luana Bruch Maurer</h4>
    </footer>

</body>
</html>
<?php
}else{
?>
<!--
USUÁRIO
-->
<?php
    require 'dbcon.php';
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
  
    <div class="container mt-4">

        <?php include('mensagem.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="sair.php" class="btn btn-primary"><?=$texto['sair']?></a>
                    </div>
                    <div class="card-header">
                        <h4><?=$texto['biblioteca']?></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?=$texto['titulo']?></th>
                                    <th><?=$texto['genero']?></th>
                                    <th><?=$texto['ano']?></th>
                                    <th><?=$texto['autor']?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $query = "SELECT l.idLivro, l.Titulo, l.Genero, l.Ano, a.Nome, l.Pdf FROM livro l, autor a WHERE l.idAutor=a.idAutor ORDER BY Titulo ASC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $livro)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $livro['Titulo']; ?></td>
                                                <td><?= $livro['Genero']; ?></td>
                                                <td><?= $livro['Ano']; ?></td>
                                                <td><?= $livro['Nome']; ?></td>
                                                <td>
                                                    <a href="<?=$livro['Pdf']; ?>" target='_blank' class="btn btn-info btn-sm">Download</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> {$texto['restritaSLivro']} </h5>";
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
    
    <footer id='page-footer'>
    <h3>Programming  3 - 2022</h3>
    </footer>
    
</div>
</body>
</html>
