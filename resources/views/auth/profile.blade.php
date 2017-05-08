@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group">
                  <label for="email" class="col-md-4 control-label">Name</label>

              </div>

              <div class="form-group">
                  <label for="email" class="col-md-4 control-label">Date of Birth</label>

              </div>

              <div class="form-group">
                  <label for="email" class="col-md-4 control-label">Address</label>

              </div>

              <div class="form-group">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              </div>

              <div class="form-group">
                  <label for="history" class="col-md-4 control-label">Purchased History</label>

              </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
