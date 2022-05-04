<?php 
session_start();
if($_POST){
    if(($_POST['usuario']=="dev") && ($_POST['senha']=="1234")){
        $_SESSION['usuario']="ok";
        $_SESSION['nomeUsuario']="Dev";

        header('Location:inicio.php');
    }else{
        $mensagem="Erro: O Usuario ou Senha incorreta";
    }
    //header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Administrador</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
             <br/><br/><br/>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">

                        <?php if (isset($mensagem)) {
                            
                         ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo $mensagem;?></strong>
                        </div>
                            <?php } ?>
                        <form action="" method="post">

                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" name="usuario" id="" class="form-control" placeholder="Escreva o teu nome de USUARIO">
                                <small id="emailHelp" class="form-text text-muted">Mantem o seu email privado</small>
                            </div>

                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="senha" id="" class="form-control" placeholder=" Escreva a tua SENHA" >
                            </div>

                            <button type="submit" class="btn btn-primary">Entrar no Administrador</button>
                            
                        </form>

                    </div>

                </div>

            </div>
            
        </div>

    </div>

</body>
</html>