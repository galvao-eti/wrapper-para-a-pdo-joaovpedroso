<?php
require_once "./layout/header.php";
$categoria = new Categoria($config);
?>

        <main>
            <div class="container">
                <div class="row">

                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 pad-20">
                        <a href="index.php" class="link">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-home font-50 pad-10"></i>
                                    <p>Home</p>
                                </div>
                            </div>
                        </a>
                    </div>                   

                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 pad-20">
                        <a href="categorias.php" class="link">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-user-plus font-50 pad-10"></i>
                                    <p>Categorias</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </main>

<?php require_once "./layout/footer.php"; ?>