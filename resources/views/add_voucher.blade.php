@extends('layouts.master')

@section('title', 'add voucher page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="form-horizontal" action='/voucher-create' method="post">
                        <fieldset>
                            <div id="legend">
                              <legend class="">Add Promotion</legend>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="voucherCode">Voucher Code</label>
                              <div class="controls">
                                <input type="text" id="voucherCode" name="voucherCode" placeholder="" class="input-xlarge">
                                <p class="help-block"> Voucher Code </p>
                              </div>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="discountPercent">Discount Percentage</label>
                              <div class="controls">
                                <input type="text" id="discountPercent" name="discountPercent" placeholder="" class="input-xlarge">
                                <p class="help-block"> Percentage of Discount </p>
                              </div>
                            </div>

                            <div class="control-group">
                              <label class="control-label" for="start">Start Datetime</label>
                              <div class='input-group date'>
                              <input type='text' class="form-control" data-provide="datepicker" name="start"/>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                            </div>

                            <div class="control-group">
                              <label class="control-label" for="end">End Datetime</label>
                              <div class='input-group date'>
                              <input type='text' class="form-control" data-provide="datepicker" name="end"/>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                            </div>
                            <br>

                            <div class="control-group">
                              <!-- type -->
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
<script type="text/javascript">
    $(document).ready(function () {
    // DateTime picker for Dates
    $("#startDate").datetimepicker();
    });
</script>
@endsection
