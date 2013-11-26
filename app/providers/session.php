<?php
/**
 * Registra o provedor de serviço para manipulação de sessão.
 *
 * @autor Otávio Fernandes <otavio@netonsolucoes.com.br>
 */
$app->register(new Silex\Provider\SessionServiceProvider());