<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $shop_id = $request->shop_id;
        
        $result = DB::table('shops')
        ->join('areas', 'areas_id', '=', 'areas.id')
        ->join('genres', 'genres_id', '=', 'genres.id')
        ->select( 'shops.name','shops.overview','shops.img','areas.name as areas_name', 'genres.name as genres_name')
        ->where('shops.id', $shop_id)
        ->get();
        return response()->json([
            'message' => 'OK',
            'data' => $result
        ], 200);
    }
}
