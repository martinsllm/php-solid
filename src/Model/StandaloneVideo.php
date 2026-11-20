<?php

declare(strict_types=1);

namespace App\Solid\Model;

class StandaloneVideo extends Video
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }
}
