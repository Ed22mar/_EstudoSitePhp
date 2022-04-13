<?php
    try {
        $conexao=new PDO("mysql:host=localhost;dbname=sitioweb","root","");
        if($conexao){
            echo "Conectado... ao sistema";
        }
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>