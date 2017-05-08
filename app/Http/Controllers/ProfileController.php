<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Auth;

class ProfileController extends Controller
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
        $id = Auth::user()->id;
        $cart_id = DB::table('shopping_carts')->where('user_id', $id)->value('id');
        $data = DB::table('order_details')->where('shopping_cart_id', $cart_id)->value('shopping_cart_id');
        $final_data = DB::table('order_details')->where('shopping_cart_id', $data)->value('is_complete');
        $history = DB::table('order_details')->where('is_complete', $final_data)->get();
        return view('profile', ['history' => $history]);
    }
}
