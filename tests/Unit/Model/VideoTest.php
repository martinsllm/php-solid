<?php

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use App\Solid\Model\Video;

class VideoTest extends TestCase
{
    public function test_it_can_create_a_video_with_a_title()
    {
        $video = new Video('Intro');
        $this->assertInstanceOf(Video::class, $video);
        $this->assertEquals('http://videos.example.com/name=Intro', $video->getUrl());
    }

    public function test_it_can_create_a_video_with_a_title_and_a_duration()
    {
        $video = new Video('Intro', 10);
        $this->assertInstanceOf(Video::class, $video);
        $this->assertEquals('http://videos.example.com/name=Intro', $video->getUrl());
        $this->assertEquals(10, $video->durationInMinutes());
    }
}