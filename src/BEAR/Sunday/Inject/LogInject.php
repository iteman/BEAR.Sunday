<?php
/**
 * This file is part of the BEAR.Sunday package
 *
 * @package BEAR.Sunday
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Sunday\Inject;

use Ray\Di\Di\Inject;
use Guzzle\Common\Log\LogAdapterInterface;

/**
 * Inject logger
 *
 * @package    BEAR.Sunday
 * @subpackage Inject
 */
trait LogInject
{
    /**
     * Logger
     *
     * @var Log
     */
    private $log;

    /**
     * Logger stter
     *
     * @param LogAdapterInterface $log
     *
     * @return void
     * @Inject
     */
    public function setLog(LogAdapterInterface $log)
    {
        $this->log = $log;
    }
}
