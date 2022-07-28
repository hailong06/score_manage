<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'uuid',
        'exam_category_id',
        'description',
        'score',
        'created_by',
    ];

    public $timestamp = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function examCategory()
    {
        return $this->belongsTo(ExamCategory::class, 'exam_category_id');
    }

    public function answers()
    {
        return $this->hasMany(Question::class, 'question_id');
    }

    public function historyDetail()
    {
        return $this->hasMany(HistoryDetail::class, 'question_id');
    }
}
