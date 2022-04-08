<?php 

if(isset($_POST)){
    header('Location:inicio.php');
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