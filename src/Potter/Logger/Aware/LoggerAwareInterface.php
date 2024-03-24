<?php

declare(strict_types=1);

namespace Potter\Logger\Aware;

use \Psr\Log\LoggerInterface;

interface LoggerAwareInterface
{
    public function getLogger(): LoggerInterface;
    public function hasLogger(): bool;
}