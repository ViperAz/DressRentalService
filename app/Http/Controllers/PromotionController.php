<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rental_product_id = $request->input('rental_product_id');
        $one_day_price= $request->input('one_day_price');
        $three_day_price= $request->input('three_day_price');
        $five_day_price= $request->input('five_day_price');
        $start = $request->input('start_date');
        $end = $request->input('end_date');

        $start_date = Carbon::createFromFormat('Y-m-d H', $start.' 0')->toDateTimeString();
        $end_date = Carbon::createFromFormat('Y-m-d H', $end.' 0')->toDateTimeString();

        $data = array('rental_product_id'=>$rental_product_id,'day'=>'1','price'=>$one_day_price,'start_date'=>$start_date,'end_date'=>$end_date);
        DB::table('promotions')->insert($data);

        $data2 = array('rental_product_id'=>$rental_product_id,'day'=>'3','price'=>$three_day_price,'start_date'=>$start_date,'end_date'=>$end_date);
        DB::table('promotions')->insert($data2);

        $data3 = array('rental_product_id'=>$rental_product_id,'day'=>'5','price'=>$five_day_price,'start_date'=>$start_date,'end_date'=>$end_date);
        DB::table('promotions')->insert($data3);

        return view('admin_main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
