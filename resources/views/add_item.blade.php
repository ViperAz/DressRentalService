@extends('layouts.master')

@section('title', 'add item page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='/item-create' method="post">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Add Item</legend>
                            </div>

                            <div class="control-group">
                              {{ csrf_field() }}
                              <!-- item name -->
                              <label class="control-label"  for="name">Item Name</label>
                              <div class="controls">
                                <input type="text" id="name" name="name" placeholder="" class="input-xlarge">
                                <p class="help-block">Item name can contain any letters or numbers</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- item price -->
                              <label class="control-label" for="price">Item Price</label>
                              <div class="controls">
                                <input type="text" id="price" name="price" placeholder="" class="input-xlarge"> $
                                <p class="help-block">price of item </p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- item description -->
                              <label class="control-label" for="desc">Description</label>
                              <div class="controls">
                                <input type="text" id="desc" name="desc" placeholder="" class="input-xxlarge">
                                <p class="help-block">item description</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- item image -->
                              <label class="control-label" for="img_url">Image</label>
                              <div class="controls">
                                <input type="text" id="img_url" name="img_url" placeholder="" class="input-xxlarge">
                                <p class="help-block">Url of Image </p>
                              </div>
                            </div>
                            <br>

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
