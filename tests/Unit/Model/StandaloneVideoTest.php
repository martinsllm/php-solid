<?php

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use App\Solid\Model\StandaloneVideo;

class StandaloneVideoTest extends TestCase
{
    public function test_it_can_create_a_standalone_video_with_a_title()
    {
        $video = new StandaloneVideo('Intro', 'Category');
        $this->assertInstanceOf(StandaloneVideo::class, $video);
        $this->assertEquals('http://videos.example.com/category/intro', $video->getUrl());
    }

    public function test_it_can_create_a_standalone_video_with_a_title_and_a_duration()
    {
        $video = new StandaloneVideo('Intro', 'Category', 10);
        $this->assertInstanceOf(StandaloneVideo::class, $video);
        $this->assertEquals('http://videos.example.com/category/intro', $video->getUrl());
        $this->assertEquals(10, $video->durationInMinutes());
        $this->assertEquals(20, $video->getScore());
    }
}