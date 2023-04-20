<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Courses\CourseDetail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
        'expire',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function countStudents()
    {
        $student=DB::table("users")->select(DB::raw('role'))->where('role','student')->get()->count();
        return $student;
    }

    public function countTeachers()
    {
        $student=DB::table("users")->select(DB::raw('role'))->where('role','teacher')->get()->count();
        return $student;
    }

    public function getTeacherImage()
    {
        $teacher_img=DB::table("users")->select(DB::raw('image'))->where('role','teacher')->get();
        return $teacher_img;
    }

    public function courses(): HasMany
    {
        return $this->hasMany(CourseDetail::class, 'created_by');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'reviewed_by');
    }
}
