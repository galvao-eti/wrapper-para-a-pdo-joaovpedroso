<?php 
    
    require_once 'layout/header.php'; 
    if( isset( $_POST["id"] ) ){
        $id = trim($_POST["id"]);
        
        $categoria = new Categoria($config);
        $dados  = $categoria->getOne($id);        
        $nome   = $dados["nome"];
        $id     = $dados["id"];
        
        $action = "Edição";
    }else {
        $id = $nome = "";
        $action = "Cadastro";
    }
?>
<div class="container">
    <div class="row">
        <form action="salvar-categoria.php" method="POST">
            
            <legend>Formulário para <?= $action ?> de Categoria</legend>
            
            <input type="hidden" name="id" value="<?= $id; ?>">
            
            <div class="form-group">
                <label>Nome da Categoria</label>
                <input type="text" name="nome" placeholder="Nome da Categoria" value="<?= $nome; ?>" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
            
        </form>
    </div>
</div>
<?php require_once 'layout/footer.php'; ?>