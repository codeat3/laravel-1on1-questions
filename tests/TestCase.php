<?php

namespace Codeat3\Laravel1on1Questions\Tests;

use Codeat3\Laravel1on1Questions\Laravel1on1QuestionsFacade;
use Codeat3\Laravel1on1Questions\Laravel1on1QuestionsServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [Laravel1on1QuestionsServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Laravel1on1Questions' => Laravel1on1QuestionsFacade::class,
        ];
    }
}
