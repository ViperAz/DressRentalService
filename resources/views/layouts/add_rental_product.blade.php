@extends('layouts.master')

@section('title', 'add item page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='/product-create' method="post">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Add Product</legend>
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
                              {{ csrf_field() }}
                              <!-- item name -->
                              <label class="control-label"  for="one_day">1 day price</label>
                              <div class="controls">
                                <input type="text" id="one_day" name="one_day" placeholder="" class="form-control">
                                <p class="help-block">Item name can contain any letters or numbers</p>
                              </div>
                            </div>

                            <div class="control-group">
                              {{ csrf_field() }}
                              <!-- item name -->
                              <label class="control-label"  for="three_day">3 days price</label>
                              <div class="controls">
                                <input type="text" id="three_day" name="three_day" placeholder="" class="form-control">
                                <p class="help-block">Item name can contain any letters or numbers</p>
                              </div>
                            </div>

                            <div class="control-group">
                              {{ csrf_field() }}
                              <!-- item name -->
                              <label class="control-label"  for="five_day">5 days price</label>
                              <div class="controls">
                                <input type="text" id="five_day" name="five_day" placeholder="" class="form-control">
                                <p class="help-block">Item name can contain any letters or numbers</p>
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
