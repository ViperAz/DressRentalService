
@extends('layouts.master')


@section('content')
<section id="slider"><!--slider-->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="slider-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#slider-carousel" data-slide-to="1"></li>
          <li data-target="#slider-carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <div class="col-sm-6">
              <h1><span>E</span>-SHOPPER</h1>
              <h2>Free E-Commerce Template</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <button type="button" class="btn btn-default get">Get it now</button>
            </div>
            <div class="col-sm-6">
              <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
              <img src="images/home/pricing.png"  class="pricing" alt="" />
            </div>
          </div>
          <div class="item">
            <div class="col-sm-6">
              <h1><span>E</span>-SHOPPER</h1>
              <h2>100% Responsive Design</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <button type="button" class="btn btn-default get">Get it now</button>
            </div>
            <div class="col-sm-6">
              <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
              <img src="images/home/pricing.png"  class="pricing" alt="" />
            </div>
          </div>

          <div class="item">
            <div class="col-sm-6">
              <h1><span>E</span>-SHOPPER</h1>
              <h2>Free Ecommerce Template</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <button type="button" class="btn btn-default get">Get it now</button>
            </div>
            <div class="col-sm-6">
              <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
              <img src="images/home/pricing.png" class="pricing" alt="" />
            </div>
          </div>

        </div>

        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>

    </div>
  </div>
