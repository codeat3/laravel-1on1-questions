<?php

namespace Codeat3\Laravel1on1Questions\Models;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use Sushi;

    protected $casts = [
        'question' => 'string',
    ];

    public function getRows()
    {
        return json_decode(file_get_contents(__DIR__.'/../../vendor/v-graupera/1on1-questions/questions.json'), true);
    }
}
