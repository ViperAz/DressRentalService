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
							<td class="image">Item</td>
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
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $a->shopping_cart_id }}</a></h4>
								<p>Product ID: {{ $a->rental_product_id }}</p>
							</td>
							<td class="cart_price">
								<p>{{ $a->price }}</p>
							</td>
                            <td class="cart_quantity">
								<p>{{ $a->quantity }}</p>
							</td>
                            <td class="cart_day">
								<p>{{ $a->return_date }}</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"></p>
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
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
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
                                <input type="text" class="cart_voucher_input" type="text" name="voucher_code" value="" autocomplete="off" placeholder="input code" >

							</li>
						</ul>

						      <a class="btn btn-default check_out pull-right" href="">Use</a>
                        <br>
                        <br>

					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
                            <li>Gift Voucher <span>$2</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection
