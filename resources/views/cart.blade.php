@extends('layouts.master')
@section('content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
<!--							<td class="image">Item</td>-->
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
                            <td class="Day">Day</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody v-model="total">
                        
						@foreach($data as $a)
                       
						<tr>
<!--
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
-->
							<td class="cart_description">
								<h4>Rental Product : {{ $a->rental_product_id }}</a>
                                </h4>
<!--								<p>Product ID: {{ $a->rental_product_id }}</p>-->
							</td>
							<td class="cart_price">
								<p id="cart_price">{{ $a->price }}</p>
							</td>
                            <td class="cart_quantity">
								<p id="cart_qty">{{ $a->quantity }}</p>
							</td>
                            <td class="cart_day">
								<p>{{ $a->return_date }}</p>
							</td>
							<td class="cart_total">
								<p id="cart_total_price"class="cart_total_price">{{ $a->price * $a->quantity }}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>

			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
<!--								<input type="checkbox">-->
                            
                                <h4>Gift Voucher</h4>

                                  </li>
                            <li>
                                <input id="voucher_code"type="text" class="cart_voucher_input" type="text" name="voucher_code" value="" autocomplete="off" placeholder="input code" >

							</li>
						</ul>

						      <button class="btn btn-default check_out pull-right" href="" onclick="BtnVoucher()">Use</button>
                        <br>
                        <br>
                        

					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total ฿<span id=sub_total >{{$total}}</span></li>
                            <li>Gift Voucher ฿<span id=discount>0</span></li>
							<li>Total ฿<span id=totalprice>{{$total-$discount}}</span></li>
						</ul>
<!--							<a class="btn btn-default update" href="">Update</a>--><form class="" action="/addTransaction" method="post">
                        
        <input type='hidden' name='_token' value="{{ csrf_token()}}">
        <input type='hidden' id='voucher_id' name='voucher_id' value="{{ csrf_token()}}">


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default get"> Check Out</button>
                          </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<script>
    
function BtnVoucher() {
//    $('#sub_total').html('{{$total}}');
    @foreach($vouchers as $v)
        
        if($('#voucher_code').val() == '{{$v->code}}'){
            $('#discount').html('{{$v->discount_price}}');
            $('#voucher_id').val('{{$v->id}}');
            $('#totalprice').html('{{$total - $v->discount_price}}');
//            {{$discount = $v->discount_price}};
        }
        else{
            alert("cannot use this voucher code");
            $('#discount').html('{{0}}');
            $('#voucher_id').val(null);
            $('#totalprice').html('{{$total}}');
        }
        
    @endforeach

    }


</script>
@endsection
