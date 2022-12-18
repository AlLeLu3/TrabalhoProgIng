<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Lista dos livros.</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados do livro 
                            <a href="restrita.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['idLivro']))
                        {
                            $idLivro = mysqli_real_escape_string($con, $_GET['idLivro']);
                            $query = "SELECT l.idLivro, l.Titulo, l.Genero, l.Ano, a.Nome FROM livro l, autor a WHERE l.idAutor=a.idAutor ORDER BY Titulo ASC";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $livro = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Título</label>
                                        <p class="form-control">
                                            <?=$livro['Titulo'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Gênero</label>
                                        <p class="form-control">
                                            <?=$livro['Genero'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ano</label>
                                        <p class="form-control">
                                            <?=$livro['Ano'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Autor</label>
                                        <p class="form-control">
                                            <?=$livro['Nome'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>