<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $fillable = [
        'title',
        'ticket_number',
        'ticket_category',
        'image',
        'question',
        'correct_answer',
        'answer_tip',
    ];

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
