<?php
namespace $PACKNAMESPACE\Controller;

use Neton\NetonController;
use Symfony\Component\HttpFoundation\Request;
use Neton\Annotation\Controller;
use Neton\Annotation\Route;
use Neton\Annotation\Direct;
use Neton\Annotation\Value;
use Neton\Annotation\Assert;
use Neton\Annotation\Convert;
use Neton\Annotation\After;
use Neton\Annotation\Before;

/**
 * Classe $CONTROLLER
 *
 * @Controller
 *
 * @package $PACKNAMESPACE\Controller;
 */
class $CONTROLLER extends NetonController
{

    /**
     * @Route(method="get")
     * @param Request $request
     */
    public function metodo(Request $request)
    {
        return "resposta";
    }
}