<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    protected $fillable = [
        'uuid',
        'question_id',
        'value',
        'status',
        'created_by',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'answer_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
