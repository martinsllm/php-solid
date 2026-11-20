<?php

declare(strict_types=1);

namespace App\Solid\Service;

use App\Solid\Interfaces\Watchable;

class Watcher
{
    public function watch(Watchable $watchable): void
    {
        $watchable->watch();
    }
}
