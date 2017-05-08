@extends('layouts.master')

@section('title', 'add voucher page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='/promotion-create' method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Add Promotion</legend>
                            </div>

                            <div class="control-group">
                              {{ csrf_field() }}
                              <!-- E-mail -->
                              <label class="control-label" for="rental_product_id">Rental Product ID</label>
                              <div class="controls">
                                <input type="text" id="rental_product_id" name="rental_product_id" placeholder="" class="input-xlarge" >
                                <p class="help-block"> Voucher Code </p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- item description -->
                              <label class="control-label" for="one_day_price">1 day price</label>
                              <div class="controls">
                                <input type="text" id="one_day_price" name="one_day_price" placeholder="" class="form-control">
                                <p class="help-block">item description</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- item description -->
                              <label class="control-label" for="three_day_price">3 day price</label>
                              <div class="controls">
                                <input type="text" id="three_day_price" name="three_day_price" placeholder="" class="form-control">
                                <p class="help-block">item description</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- item description -->
                              <label class="control-label" for="five_day_price">5 day price</label>
                              <div class="controls">
                                <input type="text" id="five_day_price" name="five_day_price" placeholder="" class="form-control">
                                <p class="help-block">item description</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="start_date">Start</label>
                              <div class="controls">
                                <input type="date" id="voucherCode" name="start_date" placeholder="" class="input-xlarge">
                                <p class="help-block"> Voucher Code </p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="end_date">end</label>
                              <div class="controls">
                                <input type="date" id="voucherCode" name="end_date" placeholder="" class="input-xlarge">
                                <p class="help-block"> Voucher Code </p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- Button -->
                              <div class="controls">
                                <button class="btn btn-success">Add Voucher</button>
                              </div>
                            </div>
                          </fieldset>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
