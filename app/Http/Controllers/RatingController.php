<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{

    //store review and rating
    public function store(Request $request)
    {
        $review = new Review();
        $review->course_id = $request->course_id;
        $review->comment= $request->comment;
        $review->star_rating = $request->star_rating;
        if(Auth::check()){ $review->reviewed_by = Auth::user()->id;}
        $review->save();
        return redirect()->back();
    }

}
