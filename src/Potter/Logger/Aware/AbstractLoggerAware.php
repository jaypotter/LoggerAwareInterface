<?php

declare(strict_types=1);

namespace Potter\Logger\Aware;

use \Psr\Log\LoggerInterface;

abstract class AbstractLoggerAware implements LoggerAwareInterface
{
    abstract public function getLogger(): LoggerInterface;
    abstract public function hasLogger(): bool;
    abstract protected function setLogger(LoggerInterface $logger): void;
    abstract protected function withLogger(LoggerInterface $logger): LoggerAwareInterface;
    abstract protected function withoutLogger(): LoggerAwareInterface;
}