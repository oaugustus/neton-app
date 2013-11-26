<?php
/**
 * Registra o provedor de serviço para manipulação de banco de dados.
 *
 * @author Otávio Fernandes <otavio@netonsolucoes.com.br>
 */
$app->register(new Silex\Provider\DoctrineServiceProvider());