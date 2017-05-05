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
                              <legend class="">Add Voucher</legend>
                            </div>

                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="voucherCode">Voucher Code</label>
                              <div class="controls">
                                <input type="text" id="voucherCode" name="voucherCode" placeholder="" class="input-xlarge">
                                <p class="help-block"> Voucher Code </p>
                              </div>
                            </div>

                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="start" />
                                <span class="input-group-addon">to</span>
                                <input type="text" class="input-sm form-control" name="end" />
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
$('#sandbox-container .input-daterange').datepicker({
});
</script>

@endsection
