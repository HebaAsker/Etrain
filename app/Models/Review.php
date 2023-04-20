<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\Courses\CourseDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $guarded = ['id'] ;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(CourseDetail::class, 'course_id');
    }

}
