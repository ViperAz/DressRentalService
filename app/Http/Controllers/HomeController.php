<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;

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
            ->join('product_images','products.id','=','product_images.product_id') 
            ->select('products.*', 'rental_products.price','rental_products.day','product_images.img_url')
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
            ->join('product_images','products.id','=','product_images.product_id') 
            ->select('products.*','product_images.img_url')
            ->get();
        $data = DB::table('products')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->join('product_images','products.id','=','product_images.product_id') 
            ->select('products.*', 'rental_products.price','rental_products.day','product_images.img_url')
            ->get();
        $rental = DB::table('rental_products')
            ->get();
            
        $promotions = DB::table('promotions')
            ->join('rental_products','promotions.rental_product_id','=','rental_products.id')
            ->join('products','rental_products.product_id','=','products.id')
            ->join('product_images','products.id','=','product_images.product_id') 
            ->select('promotions.*','product_images.img_url','rental_products.product_id','products.name','products.desc')
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
        $user_id = Auth::user()->id;
        $shopping_cart = DB::table("shopping_carts")->where("shopping_carts.user_id",'=', $user_id)->first();

        if (is_null($shopping_cart)){
            $data = array('user_id'=>$user_id);
            DB::table('shopping_carts')->insert($data);
            
        }
        $shopping_cart_id = DB::table("shopping_carts")->where("shopping_carts.user_id",'=', $user_id)->get();
        foreach($shopping_cart_id as $s){
            $s_id = $s->id;
        }
 
            
            
        $dt = Carbon::now();
        $dt->addDays($r->input("selector"));
        
        
        $sub_data = array('shopping_cart_id'=> $s_id,
                      'rental_product_id'=> $r->input("selector"),
                      'quantity'=> $r->input("product_qty"),
                      'price'=> $r->input("total_price"),
                      'return_date' => $dt,
                      'is_complete' => '0'
        );
        DB::table('order_details')->insert($sub_data);
            
        
        
        $item = DB::table('products')->get();
        
        $data = DB::table('products')
            ->join('rental_products','products.id','=','rental_products.product_id')
            ->join('product_images','products.id','=','product_images.product_id') 
            ->select('products.*', 'rental_products.price','rental_products.day','product_images.img_url')
            ->get();
        
        $rental = DB::table('rental_products')->get();
            
        $promotions = DB::table('promotions')
            ->join('rental_products','promotions.rental_product_id','=','rental_products.id')
            ->join('products','rental_products.product_id','=','products.id')
            ->join('product_images','products.id','=','product_images.product_id') 
            ->select('promotions.*','product_images.img_url','rental_products.product_id','products.name','products.desc')
            ->get();
             return redirect('home/');
//         return view('home', ['data' => $data,
//                              'rental' => $rental,
// //                             'rental_promotion' => $rental_promotion,
//                              'item' => $item,
//                              'promotions' => $promotions,
//                             'controller' => $this
//                             ]);
        
    }
}
