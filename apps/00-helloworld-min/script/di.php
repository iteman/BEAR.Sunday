<?php
namespace helloWorld;

use BEAR\Framework\Module\StandardModule;

use Ray\Di\Annotation,
    Ray\Di\Config,
    Ray\Di\Forge,
    Ray\Di\Container,
    Ray\Di\Injector,
    Ray\Di\Definition;
use Ray\Aop\Bind,
    Ray\Aop\Matcher;
use Doctrine\Common\Annotations\AnnotationReader as Reader;

/**
 * Return application dependency injector.
 *
 * @package    helloWorld
 * @subpackage script
 *
 * @return  Ray\Di\InjectorInterface
 */
$di = new Injector(new Container(new Forge(new Config(new Annotation(new Definition)))));
$di->setModule(new Module\AppModule(new StandardModule($di, __NAMESPACE__)));
return $di;