<?php

namespace App\Solid\Model;

class Feedback
{
    private int $rating;
    private ?string $testimonial;

    public function __construct(int $rating, ?string $testimonial)
    {
        if ($rating < 9 && empty($testimonial)) {
            throw new \DomainException('Testimonial is required');
        }
        
        $this->rating = $rating;
        $this->testimonial = $testimonial;
    }
}