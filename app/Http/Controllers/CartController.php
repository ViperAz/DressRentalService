<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Auth;

class CartController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total = 0 ;
        $discount = 0;
        $user_id = Auth::user()->id;
        
        $shopping_card_id = DB::table('shopping_carts')->where('user_id','=',$user_id)->value('id');
        
        $data = DB::table('order_details')
            ->where('shopping_cart_id','=',$shopping_card_id)
            
            ->get();
        foreach($data as $d){
            $total += ($d->price * $d->quantity);
            
        }
        
//        $user_id = DB::table('users')->where('name', $name)->value('id');
//        $data = DB::table('order_details')->where('id', $user_id)->get();
        
        $vouchers = DB::table('vouchers')->get();
        return view('cart',['data' => $data,
                            'vouchers' => $vouchers,
                            'controller' => $this,
                            'user_id' => $user_id,
                            'shopping_cart_id' => $shopping_card_id,
                            'total' => $total,
                            'discount' => $discount
                           ]);
    }
    public function addTransaction(Request $r){
        $total =0;
        $user_id = Auth::user()->id;
        
        $shopping_card_id = DB::table('shopping_carts')->where('user_id','=',$user_id)->value('id');
        
        $data = DB::table('order_details')
            ->where('shopping_cart_id','=',$shopping_card_id)
            
            ->get();
        foreach($data as $d){
            $total += ($d->price * $d->quantity);
            
        }
        foreach($data as $d){
            $dataToInsert = array('user_id' => $user_id,
                                  'order_detail_id' => $d->id,
                                  'voucher_id' => $r->input('voucher_id'),
                                  'total_price'=> $total
                                 );
            DB::table('transactions')->insert($dataToInsert);
        }
        return redirect('home/');
    }
}
