<?php

declare(strict_types=1);

namespace App\Solid\Interfaces;

interface Watchable
{
    public function watch(): void;
}