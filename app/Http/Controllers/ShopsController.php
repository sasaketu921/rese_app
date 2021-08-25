<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class ShopsController extends Controller
{
    /**
     * リソースのリストを表示します。
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $result = DB::table('shops')
    ->select('shops.id as shops_id','overview','img','shops.name as shops_name', 'areas.name as areas_name', 'genres.name as genres_name')
    ->join('areas', 'areas_id', '=', 'areas.id')
    ->join('genres', 'genres_id', '=', 'genres.id')
    ->get();
    return response()->json([
        'message' => 'OK',
        'data' => $result
    ], 200);
    }

    public function show(Shop $shop)
    {
        $userAuth = Auth::user();
        $shop->load(likes);
        $DefaultLiked = $shop->likes->where('user_id', $userAuth->id)->first();
        if(count($DefaultLiked) == 0) {
            $DefaultLiked == false; 
        } else {
            $DefaultLiked == true;   
        }
    }
};