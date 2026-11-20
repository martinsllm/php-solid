<?php

declare(strict_types=1);

namespace App\Solid\Interfaces;

interface Scorable
{
    public function getScore(): int;
}