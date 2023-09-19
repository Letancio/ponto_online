<?php
// Importando as bibliotecas necessárias

// Definindo as rotas
$routes = [
    '/' => 'HomeController@index',
    '/login' => 'LoginController@index',
    // Adicione mais rotas aqui
];

// Verifica se a rota existe
if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    // Separa o controlador e o método
    $controllerAction = explode('@', $routes[$_SERVER['REQUEST_URI']]);
    $controllerName = $controllerAction[0];
    $methodName = $controllerAction[1];

    // Inclui o arquivo do controlador
    require_once 'src/App/controllers/' . $controllerName . '.php';

    // Cria uma instância do controlador e chama o método
    $controller = new $controllerName();
    $controller->$methodName();
} else {
    // Rota não encontrada
    header('HTTP/1.0 404 Not Found');
    echo "404 - Not Found";
}
