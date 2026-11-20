<?php

declare(strict_types=1);

namespace App\Solid\Service;

use App\Solid\Interfaces\Scorable;

class ScoreCalculator
{
    public function getScore(Scorable $content): int
    {
        return $content->getScore();
    }
}
