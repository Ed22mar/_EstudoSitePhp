<?php 
session_start();
    if(!isset($_SESSION['usuario'])):
       header("Location:/../index.php");
    else:
        if($_SESSION['usuario']=="ok"){
            $nomeUsuario=$_SESSION["nomeUsuario"];
        }
    endif;

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../css/bootstrap.min.css">
  </head>
  <body>

    <?php 
        //REDIR PARA A PAGINA INICIAL DO SISTEMA
        $url="http://".$_SERVER['HTTP_HOST']."/_MeuGit/_EstudoSitePhp";
    ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador do Site <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="<?php echo $url."/administrador/inicio.php";?>">Início</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccao/produtos.php">Livros</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccao/encerrar.php">Terminar Secção</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio Web</a>
        </div>
    </nav>

    <div class="container">
        <br/>
        <div class="row">