<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'fullname',
        'email',
        'password',
        'birthday',
        'phone',
        'address',
        'gender',
        'school',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;

    public function students()
    {
        return $this->hasMany(Assignment::class, 'teacher_id');
    }

    public function teacher()
    {
        return $this->hasOne(Assignment::class, 'student_id');
    }

    public function examCategories()
    {
        return $this->hasMany(ExamCategory::class, 'created_by');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'created_by');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'created_by');
    }

    public function histories()
    {
        return $this->hasMany(History::class, 'user_id');
    }
}
