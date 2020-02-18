<?php

namespace Codeat3\Laravel1on1Questions;

use Codeat3\Laravel1on1Questions\Models\Question;

class Laravel1on1Questions
{
    public function categories()
    {
        return Question::groupBy('category')
            ->pluck('category');
    }

    public function get($category = null)
    {
        $filters = [];
        if (! is_null($category)) {
            $filters['category'] = $category;
        }

        return Question::where($filters)
            ->get();
    }

    public function random($category = null) {
        return $this->get($category)->random();
    }
}
