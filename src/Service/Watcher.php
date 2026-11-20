<?php

declare(strict_types=1);

namespace App\Solid\Service;

use App\Solid\Model\StandaloneVideo;
use App\Solid\Model\Course;

class Watcher
{
    public function watchCourse(Course $course)
    {
        foreach ($course->getVideos() as $video) {
            $video->watch();
        }
    }

    public function watchStandaloneVideo(StandaloneVideo $standaloneVideo)
    {
        $standaloneVideo->watch();
    }
}
