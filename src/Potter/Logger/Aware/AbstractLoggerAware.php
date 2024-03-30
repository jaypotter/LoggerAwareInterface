<?php

declare(strict_types=1);

namespace Potter\Logger\Aware;

use \Psr\Log\LoggerInterface;

abstract class AbstractLoggerAware implements LoggerAwareInterface
{
    abstract public function getLogger(): LoggerInterface;
    abstract public function hasLogger(): bool;
}