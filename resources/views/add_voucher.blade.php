@extends('layouts.master')

@section('title', 'add voucher page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='/voucher-create' method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Add Promotion</legend>
                            </div>

                            <div class="control-group">
                              {{ csrf_field() }}
                              <!-- E-mail -->
                              <label class="control-label" for="code">Voucher Code</label>
                              <div class="controls">
                                <input type="text" id="code" name="code" placeholder="" class="input-xlarge" >
                                <p class="help-block"> Voucher Code </p>
                              </div>
                            </div>


                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="discount_price">Discount price</label>
                              <div class="controls">
                                <input type="text" id="discount_price" name="discount_price" placeholder="" class="input-xlarge">
                                <p class="help-block">Discount price</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="start_date">Start</label>
                              <div class="controls">
                                <input type="date" id="voucherCode" name="start_date" placeholder="" class="input-xlarge">
                                <p class="help-block">Start Date</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="end_date">end</label>
                              <div class="controls">
                                <input type="date" id="voucherCode" name="end_date" placeholder="" class="input-xlarge">
                                <p class="help-block">End Date</p>
                              </div>
                            </div>

                            <!-- <div class="control-group">
                               type
                              <label class="control-label" for="voucherType">Voucher Type</label>
                              <div class="controls">
                                <div class="radio">
                                    <label><input type="radio" name="voucherType">one time use</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="voucherType">reusable</label>
                                </div>
                              </div>
                              <br>
                            </div> -->

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
