<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    </div>
      


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Categories 
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="#"
                        onclick="">
                        All
                    </a>
                    <a href=""
                        onclick="">
                        Dresses
                    </a>
                    <a href=""
                        onclick="">
                        clothing
                    </a>
                    <a href=""
                        onclick="">
                        Accessories
                    </a>
                    <a href=""
                        onclick="">
                        Occasions
                    </a>

                </li>
            </ul>
        </li>
        

     </ul>
     <ul class="nav navbar-nav navbar-right top-right">
                                 @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
         
                <li><a href=""><img src="image/basket.png" alt="" style="height:23px;"></a></li>
                 <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }}
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="#"
                        onclick="">
                        profile
                    </a>
                    <a href=""
                        onclick="">
                        logout
                    </a>


                </li>
            </ul>
        </li>

        @endif
     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
