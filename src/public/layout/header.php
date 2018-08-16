<?php
    require_once dirname(__DIR__, 2).'/app/Config.php';
    require_once dirname(__DIR__, 2).'/app/Categoria.php';
    
    $config = new Config("mysql", "localhost", "3306", "turma3", "root", "");

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Trabalho POO - Pós ALFA 2018</title>

        <link href="https://scontent.fumu1-1.fna.fbcdn.net/v/t1.0-1/p200x200/35648742_258030528265652_8031949448974172160_n.jpg?_nc_cat=0&oh=8d33713865c2c736bfc6c2b95e8828b8&oe=5BFB42A1" rel="shortcut icon">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" rel="stylesheet" >
        <link href="assets/css/default.css" rel="stylesheet" >
        <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
            *{
                font-family: 'Open Sans', sans-serif;
            }
            .link{
                text-decoration: none!important;
                color: #7b7777!important;
            }
            .link:hover{
                text-decoration: none!important;
                color: #c82333!important;
            }
            .white{
                color: #fff!important;
            }
            .table-action{
                width: 50px;
                float: left;
            }
            footer{
                background: #eae3e3;
                padding: 5px 0;
                text-transform: uppercase;
                font-size: 13px;
                bottom: 0;
                position: absolute;
                margin-top: 5px;
                width: 100%;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand white" href="#">WebDev</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white" href="categorias.php">
                            Categorias
                        </a>
                    </li>
                </ul>
            </div>
        </nav>