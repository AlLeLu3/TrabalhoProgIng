<?php
session_start();
if(isset($_GET['l']) && $_GET['l']=='pt'){
    $_SESSION["idioma"] = 'pt';
}else{
    $_SESSION["idioma"] ='in';
}
header("location: index.php");

?>