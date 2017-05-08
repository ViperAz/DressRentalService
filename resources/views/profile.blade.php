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
                  <label for="name" class="col-md-4 control-label">Name</label>
                    {{ Auth::user()->name }}
              </div>

              <div class="form-group">
                  <label for="birthdate" class="col-md-4 control-label">Date of Birth</label>
                    {{ Auth::user()->birthdate }}
              </div>

              <div class="form-group">
                  <label for="address" class="col-md-4 control-label">Address</label>
                    {{ Auth::user()->Address }}
              </div>

              <div class="form-group">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                    {{ Auth::user()->email }}
              </div>

              <div class="form-group">
                  <label for="history" class="col-md-4 control-label">Purchased History</label>
                  <table>
                    @foreach($history as $histories)
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Day</th>
                        <th>Total</th>
                      </tr>
                    </thead>

                    <tfoot>
                      <tr>
                        <th>{{ $histories->shopping_cart_id }}</th>
                        <th>{{ $histories->price }}</th>
                        <th>{{ $histories->quantity }}</th>
                        <th>{{ $histories->return_date }}</th>
                        <th>{{ $histories->price * $histories->quantity }}</th>
                      </tr>
                    </tfoot>
                    @endforeach
                  </table>

              </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
