<?php

namespace App\Http\Controllers;

use App\Models\Expression;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpressionController extends Controller
{
    //
    public function all(){

        // if (!Auth::check()) return response('Unauthorized.', 401);

        $expressions = Expression::all();
        return response()->json($expressions);
    }

    public function create(Request $request){
        $expression = Expression::create([
            'rating' => $request->rating,
            'message' => $request->message, 
        ]);
        return response()->json($expression);
    }
}
