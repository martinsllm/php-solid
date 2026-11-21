<?php

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use App\Solid\Model\Course;
use App\Solid\Model\Video;

class CourseTest extends TestCase
{
    public function test_it_cannot_add_a_video_shorter_than_3_minutes()
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Video is too short');

        $course = new Course('Intro');
        $course->addVideo(new Video('Intro', 2));
    }

    public function test_it_can_add_a_video_equal_to_3_minutes()
    {
        $course = new Course('Intro');
        $course->addVideo(new Video('Intro', 3));
        $this->assertCount(1, $course->getVideos());
        $this->assertEquals(100, $course->getScore());
    }

    public function test_it_can_add_a_video_longer_than_3_minutes()
    {
        $course = new Course('Intro');
        $course->addVideo(new Video('Intro', 4));
        $this->assertCount(1, $course->getVideos());
        $this->assertEquals(100, $course->getScore());
    }
}