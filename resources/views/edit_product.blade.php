@extends('layouts.master')

@section('title', 'edit product')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='/product_edit' method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Edit Product</legend>
                            </div>
                            <div class="control-group">

                              <label for="product_id">product name:</label>
                              <select class="selectpicker" name="product_id" id="product_id">
                                @foreach($data as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                              @endforeach
                              </select>
                              <p class="help-block">category of product</p>
                            </div>

                            <div class="control-group">
                              <label for="category">Category:</label>
                              <select class="selectpicker" name="category" id="category" >
                                <option value="1">Shirt</option>
                                <option value="2">Pant</option>
                                <option value="3">Shorts</option>
                                <option value="4">Skirt</option>
                                <option value="5">Dress</option>
                                <option value="6">Suit</option>
                              </select>
                              <p class="help-block">category of product</p>
                            </div>

                            <div class="control-group">
                              <!-- item description -->
                              <label class="control-label" for="desc">Description</label>
                              <div class="controls">
                                <input type="text" id="desc" name="desc" placeholder="" class="form-control">
                                <p class="help-block">item description</p>
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
                                <button class="btn btn-success" type="submit" name="submit" value="Add">Edit Product</button>
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
