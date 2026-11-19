<?php

namespace App\Solid\Model;

class StandaloneVideo extends Video
{
    private $category;

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
