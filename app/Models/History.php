<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'histories';

    protected $fillable = [
        'uuid',
        'user_id',
        'exam_category_id',
        'score',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function examCategory()
    {
        return $this->belongsTo(ExamCategory::class, 'exam_category_id');
    }

    public function historyDetails()
    {
        return $this->hasMany(HistoryDetail::class, 'history_id');
    }
}
