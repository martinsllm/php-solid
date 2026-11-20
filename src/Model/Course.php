<?php

declare(strict_types=1);

namespace App\Solid\Model;

use App\Solid\Interfaces\Scorable;
use App\Solid\Interfaces\Watchable;

class Course implements Scorable, Watchable
{
    private string $name;
    private array $videos;
    private array $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receiveFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video)
    {
        if ($video->durationInMinutes() < 3) {
            throw new \DomainException('Video is too short');
        }

        $this->videos[] = $video;
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function getScore(): int
    {
        return 100;
    }

    public function watch(): void
    {
        foreach ($this->getVideos() as $video) {
            $video->watch();
        }
    }
}
