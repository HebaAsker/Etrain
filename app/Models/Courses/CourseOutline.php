<?php

namespace App\Models\Courses;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseOutline extends Model
{
    use HasFactory;

    protected $table = 'course_outlines';
    protected $guarded = ['id'] ;

    public function course(): BelongsTo
    {
        return $this->belongsTo(CourseDetail::class, 'course_id');
    }
}
