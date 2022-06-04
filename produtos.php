<?php 
include("template/cabecario.php");?>
<?php include("administrador/config/bd.php");

$sentenciaSQL=$conexao->prepare("SELECT * FROM livros");
$sentenciaSQL->execute();
$Listar=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

?>

<?php foreach($Listar as $livros){ ?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="img/<?php echo $livros['imagem']; ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $livros['nome'];?></h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver mais</a>
            </div>
        </div>
    </div>  
<?php } ?>
    
   


<?php include("template/rodape.php");?>