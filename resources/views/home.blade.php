
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
              <h1><span>Special Coupon For limited Time</span></h1>
              <h2>Use Code : TEST</h2>
              <p>use test code for 20 baht discounted.</p>
              {{-- <button type="button" class="btn btn-default get">Get it now</button> --}}
            </div>
            {{-- <div class="col-sm-6">
              <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
              <img src="images/home/pricing.png"  class="pricing" alt="" />
            </div> --}}
          </div>
          {{-- <div class="item">
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
          </div> --}}

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
      
      </div>
    </div>

    <div class="col-sm-12 padding-right">
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
            <li><a href="#shorts" data-toggle="tab">Shorts</a></li>
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
            <div class="tab-pane fade" id="shorts" >
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
          <div class="tab-pane fade" id="skirt" >
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

          <div class="tab-pane fade" id="dress" >
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

          <div class="tab-pane fade" id="suit" >
               @foreach($controller->show_category_by_id('6') as $a)
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
         <input type='hidden' id='h_id' name='rental_id' value="">
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 id="product_name" class="modal-title">#ชื่อสินค้า</h4>
                              </div>
                            <div class="modal-body">
<!--
                              <div class="col-sm-12">
                                <div class="content">
                                <h3><img id="product_img" src="#"></h3>
                                </div>
                              </div>
-->
                            <div class="col-sm-6">
                              <div class="content">
                                <h2 id="product_id" name="product_id">Product ID :1089772</h2>
                                <h3 id="product_price" name="product_price" value="0">ราคา :#฿</h3>
                                <div class="col-sm-6">
                                Quantity:
                                </div>
                                <div class="col-sm-6" >
                                                    <div id=field1>
                                    <button type="button" id="sub" class=sub> - </button>
                                    <input name="product_qty" id="product_qty"class="cart_quantity_input" type="text" id="1"  size="2" value="1">
                                    <button type="button" id="add" class=add> + </button>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                Rent(Days):
                                </div>
                                <div id="rent_day" class="col-sm-6">

                              </div>
                              <br>

                          </div>
                        </div>

                  <div class="clearfix"></div>

                <div class="modal-footer">

                  <div class="text-right pull-right col-md-6">
                      ราคาทั้งหมด <br/>
                      <input id="total_price" name="total_price"type="text" size="5" value="0"  readonly >
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
//            array.push('{{$p->rental_product_id}}')
             array['{{$p->rental_product_id}}'] = '{{$p->price}}';
//            alert(array[0][1]+":"+array[1][1]);
        
        @endforeach
    function calTotalPrice()
    {
        
        $('#total_price').val(parseInt(($("#selector option:selected").text()).substring(10))*$('#product_qty').val());
//        $('#total_price').val($('select[name=selector]').val()*$('#product_qty').val());
        $('#product_price').text(($("#selector option:selected").text()).substring(10));
     
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
                    var pic = document.getElementById('product_img');
//                    
                    $('#product_id').text("Product ID: "+'{{$a->id}}');
                    $('#product_name').text('{{$a->name}}');

//                    $('#product_desc').text('{{$a->desc}}');
                    var html = '<select name="selector" id="selector"  onchange="calTotalPrice()"><optgroup label="Quantity" >';
                    @foreach($rental as $r)
                    if(id == '{{$r->product_id}}' && array[{{$r->id}}] > 0){
//                        alert('aa')
                        html += '<option value="'+'{{$r->id}}'+'">'+'{{$r->day}}'+'days :: ฿'+array[{{$r->id}}]+'</option>'
                        }
                     else if (id == '{{$r->product_id}}'){
                        html += '<option value="{{$r->id}}'+'">'+'{{$r->day}}'+'days :: ฿'+'{{$r->price}}'+'</option>'}
          
                    @endforeach
                    html += '</optgroup></select>';
                    $('#rent_day').html(html);
                }
        @endforeach
          $('#total_price').val(parseInt(($("#selector option:selected").text()).substring(10))*$('#product_qty').val());
//        $('#total_price').val($('select[name=selector]').val()*$('#product_qty').val());
        $('#product_price').text(($("#selector option:selected").text()).substring(10));
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
var unit = 0;
var total;
// if user changes value in field
$('.field').change(function() {
  unit = this.value;
});
$('.add').click(function() {
  if(unit==20){

  }else{
  unit++;
  var $input = $(this).prevUntil('.sub');
  $input.val(unit);
  unit = unit;
        $('#total_price').val(parseInt(($("#selector option:selected").text()).substring(10))*$('#product_qty').val());
//        $('#total_price').val($('select[name=selector]').val()*$('#product_qty').val());
        $('#product_price').text(($("#selector option:selected").text()).substring(10));
}
});
$('.sub').click(function() {
  if (unit == 1){

  }
  else if (unit > 0) {
    unit--;
    var $input = $(this).nextUntil('.add');
    $input.val(unit);
        $('#total_price').val(parseInt(($("#selector option:selected").text()).substring(10))*$('#product_qty').val());
//        $('#total_price').val($('select[name=selector]').val()*$('#product_qty').val());
        $('#product_price').text(($("#selector option:selected").text()).substring(10));
  }


});
</script>

@endsection
