<?php

require_once "layout/header.php";

if (isset($_POST["id"])) {

    $id = trim($_POST["id"]);
    $nome = trim($_POST["nome"]);

    $categoria = new Categoria($config);
    $categoria->setNome($nome);

    
    if (empty($id)) {
        if ($categoria->insert()) {
            echo "Categoria Cadastrada com Sucesso";
            echo "<script>alert('Categoria Cadastrada com Sucesso'); location.href='categorias.php';</script>";
        } else {
            echo "ERRO: Não foi possível Salvar a Categoria";
            echo "<script>alert('ERRO: Não foi possível Salvar a Categoria'); history.back();</script>";
        }
    } else {
        if ($categoria->update($id)) {
            echo "Categoria Editada com Sucesso";
            echo "<script>alert('Categoria Editada com Sucesso'); location.href='categorias.php';</script>";
        } else {
            echo "ERRO: Não foi possível Salvar a Categoria";
            echo "<script>alert('ERRO: Não foi possível Salvar a Categoria'); history.back();</script>";
        }
    }
} else {
    echo "ERRO: Você não tem perissão para acessar esta página";
   echo "<script>alert('ERRO: Você não tem perissão para acessar esta página'); history.back();</script>";
}