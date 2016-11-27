<?php
/**
 * Created by PhpStorm.
 * User: satanassov
 * Date: 27/11/2016
 * Time: 21:51
 */

namespace SYS;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

class BigBang
{
    const ROOT = 'root';
    private $oRoutes;
    private $oMatcher;

    public function __construct()
    {
        $this->oRoutes = new RouteCollection();
        $context = new RequestContext('/');
        $this->oMatcher = new UrlMatcher($this->oRoutes, $context);
    }

    public function init()
    {
        $route = new Route(self::ROOT, array('controller' => '\\OBC\\Product\\Some'));
        $this->oRoutes->add('Index', $route);

        $parameters = $this->oMatcher->match('/');
    }
}
