<?php
/**
 * Arquivo de inicialização da aplicação.
 *
 * @author Otávio Fernandes <otavio@netonsolucoes.com.br>
 */
require_once __DIR__."/../vendor/autoload.php";

$app = new Neton\Application(array(
    'base_dir' => __DIR__."/../",
    'env' => 'dev'
));

$app->run();