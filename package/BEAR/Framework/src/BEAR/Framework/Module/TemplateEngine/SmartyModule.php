<?php
/**
 * Module
 *
 * @package    BEAR.Framework
 * @subpackage Module
 */
namespace BEAR\Framework\Module\TemplateEngine;

use Ray\Di\Scope;

use BEAR\Framework\Module\StandardModule;
use Ray\Di\AbstractModule,
    Ray\Di\Injector;

/**
 * Smarty module
 *
 *
 * @package    BEAR.Framework
 * @subpackage Module
 */
class SmartyModule extends AbstractModule
{
    /**
     * Configure dependency binding
     *
     * @return void
     */
    protected function configure()
    {
        $this
        ->bind('BEAR\Framework\View\Render')
        ->annotatedWith('link')
        ->to('\BEAR\Framework\View\SmartyAdapter');

        $this
        ->bind('\Smarty')
        ->toProvider('\BEAR\Framework\Module\Provider\SmartyProvider')
        ->in(Scope::SINGLETON);;

        $this
        ->bind()
        ->annotatedWith('template_ext')
        ->toInstance('tpl');
   }
}