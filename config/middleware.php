<?php
use Slim\App;

return function (App $app) {
    //adiciona o middleware de Parse para os tipo json, form data e xml
    $app->addBodyParsingMiddleware();

    //Adiciona o middleware de roteamento do Slim
    $app->addRoutingMiddleware();

    // Adicio o middleware de tratamento de exceções
    $app->addErrorMiddleware(true, true, true);
};
