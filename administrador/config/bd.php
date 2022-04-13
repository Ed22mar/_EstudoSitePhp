<?php
    try {
        $conexao=new PDO("mysql:host=localhost;dbname=sitioweb","root","");
        return $conexao;
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>