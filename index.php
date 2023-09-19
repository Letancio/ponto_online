<?php
// index.php

// Captura a rota a partir do parâmetro GET "url"
$route = isset($_GET['url']) ? $_GET['url'] : '';

// Mapeia as rotas para controladores e métodos
$routes = [
    'login' => ['controller' => 'LoginController', 'method' => 'logar'],
    'acesso' => ['controller' => 'LoginController', 'method' => 'logarfuncionario'],
    // Adicione mais rotas aqui conforme necessário
];

// Verifica se a rota existe no array de rotas
if (array_key_exists($route, $routes)) {
    $routeInfo = $routes[$route];
    $controllerName = $routeInfo['controller'];
    $methodName = $routeInfo['method'];
    $controllerPath = "src/Controllers/{$controllerName}.php";

    // Verifica se o arquivo do controlador existe
    if (file_exists($controllerPath)) {
        require_once $controllerPath;

        // Instancia o controlador e chama o método apropriado
        $controller = new $controllerName();
        if (method_exists($controller, $methodName)) {
            $controller->$methodName(); // Chama o método especificado no controlador
        } else {
            // Método não encontrado no controlador
            echo "Método não encontrado no controlador.";
        }
    } else {
        // Rota não encontrada, pode exibir uma página de erro
        echo "Rota não encontrada";
    }
} else {
    // Rota não encontrada, pode exibir uma página de erro
    echo "Rota não encontrada";
}
