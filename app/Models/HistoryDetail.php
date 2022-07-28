<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryDetail extends Model
{
    protected $table ='history_detail';

    protected $fillable = [
        'uuid',
        'history_id',
        'exam_category_id',
        'question_id',
        'answer_id'
    ];

    public $timestamps = true;

    public function history()
    {
        return $this->belongsTo(History::class, 'history_id');
    }

    public function historyDetail()
    {
        return $this->belongsTo(HistoryDetail::class, 'question_id');
    }

    public function examCategory()
    {
        return $this->belongsTo(ExamCategory::class, 'exam_category_id');
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'answer_id');
    }
}
