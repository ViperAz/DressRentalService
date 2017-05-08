<header id="header"><!--header-->
  		<div class="header-middle"><!--header-middle-->
  			<div class="container">
  				<div class="row">
  					<div class="col-sm-4">
  						<div class="logo pull-left">
  							<a href="{{ url('/') }}"><img src="img/logo.png" alt="" /></a>
  						</div>
  					</div>
  					<div class="col-sm-8">
  						<div class="shop-menu pull-right">
  							<ul class="nav navbar-nav">
                                @if (Auth::guest())
                                	<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="{{ route('register') }}"><i class="glyphicon glyphicon-user"></i> Register</a></li>
                                @else


  								{{-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
  								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
  								<li><a href="/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>

     <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/profile"
                                            onclick="">
                                            Profile
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

  							@endif
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div><!--/header-middle-->

  		<div class="header-bottom"><!--header-bottom-->
  			<div class="container">
  				<div class="row">
  					<div class="col-sm-9">
  						<div class="navbar-header">
  							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  								<span class="sr-only">Toggle navigation</span>
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  							</button>
  						</div>

  					</div>
  					<div class="col-sm-3">
  						<div class="search_box pull-right">
  							<input type="text" placeholder="Search"/>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div><!--/header-bottom-->
  	</header><!--/header-->
