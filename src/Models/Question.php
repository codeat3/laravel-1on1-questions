<?php

namespace Codeat3\Laravel1on1Questions\Models;

use Zttp\Zttp;
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
        return Zttp::withHeaders(['User-agent' => 'PHP'])
            ->get('https://raw.githubusercontent.com/VGraupera/1on1-questions/master/questions.json')
            ->json();
    }
}
