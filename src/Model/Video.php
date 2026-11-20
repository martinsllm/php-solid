<?php

declare(strict_types=1);

namespace App\Solid\Model;

class Video
{
    protected bool $watched = false;
    protected string $name;
    protected \DateInterval $duration;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->watched = false;
        $this->duration = \DateInterval::createFromDateString('0');
    }

    public function watch(): void
    {
        $this->watched = true;
    }

    public function durationInMinutes(): int
    {
        return $this->duration->i;
    }

    public function getUrl(): string
    {
        return 'http://videos.example.com/' . http_build_query(['name' => $this->name]);
    }
}
