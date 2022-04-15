<?php 
include("../template/cabecario.php");
include("../config/bd.php");
?>
<?php 

    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtNome=(isset($_POST['txtNome']))?$_POST['txtNome']:"";
    $txtImagem=(isset($_FILES['txtImagem']['name']))?$_FILES['txtImagem']['name']:"";
    $action=(isset($_POST['action']))?$_POST['action']:"";


    
    switch($action){
        case "Salvar":
            $sentenciaSQL=$conexao->prepare("INSERT INTO livros (nome,imagem) VALUES (:nome, :imagem);");
            $sentenciaSQL->bindParam(':nome',$txtNome);
            
            /**
             *  insert imagen 
            */

            $fecha= new DateTime();
            $nomeArquivo=($txtImagem!="")?$fecha->getTimestamp()."_".$_FILES["txtImagem"]["name"]:"imagem.jpg";
            $tmpImagem=$_FILES["txtImagem"]["tmp_name"];

            if ($tmpImagem!="") {
                move_uploaded_file($tmpImagem,"../../img/".$nomeArquivo);  
            }
            
            $sentenciaSQL->bindParam(':imagem',$txtImagem);
            $sentenciaSQL->execute();  
            

        break;
        case "Modificar":
            $sentenciaSQL=$conexao->prepare("UPDATE livros SET nome=:nome WHERE id=:id");
            $sentenciaSQL->bindParam(':nome',$txtNome);
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();   

            if($txtImagem!=""){
                $sentenciaSQL=$conexao->prepare("UPDATE livros SET imagem=:imagem WHERE id=:id");
                $sentenciaSQL->bindParam(':imagem',$txtImagem);
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();   
            }

        break;
        case "Cancelar":
            echo "Pressionado botão cancelar";
        break;
        case "Selecionar":
            $sentenciaSQL=$conexao->prepare("SELECT * FROM livros WHERE id=:id");
            $sentenciaSQL->bindParam('id',$txtID);
            $sentenciaSQL->execute();
            $livros=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $txtNome=$livros['nome'];
            $txtImagem=$livros['imagem'];
            //echo "Pressionado botão Selecionar";
        break;
        case "Apagar":
            $sentenciaSQL=$conexao->prepare("DELETE FROM livros WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            //echo "Pressionado botão Apagar";
        break;
    }

    $sentenciaSQL=$conexao->prepare("SELECT * FROM livros");
    $sentenciaSQL->execute();
    $listarLivros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Dados do Livro
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" value="<?php echo $txtID; ?>" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>
                <div class="form-group">
                    <label for="txtNome">Nome:</label>
                    <input type="text" value="<?php echo $txtNome; ?>" class="form-control" name="txtNome" id="txtNome" placeholder="Nome do livro">
                </div>
                <div class="form-group">
                    <label for="">Imagem:</label>
                    <?php echo $txtImagem; ?>
                    <input type="file" class="form-control" name="txtImagem" id="txtImagem">
                </div>
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="action" value="Salvar" class="btn btn-success">Salvar</button>
                    <button type="submit" name="action" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="action" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>
        </div>
    </div>
  
</div>

<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</i></th>
                <th>Nome</th>
                <th>Imagem</th>
                <th>Acções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listarLivros as $livros){;?>
            <tr>
                <td><?php echo $livros['id'];?></td>
                <td><?php echo $livros['nome'];?></td>
                <td><?php echo $livros['imagem'];?></td>
                <td>
                <form method="post">

                    <input type="hidden" name="txtID" id="txtID" value="<?php echo$livros['id'];?>"/>

                    <input type="submit" value="Selecionar" name="action" class="btn btn-primary"/>

                    <input type="submit" value="Apagar" name="action" class="btn btn-danger"/>  

                </form>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<?php include("../template/rodape.php");?>