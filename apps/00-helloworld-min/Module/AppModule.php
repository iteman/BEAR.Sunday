<?php
/**
 * Module
 *
 * @package    helloWorld
 * @subpackage Module
 */
namespace helloWorld\Module;

use Ray\Di\Scope;

use BEAR\Framework\Module\StandardModule;
use Ray\Di\AbstractModule,
    Ray\Di\InjectorInterface,
    Ray\Di\Annotation,
    Ray\Di\Config,
    Ray\Di\Forge,
    Ray\Di\Container,
    Ray\Di\Injector,
    Ray\Di\Definition;
/**
 * Application module
 *
 * @package    helloWorld
 * @subpackage Module
 */
class AppModule extends AbstractModule
{
    /**
     * Configure dependency binding
     *
     * @return void
     */
    protected function configure()
    {
        $this->bind('BEAR\Resource\SchemeCollection')->toProvider('\helloWorld\Module\SchemeCollectionProvider')->in(Scope::SINGLETON);
    }
}