<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function index()
    {
        return view('index');
    }
    public function products()
    {
        $products = DB::table('products')->get();
        return view('products',['products'=>$products]);
    }
    public function single_product(Request $request,$id){
        $product_array = DB::table('products')->where('id',$id)->get();
        return view('single_product',['product_array'=>$product_array]);
    }

}
