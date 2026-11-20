<?php 

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use App\Solid\Model\Feedback;

class FeedbackTest extends TestCase
{

    public function test_it_can_create_a_feedback_with_a_rating_and_testimonial()
    {
        $feedback = new Feedback(8, 'This is a test feedback');
        $this->assertInstanceOf(Feedback::class, $feedback);
    }

    public function test_it_can_create_a_feedback_with_a_rating_equal_or_more_than_9_without_testimonial()
    {
        $feedback = new Feedback(9, null);
        $this->assertInstanceOf(Feedback::class, $feedback);
    }

    public function test_it_cannot_create_a_feedback_with_a_rating_less_than_9_without_testimonial()
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Testimonial is required');

        new Feedback(8, null);
    }

    public function test_it_cannot_create_a_feedback_with_a_rating_less_than_9_with_empty_testimonial()
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Testimonial is required');

        new Feedback(8, '');
    }

}