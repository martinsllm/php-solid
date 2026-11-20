<?php 

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use App\Solid\Model\Slug;

class SlugTest extends TestCase
{
    public function test_it_replaces_spaces_with_hyphens_and_lowercases_the_text()
    {
        $slug = new Slug('This is a test slug');
        $this->assertEquals('this-is-a-test-slug', $slug->__toString());
    }

    public function test_it_replaces_multiple_spaces_with_a_single_hyphen()
    {
        $slug = new Slug('This is a   test slug');
        $this->assertEquals('this-is-a-test-slug', $slug->__toString());
    }
}