<?php

namespace App\Solid\Service;

use App\Solid\Model\StandaloneVideo;
use App\Solid\Model\Course;

class ScoreCalculator
{
    public function getScore($content)
    {
        if ($content instanceof Course) {
            return 100;
        } else if ($content instanceof StandaloneVideo) {
            return $content->durationInMinutes() * 2;
        } else {
            throw new \DomainException('Only courses and standalone videos have scores');
        }
    }
}
