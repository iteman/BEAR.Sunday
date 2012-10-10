<?php
/**
 * This file is part of the BEAR.Sunday package
 *
 * @package BEAR.Sunday
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Sunday\Inject;

use Aura\Di\ConfigInterface as Config;
use Ray\Di\Di\Inject;

/**
 * Inject class definition
 *
 * @package    BEAR.Sunday
 * @subpackage Inject
 */
trait DefinitionInject
{

    /**
     * Set definition
     *
     * @param Config $config
     *
     * @Inject
     */
    public function setDefinition(Config $config)
    {
        $this->definition = $config->fetch(get_called_class())[2];
    }
}
