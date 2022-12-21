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
    require 'dbcon.php';

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?=$texto['editarli']?></title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('mensagem.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?=$texto['editarl']?> 
                            <a href="restrita.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['idLivro']))
                        {
                            $idLivro = mysqli_real_escape_string($con, $_GET['idLivro']);
                            $query = "SELECT l.idLivro,l.idAutor, l.Titulo, l.Genero, l.Ano, a.Nome FROM livro l, autor a WHERE l.idAutor=a.idAutor and l.idLivro = {$idLivro}";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $livro = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                        <input type="hidden" name="idLivro" value="<?=$livro['idLivro'];?>" class="form-control">

                                    <div class="mb-3">
                                        <label><?=$texto['titulo']?></label>
                                        <input type="text" name="Titulo" value="<?=$livro['Titulo'];?>" required class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label><?=$texto['genero']?></label>
                                        <input type="text" name="Genero" value="<?=$livro['Genero'];?>" required class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label><?=$texto['ano']?></label>
                                        <input type="number" min=1900 max=2023 name="Ano" value="<?=$livro['Ano'];?>" required class="form-control">
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
                                                if($livro['idAutor']==$autor['idAutor']){
                                                    echo "<option value={$autor['idAutor']} selected>{$autor['Nome']}</option>";
                                                }else{
                                                    echo "<option value={$autor['idAutor']} >{$autor['Nome']}</option>";
                                                }
                                            }
                                        }
                                    ?>
                                    </select>
                                    </div>
                                    <div class="mb-3">
                                    <label>PDF</label>
                                        <input name="pdf" type='file' class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        
                                        <button type="submit" name="editarlivro" class="btn btn-primary"><?=$texto['registro']?></button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>?</h4>";
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
