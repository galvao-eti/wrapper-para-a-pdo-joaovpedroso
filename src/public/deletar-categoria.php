<?php

require_once './layout/header.php';

if( isset( $_POST["id"] ) ){
    $id = trim($_POST["id"]);
    
    $categoria = new Categoria($config);
    if( $categoria->delete($id) ){
        echo "Categoria Excluida com Sucesso!";
        echo "<script>alert('Categoria Excluida com Sucesso!'); location.href='categorias.php'</script>";
    }else{
        echo 'ERRO: Falha ao excluir categoria';    
    }
    
}else{
    echo 'ERRO: Você não tem permissão para ver o conteúdo!';
}
