<?php

require_once '../../vendor/autoload.php';

$settings = [
    'settings' => [
        'displayErrorDetails' => true
    ],
];
$app = new \Slim\App($settings);

$container = $app->getContainer();
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__);
    return $view;
};
$container['config'] = function ($container) {
    return new App\Config('mysql', 'localhost', '3306', 'turma3', 'root', '');
};
$container['categoria'] = function($container) {
    return new App\Categoria($container->config);
};

//Home
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'home.twig', []);
});
$app->get('/categorias', function ($request, $response, $args) {
    $Categoria = $this->categoria;
    $categorias = $Categoria->getAll();
    $listCategorias = [
        "categorias" => $categorias
    ];

    return $this->view->render($response, 'categorias.twig', $listCategorias);
});

//Rotas das categorias
$app->group('/categorias', function() use($container, $app) {

    $this->get('/', function ($request, $response) {
        $Categoria = $this->categoria;
        $categorias = $Categoria->getAll();
        $listCategorias = [
            "categorias" => $categorias
        ];

        return $this->view->render($response, 'categorias.twig', $listCategorias);
    });

    //Formulario de Cadastro
    $this->get('/nova', function ($request, $response) {
        return $this->view->render($response, 'categorias-nova.twig', []);
    });

    //Deletar
    $this->post('/deletar', function ($request, $response) {
        $params = $request->getParsedBody();
        $id = $params["id"];

        $categoria = $this->categoria;
        if ($categoria->delete($id)) {
            $message = "Categoria deletada";
        } else {
            $message = "Erro ao deletar categoria";
        }

        return $response->withRedirect('/categorias/', 301);
    });

    //Formulario de Edição
    $this->post('/editar', function ($request, $response) {
        $params = $request->getParsedBody();
        $id = $params["id"];

        $Categoria = $this->categoria;
        $categorias = $Categoria->getOne($id);
        $listCategorias = [
            "categorias" => $categorias
        ];

        return $this->view->render($response, 'categorias-editar.twig', $listCategorias);
    });
    
    //Persistir os dados
    $this->post('/salvar', function ($request, $response) {
       
        $params = $request->getParsedBody();
        $id = trim($params['id']);
        $nome = trim($params['nome']);
        $Categoria = $this->categoria;
        
        if( empty($id) ){
            $Categoria->setNome($nome);
            $Categoria->insert();            
        }else{
            $Categoria->setNome($nome);
            $Categoria->update($id);
        }
        
        return $response->withRedirect('/categorias/', 301);        
    });
    
});

$app->run();
