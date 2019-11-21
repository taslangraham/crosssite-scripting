<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\modules;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function makeReview(Request $request, $id, $code)
    {
        $module = modules::where('id', '=', $id)->where('code', '=', $code)->get();

        $review = new Review();
        $review->review = $request->review;
        $review->module_id = $id;
        $review->user_id = Auth::user()->getAuthIdentifier();
        $review->save();
        return redirect()->route('modules.all');
    }
}
