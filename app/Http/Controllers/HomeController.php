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
            ->select('products.*', 'rental_products.price','rental_products.day','products_img.img_url')
            ->where('products.category_id', '=' ,$id)
            //show only product for 3 days
            ->where('rental_products.day', '=' ,'3')
            ->get();
            return $product; 
    }
    public function show()
    {
//        $rental = DB::table('rental_product')->get();
//        $id = 1;
        $item = DB::table('products')
//            ->join('rental_products','products.id','=','rental_products.product_id') 
//            ->select('products.*', 'rental_products.price','rental_products.day','products_img.img_url')
//            ->where('rental_products.day', '=' ,'3')
            ->get();
        $data = DB::table('products')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->join('products_img','products.id','=','products_img.product_id') 
            ->select('products.*', 'rental_products.price','rental_products.day','products_img.img_url')
            ->get();
        
//        $rental_promotion = DB::table('rental_products')
//            ->join('promotions','rental_products.id','=','promotions.rental_product')
//            ->select('promotions.*','rental_products.product_id')
//            ->get();
        $rental = DB::table('rental_products')
            ->get();
            
        $promotions = DB::table('promotions')
            ->join('rental_products','promotions.rental_product','=','rental_products.id')
            ->join('products','rental_products.product_id','=','products.id')
            ->join('products_img','products.id','=','products_img.product_id') 
            ->select('promotions.*','products_img.img_url','rental_products.product_id','products.name','products.desc')
            ->get();
        return view('home', ['data' => $data,
                             'rental' => $rental,
//                             'rental_promotion' => $rental_promotion,
                             'item' => $item,
                             'promotions' => $promotions,
                            'controller' => $this
                            ]);
    }
    public  function addToCart(Request $r){
        $item = DB::table('products')
            ->get();
        $data = DB::table('products')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->join('products_img','products.id','=','products_img.product_id') 
            ->select('products.*', 'rental_products.price','rental_products.day','products_img.img_url')
            ->get();
        
        $rental = DB::table('rental_products')
            ->get();
            
        $promotions = DB::table('promotions')
            ->join('rental_products','promotions.rental_product','=','rental_products.id')
            ->join('products','rental_products.product_id','=','products.id')
            ->join('products_img','products.id','=','products_img.product_id') 
            ->select('promotions.*','products_img.img_url','rental_products.product_id','products.name','products.desc')
            ->get();
        return view('home', ['data' => $data,
                             'rental' => $rental,

                             'item' => $item,
                             'promotions' => $promotions,
                            'controller' => $this
                            ]);
    }
}
