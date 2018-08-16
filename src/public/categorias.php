<?php require_once "layout/header.php"; ?>
<div class="container">
    <div class="row pad-20">

        <legend class="pad-top-20">Categorias Cadastradas</legend>
        
        <a href="form-categoria.php" class="btn btn-primary mar-bottom-10">
            Novo Cadastro
        </a>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th width="150" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $categoria = new Categoria($config);
                    $categorias = $categoria->getAll();
                    foreach($categorias as $key => $value){
                ?>
                    <tr>
                        <td><?= $value["id"] ?></td>
                        <td><?= $value["nome"] ?></td>
                        <td>
                            <form action="form-categoria.php" method="POST" class="table-action">
                                <input type="hidden" name="id" value="<?= $value["id"] ?>" class="hidden">
                                <button class="btn btn-success" title="Editar">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>
                            <form action="deletar-categoria.php" method="POST" class="table-action">
                                <input type="hidden" name="id" value="<?= $value["id"] ?>" class="hidden">
                                <button class="btn btn-danger" title="Excluir">
                                    <i class="fas fa-eraser"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>

    </div>
</div>
<?php require_once "layout/footer.php"; ?>
