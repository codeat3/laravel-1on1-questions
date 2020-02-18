<?php

namespace Codeat3\Laravel1on1Questions\Tests;

use Orchestra\Testbench\TestCase;
use Codeat3\Laravel1on1Questions\Laravel1on1QuestionsServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [Laravel1on1QuestionsServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
