@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Add Item</legend>
                            </div>

                            <div class="control-group">
                              <!-- Username -->
                              <label class="control-label"  for="itemName">Item Name</label>
                              <div class="controls">
                                <input type="text" id="itemName" name="itemName" placeholder="" class="input-xlarge">
                                <p class="help-block">Item name can contain any letters or numbers</p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="itemPrice">Item Price</label>
                              <div class="controls">
                                <input type="text" id="itemPrice" name="itemPrice" placeholder="" class="input-xlarge"> $
                                <p class="help-block">price of item </p>
                              </div>
                            </div>


                            <div class="control-group">
                              <label class="control-label" for="itemImage">Select Image</label>
                                <div class="panel panel-default">
                                  <div class="controls">
                                    <input type="file" name="itemImage" accept="image/png, image/jpeg, image/gif" />
                                  </div>
                                <br>
                              </div>
                            </div>


                            <div class="control-group">
                              <!-- Button -->
                              <div class="controls">
                                <button class="btn btn-success">Add Item</button>
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
