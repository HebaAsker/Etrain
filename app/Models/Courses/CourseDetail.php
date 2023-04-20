<?php

namespace App\Models\Courses;

use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseDetail extends Model
{
    use HasFactory;
    protected $table = 'course_details';
    protected $guarded = ['id'] ;

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'course_id');
    }

    public function outlines(): HasMany
    {
        return $this->hasMany(CourseOutline::class, 'course_id');
    }

    //to git average rating of each course
    public function getRatingAvg($id)
    {
        $avrg_rating= Review::where('course_id',$id)->select('star_rating')->avg('star_rating')/10;
        return $avrg_rating;
    }
}
