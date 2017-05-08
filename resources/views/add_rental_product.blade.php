@extends('layouts.master')

@section('title', 'add item page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='/rental_product-create ' method="post">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Add rental Product</legend>
                            </div>

                            <div class="control-group">
                              {{ csrf_field() }}
                              <!-- item name -->
                              <label class="control-label"  for="product_id">product id</label>
                              <div class="controls">
                                <input type="text" id="product_id" name="product_id" placeholder="" class="form-control">
                                <p class="help-block">Item name can contain any letters or numbers</p>
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
                              <!-- Button -->
                              <div class="controls">
                                <button class="btn btn-success" type="submit" name="submit" value="Add">Add Item</button>
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
