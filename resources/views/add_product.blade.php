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
                              <label class="control-label"  for="name">Item Name</label>
                              <div class="controls">
                                <input type="text" id="name" name="name" placeholder="" class="form-control">
                                <p class="help-block">Item name can contain any letters or numbers</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <label for="category">Category:</label>
                              <select class="selectpicker" name="category" id="category">
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
                              <label class="control-label">Select Image File</label>
                              <input id="input-4" name="input4[]" type="file" multiple class="file-loading" accept="image/*">
                              <script>
                              $(document).on('ready', function() {
                                  $("#input-4").fileinput({showCaption: false});
                              });
                              </script>
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
