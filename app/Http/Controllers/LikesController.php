<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{

    public function index()
    {
        $like = DB::table("likes")
            ->select('shop_id', 'user_id')
            ->get();
        return response()->json([
            'message' => 'created successfully',
            'data' => $like
        ], 200);
    }
    
    public function post(Request $request )
    {
        
        $now = Carbon::now();
        $param = [
            "user_id" => Auth::id(),
            "shop_id" => $request->shop_id,
            "created_at" => $now,
            "updated_at" => $now
        ];
        DB::table('likes')
        ->select('user_id', 'shop_id')
        ->insert($param);
        return response()->json([
            'message' => 'created successfully',
            'data' => $param
        ], 200);
    }

    public function delete(Request $request)
    {
        DB::table('likes')->where('shop_id', $request->shop_id)->where('user_id', Auth::id())->delete();
        return response()->json([
            'message' => 'Like deleted successfully',
        ],200);
    }
};
