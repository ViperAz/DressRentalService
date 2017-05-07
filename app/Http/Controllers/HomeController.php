<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = DB::table('promotions')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->get();
//        $category = DB::table('category')->get();
        $products = DB::table('products')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->join('products_img','products.id','=','products_img.product_id') 
            ->select('products.*', 'rental_products.price','products_img.img_url')
            ->get();
        
        return view('home', ['products' => $products,
//                             'categorys'=> $category,
                             'promotions' => promotions,
                             'controller' => $this
                            ]);
    }
    public function show_category_by_id($id){
        $product = DB::table('products')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->join('products_img','products.id','=','products_img.product_id') 
            ->select('products.*', 'rental_products.price','products_img.img_url')
            ->where('category_id', '=' ,$id)
            ->get();
            return $product; 
    }
    public function show()
    {
//        $rental = DB::table('rental_product')->get();
        $product = DB::table('products')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->join('products_img','products.id','=','products_img.product_id') 
            ->select('products.*', 'rental_products.price','products_img.img_url')
//            ->where('products.id', '=' ,$id)
            ->get();
        $rental = DB::table('rental_products')->get();
//        $promotion = DB::table('promotion')->get();
        return view('home', ['data' => $product,
                             'rental' => $rental,
                            'controller' => $this
                            ]);
    }
    public function showDetail($id)
    {     
       $product = DB::table('products')
            ->where('products.id', '=' ,$id)
            ->get();
        return $product;
    }
}
