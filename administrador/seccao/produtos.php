<?php include("../template/cabecario.php");?>
<?php 
    print_r($_POST);
    print_r($_FILES);
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
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>
                <div class="form-group">
                    <label for="txtNome">Nome:</label>
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome do livro">
                </div>
                <div class="form-group">
                    <label for="">Imagem:</label>
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
            <tr>
                <td>2</td>
                <td>Aprender.php</td>
                <td>imagem.png</td>
                <td>Selecionar | Apagar</td>
            </tr>

        </tbody>
    </table>
</div>
<?php include("../template/rodape.php");?>