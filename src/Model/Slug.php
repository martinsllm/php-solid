<?php

declare(strict_types=1);

namespace App\Solid\Model;

class Slug
{

    private string $slug;

    public function __construct(private string $content)
    {
        $this->slug = preg_replace('/ +/', '-', strtolower($content));
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}