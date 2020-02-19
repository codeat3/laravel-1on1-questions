<?php

namespace Codeat3\Laravel1on1Questions\Tests;

class QuestionsTest extends TestCase
{
    /** @test */
    public function is_categories_pulled_correctly()
    {
        $this->assertNotEmpty(\Laravel1on1Questions::categories());
    }

    /** @test */
    public function is_correct_category_question_is_returned()
    {
        $category = 'Career development';
        $question = \Laravel1on1Questions::random($category);
        $this->assertEquals($question->category, $category);
    }
}
