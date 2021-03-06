<?php
/**
 * This file is part of the Breaker package.
 *
 * (c) Rafael Becker <rafael@beecker.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Solis\Breaker\Exceptions;

use RuntimeException as StandardRuntimeException;

/**
 * RuntimeException.
 *
 * This exception should be thrown if an error occurs on runtime.
 *
 * @package Solis\Breaker\Exceptions
 * @author  Rafael Becker <rafael@beecker.com.br>
 */
class RuntimeException extends StandardRuntimeException implements ExceptionInterface
{

    use ExceptionTrait;

    /**
     * Create a new RuntimeException instance.
     *
     * @param string $reason
     * @param int    $code
     */
    public function __construct($reason, $code = 500)
    {
        $this->setExceptionDetails($reason, $code, $this->getTrace());

        parent::__construct($this->getErrorMessage(), $this->getErrorCode());
    }
}
