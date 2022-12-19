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

if(isset($_POST['excluirlivro']))
{
    $idLivro = mysqli_real_escape_string($con, $_POST['excluirlivro']);

    $query = "DELETE FROM livro WHERE idLivro='$idLivro' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['mensagem'] = $texto['sucexcluir'];
        header("Location: restrita.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensagem'] = $texto['excluir'];
        header("Location: restrita.php");
        exit(0);
    }
}

if(isset($_POST['editarlivro']))
{
    $idLivro = mysqli_real_escape_string($con, $_POST['idLivro']);
    $Titulo = mysqli_real_escape_string($con, $_POST['Titulo']);
    $Genero = mysqli_real_escape_string($con, $_POST['Genero']);
    $Ano = mysqli_real_escape_string($con, $_POST['Ano']);
      
    $query = "UPDATE livro SET Titulo='$Titulo', Genero='$Genero', Ano='$Ano', idAutor= {$_POST['Nome']} WHERE idLivro= $idLivro";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['mensagem'] = $texto['suceditar'];
        header("Location: restrita.php");
        exit(0);
    }
    else{
        $_SESSION['mensagem'] = $texto['editarr'];
        header("Location: restrita.php");
        exit(0);
    }

}

if(isset($_POST['cadastrarlivro'])){
    $Titulo = mysqli_real_escape_string($con, $_POST['Titulo']);
    $Genero = mysqli_real_escape_string($con, $_POST['Genero']);
    $Ano = mysqli_real_escape_string($con, $_POST['Ano']);
    $diretorio = "livros/";
    $nome_arquivo = $_FILES['pdf']['name'];
    $info_name = explode(".",$nome_arquivo);
    $extensao = end($info_name);
    $arquivo = $diretorio.uniqid().".".$extensao;
    move_uploaded_file($_FILES["pdf"]["tmp_name"],$arquivo);
       
    $query = "INSERT INTO livro (Titulo,Genero,Ano,idAutor,Pdf) VALUES ('$Titulo','$Genero','$Ano',{$_POST['Nome']},'$arquivo')";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['mensagem'] = $texto['succadastrar'];
        header("Location: cadastrarlivro.php");
        exit(0);
    }
    else{
        $_SESSION['mensagem'] = $texto['cadastrar'];
        header("Location: cadastrarlivro.php");
        exit(0);
    }
}


if(isset($_POST['cadastrarautor']))
{
    $Nome = mysqli_real_escape_string($con, $_POST['Nome']);
    
    $query = "INSERT INTO autor (Nome) VALUES ('$Nome')";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['mensagem'] = $texto['sucautor'];
        header("Location: cadastrarautor.php");
        exit(0);
    }
    else{
        $_SESSION['mensagem'] = $texto['autorr'];
        header("Location: cadastrarautor.php");
        exit(0);
    }
}
?>
