<?php
/**
 * Registra o provedor de serviços do Twig.
 *
 * @author Otávio Fernandes <otavio@netonsolucoes.com.br>
 */
$app->register(new Silex\Provider\TwigServiceProvider(),array(
    'twig.path' => __DIR__."/../../templates"
));