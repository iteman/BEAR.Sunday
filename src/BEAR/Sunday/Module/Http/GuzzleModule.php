<?php
/**
 * This file is part of the BEAR.Sunday package
 *
 * @package BEAR.Sunday
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Sunday\Module\Http;

use Ray\Di\AbstractModule;
use Ray\Di\Di\Scope;

/**
 * Exception handle module
 *
 * @package    BEAR.Sunday
 * @subpackage Module
 */
class GuzzleModule extends AbstractModule
{
    /**
     * Configure
     *
     * @return void
     */
    protected function configure()
    {
        $this->bind('Guzzle\Parser\UriTemplate\UriTemplateInterface')->to('Guzzle\Parser\UriTemplate\UriTemplate');
        $this->bind('Guzzle\Common\Cache\AbstractCacheAdapter')->toProvider('BEAR\Sunday\Module\Provider\ApcCacheProvider')->in(Scope::SINGLETON);
    }
}
