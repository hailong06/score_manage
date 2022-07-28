<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamCategory extends Model
{
    protected $table = 'exam_categories';

    protected $fillable = [
        'uuid',
        'name',
        'grade',
        'created_by',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'exam_category_id');
    }

    public function histories()
    {
        return $this->hasMany(History::class, 'exam_category_id');
    }

    public function historyDetails()
    {
        return $this->hasMany(HistoryDetail::class, 'exam_category_id');
    }
}