</div>
</section><!--/slider-->
<br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="left-sidebar">
        <h2>category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#">Fashion</a></h4>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#">Households</a></h4>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#">Interiors</a></h4>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#">Clothing</a></h4>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#">Bags</a></h4>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#">Shoes</a></h4>
            </div>
          </div>
        </div><!--/category-products-->

      </div>
    </div>

    <div class="col-sm-9 padding-right">
      <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Promotions</h2>
          @foreach($promotions as $p)
        <form class="" action="HomeController.php" method="post">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{$p->img_url}}" alt="" />
                  <h2>฿{{$p->price}} for {{$p->day}} Days</h2>
                  <p>{{$p->name}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>details</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>฿{{$p->price}} for {{$p->day}} Days</h2>
                    <p>{{$p->name}}</p>
                    <a href="#" name="{{$p->id}}" onclick="showDetail({{$p->product_id}})" class="btn btn-default add-to-cart" data-toggle="modal" data-target="#myModal" >
                      <i class="fa fa-shopping-cart"></i>details</a>     
                  </div>
                </div>
            </div>
          </div>
        </div>
        </form>
        @endforeach



      </div><!--features_items-->

      <div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#shirt" data-toggle="tab">Shirt</a></li>
            <li><a href="#pants" data-toggle="tab">Pants</a></li>
            <li><a href="#skirt" data-toggle="tab">Skirt</a></li>
            <li><a href="#dress" data-toggle="tab">Dress</a></li>
            <li><a href="#suit" data-toggle="tab">Suit</a></li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="shirt" >
          @foreach($controller->show_category_by_id('1') as $a)
        <form class="" action="HomeController.php" method="post">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{$a->img_url}}" alt="" />
                  <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                  <p>{{$a->name}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>details</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                    <p>{{$a->name}}</p>
                    <a href="#" class="btn btn-default add-to-cart" onclick="showDetail({{$a->id}})" data-toggle="modal" data-target="#myModal" >
                      <i class="fa fa-shopping-cart"></i>details</a>     
                  </div>
                </div>
            </div>
          </div>
        </div>
        </form>
        @endforeach

          </div>

          <div class="tab-pane fade" id="pants" >

            @foreach($controller->show_category_by_id(2) as $b)
        <form class="" action="HomeController.php" method="post">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{$b->img_url}}" alt="" />
                  <h2>฿{{$b->price}} for {{$b->day}} Days</h2>
                  <p>{{$b->name}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>details</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>฿{{$b->price}} for {{$b->day}} Days</h2>
                    <p>{{$b->name}}</p>
                    <a href="#" class="btn btn-default add-to-cart" onclick="showDetail({{$b->id}})" data-toggle="modal" data-target="#myModal" >
                      <i class="fa fa-shopping-cart"></i>details</a>     
                  </div>
                </div>
            </div>
          </div>
        </div>
        </form>
        @endforeach

          </div>

          <div class="tab-pane fade" id="skirt" >
          @foreach($controller->show_category_by_id('3') as $a)
        <form class="" action="HomeController.php" method="post">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{$a->img_url}}" alt="" />
                  <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                  <p>{{$a->name}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>details</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                    <p>{{$a->name}}</p>
                    <a href="#" class="btn btn-default add-to-cart" onclick="showDetail({{$a->id}})" data-toggle="modal" data-target="#myModal" >
                      <i class="fa fa-shopping-cart"></i>details</a>     
                  </div>
                </div>
            </div>
          </div>
        </div>
        </form>
        @endforeach
          </div>

          <div class="tab-pane fade" id="dress" >
             @foreach($controller->show_category_by_id('4') as $a)
        <form class="" action="HomeController.php" method="post">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{$a->img_url}}" alt="" />
                  <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                  <p>{{$a->name}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>details</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                    <p>{{$a->name}}</p>
                    <a href="#" class="btn btn-default add-to-cart" onclick="showDetail({{$a->id}})" data-toggle="modal" data-target="#myModal" >
                      <i class="fa fa-shopping-cart"></i>details</a>     
                  </div>
                </div>
            </div>
          </div>
        </div>
        </form>
        @endforeach
          </div>

          <div class="tab-pane fade" id="suit" >
               @foreach($controller->show_category_by_id('5') as $a)
        <form class="" action="HomeController.php" method="post">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{$a->img_url}}" alt="" />
                  <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                  <p>{{$a->name}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>details</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>฿{{$a->price}} for {{$a->day}} Days</h2>
                    <p>{{$a->name}}</p>
                    <a href="#" class="btn btn-default add-to-cart" onclick="showDetail({{$a->id}})" data-toggle="modal" data-target="#myModal" >
                      <i class="fa fa-shopping-cart"></i>details</a>     
                  </div>
                </div>
            </div>
          </div>
        </div>
        </form>
        @endforeach
          </div>
        </div>
      </div><!--/category-tab-->


    </div>
  </div>
</div>
    <!-- Modal -->
    <form class="" action="/addToCart" method="post">
         <!-- Modal -->
        <input type='hidden' name='_token' value="{{ csrf_token()}}">
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 id="product_name" class="modal-title">#ชื่อสินค้า</h4>
                              </div>
                            <div class="modal-body">
                              <div class="col-sm-6">
                                <div class="content">
                                <h3>Image</h3>
                                </div>
                              </div>
                            <div class="col-sm-6">
                              <div class="content">
                                <h2 id="product_id">Product ID :1089772</h2>
                                <h3 id="product_price">ราคา :#฿</h3>
                                <div class="col-sm-6">
                                Quantity:
                                </div>
                                <div class="col-sm-6" >
                                  <div class="col-xs-1">
                                  <input id="product_qty"type="text" onchange="calTotalPrice()" value="1"  >
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                Rent(Days):
                                </div>
                                <div id="rent_day" class="col-sm-6">
<!--
                                <select>
                                    <optgroup label="Quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>

                                  </optgroup>
                                </select>
-->
                              </div>
                              <br>

                          </div>
                        </div>

                  <div class="clearfix"></div>

                <div class="modal-footer">

                  <div class="text-right pull-right col-md-4">
                      ราคาทั้งหมด <br/>
                      <span id="total_price" class="h3 text-muted" id="total_price"><strong>฿</strong></span></span>
                  </div>

                  <div class="text-right pull-right col-md-4">
                      จำนวนสิ้นค้า <br/>
                      <span class="h3 text-muted"><strong></strong></span>
                  </div>
                  <div class="text-right pull-right col-md-4">
                      จำนวนวันที่ยืม <br/>
                      <span class="h3 text-muted"><strong></strong></span>
                  </div>


              </div>
                            </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-default get"> Add to cart</button>
                          </div>
                        </div>     
                      
                      </div>
                    </div>
                    <!-- End Modal -->
    </form>

<script>
    var array=[]
            @foreach($promotions as $p)
//            array.push('{{$p->rental_product}}')
             array['{{$p->rental_product}}'] = '{{$p->price}}';
//            alert(array[0][1]+":"+array[1][1]);
        
        @endforeach
    function calTotalPrice()
    {
        
        $('#total_price').text($('select[name=selector]').val()*$('#product_qty').val());
    }
    function checkPromotion(id)
    {
        var pro_price = 0;
        @foreach($rental as $r)
            if(id == '{{$r->product_id}}' && array[{{$r->id}}] > 0){
                pro_price = array[{{$r->id}}];
            }
            else if(id == '{{$r->product_id}}' ){
                pro_price = '{{$r->price}}';
            }
        @endforeach
        return pro_price
    }
    function showDetail(id)
    {
       

        @foreach($item as $a)
           
            if(id == '{{$a->id}}')
                {
//                   alert("Hiii"+'{{$a->id}}');
                    $('#product_id').text("Product ID: "+'{{$a->id}}');
                    $('#product_name').text('{{$a->name}}');

//                    $('#product_desc').text('{{$a->desc}}');
                    var html = '<select name="selector" id="selector" onchange="calTotalPrice()"><optgroup label="Quantity" >';
                    @foreach($rental as $r)
                    if(id == '{{$r->product_id}}' && array[{{$r->id}}] > 0){
//                        alert('aa')
                        html += '<option value="'+array[{{$r->id}}]+'">'+'{{$r->day}}'+'days :: ฿'+array[{{$r->id}}]+'</option>'
                        }
                     else if (id == '{{$r->product_id}}'){
                        html += '<option value="{{$r->price}}'+'">'+'{{$r->day}}'+'days :: ฿'+'{{$r->price}}'+'</option>'}
          
                    @endforeach
                    html += '</optgroup></select>';
                    $('#rent_day').html(html);
                }
        @endforeach
    }
//    function showPromotionDetail(id)
//    {
//      @foreach($promotions as $p)
////            alert("Hiii"+id+{{$a->id}});
//            if(id == {{$p->id}}+"")
//                {
//                   
//                    $('#product_id').text("Product ID: "+'{{$p->id}}');
//                    $('#product_name').text('{{$p->name}}');
//                    $('#product_price').text('ราคา : ฿'+'{{$p->price}}');
////                    $('#product_desc').text('{{$p->desc}}');
//                    var html = '<select><optgroup label="Quantity">';
//                    @foreach($rental as $r)
//                        if(id == '{{$r->product_id}}')
//                        html += '<option value="'+'{{$r->price}}'+'">'+'{{$r->day}}'+'days :: ฿'+'{{$r->price}}'+'</option>'
//                    @endforeach
//                    html += '</optgroup></select>';
//                    $('#rent_day').html(html);
//                    
//                }
//        @endforeach  
//    }
</script>

@endsection
