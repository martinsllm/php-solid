<?php

namespace App\Solid\Model;

class Course
{
    private $name;
    private $videos;
    private $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receiveFeedback(int $rating, ?string $testimonial): void
    {
        if ($rating < 9 && empty($testimonial)) {
            throw new \DomainException('Testimonial is required');
        }

        $this->feedbacks[] = [$rating, $testimonial];
    }

    public function addVideo(Video $video)
    {
        if ($video->durationInMinutes() < 3) {
            throw new \DomainException('Video is too short');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }
}
