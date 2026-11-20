<?php

declare(strict_types=1);

namespace App\Solid\Model;

use App\Solid\Interfaces\Scorable;
use App\Solid\Interfaces\Watchable;

class StandaloneVideo extends Video implements Scorable, Watchable
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        return 'http://videos.example.com/' . new Slug($this->category) . '/' . new Slug($this->name);
    }

    public function getScore(): int
    {
        return $this->durationInMinutes() * 2;
    }
}
