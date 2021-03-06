<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!---------Seo--------->
        <meta name="description" content="{{$meta_desc}}">
        <meta name="keywords" content="{{$meta_keywords}}"/>
        <meta name="robots" content="INDEX,FOLLOW"/>
        <link  rel="canonical" href="{{$url_canonical}}" />
        <meta name="author" content="">
        <link  rel="icon" type="image/x-icon" href="" />
        {{--   
        <meta property="og:image" content="{{$image_og}}" />
        <meta property="og:site_name" content="http://localhost/shopbanhang/" />
        <meta property="og:description" content="{{$meta_desc}}" />
        <meta property="og:title" content="{{$meta_title}}" />
        <meta property="og:url" content="{{$url_canonical}}" />
        <meta property="og:type" content="website" />
        --}}
        <!--//-------Seo--------->
        <title>{{$meta_title}}</title>
        <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    </head>
    <!--/head-->
    <body>
        <header id="header">
            <!--header-->
            <div class="header_top">
                <!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href=""><i class="fa fa-home"></i>5/6, H?? Huy Gi??p, Th???nh L???c, TP HCM</a></li>
                                    <li><a href=""><i class="fa fa-phone"></i>0705599174</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header_top-->
            <div class="header-middle">
                <!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/logo4.png')}}" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <?php
                                        $customer_id = Session::get('customer_id');
                                        if ($customer_id != null) {
                                        ?>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <img width="15%" src="{{Session::get('customer_picture')}}"> 
                                            <span>{{Session::get('customer_name')}}</span>
                                            <ul class="dropdown-menu extended logout">
                                                <li>
                                        <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>????ng xu???t</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                        } else {
                                        ?>
                                    <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
                                    <?php
                                        }
                                        ?>
                                    <?php
                                        $customer_id = Session::get('customer_id');
                                        $shipping_id = Session::get('shipping_id');
                                        if ($customer_id != null && $shipping_id == null) {
                                        ?>
                                    <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                    <?php
                                        } elseif ($customer_id != null && $shipping_id != null) {
                                        ?>
                                    <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                    <?php
                                        } else {
                                        ?>
                                    <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                    <?php
                                        }
                                        ?>
                                    <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i>
                                       Gi??? h??ng
                                          <span class="badges">
                                             <span class="show-cart"></span>
                                          </span>
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-middle-->
            <div class="header-bottom fixNav">
                <!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7" style="top: -10px">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang ch???</a></li>
                                    <li class="dropdown">
                                        <a href="#">S???n ph???m<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            @foreach($category as $key => $danhmuc)
                                            <li><a href="{{URL::to('/danh-muc/'.$danhmuc->slug_category_product)}}">{{$danhmuc->category_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    </li>
                                    <li><a href="{{URL::to('/gio-hang')}}">Gi??? h??ng<span class="badges">
                                            <span class="show-cart"></span>
                                        </span></a>
                                        
                                    </li>
                                    <li><a href="{{URL::to('/lien-he')}}">Li??n h???</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5" style="margin: -20px">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                {{csrf_field()}}
                                <div class="search_box pull-right">
                                    <input type="text" name="keywords_submit" placeholder="T??m ki???m s???n ph???m"/>
                                    <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="T??m ki???m">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-bottom-->
        </header>
        <!--/header-->
        <section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="{{URL::to('/trang-chu')}}">Trang ch???</a></li>
                        <li class="active">Gi??? h??ng c???a b???n</li>
                    </ol>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @elseif(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
                <div class="table-responsive cart_info">
                    <form action="{{url('/update-cart')}}" method="POST">
                        @csrf
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image">H??nh ???nh</td>
                                    <td class="description">T??n s???n ph???m</td>
                                    <td class="price">Gi?? s???n ph???m</td>
                                    <td class="quantity">S??? l?????ng</td>
                                    <td class="total">Th??nh ti???n</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::get('cart')==true)
                                @php
                                $total = 0;
                                @endphp
                                @foreach(Session::get('cart') as $key => $cart)
                                @php
                                $subtotal = $cart['product_price']*$cart['product_qty'];
                                $total+=$subtotal;
                                @endphp
                                <tr>
                                    <td class="cart_product">
                                        <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="90" alt="{{$cart['product_name']}}" />
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href=""></a></h4>
                                        <p>{{$cart['product_name']}}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{number_format($cart['product_price'],0,',','.')}}??</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">
                                            {{number_format($subtotal,0,',','.')}}??
                                        </p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td><input type="submit" value="C???p nh???t gi??? h??ng" name="update_qty" class="check_out btn btn-default btn-sm"></td>
                                    <td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">X??a t???t c???</a></td>
                                    <td>
                                        @if(Session::get('coupon'))
                                        <a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">X??a m?? khuy???n m??i</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if(Session::get('customer_id'))
                                        <a class="btn btn-default check_out" href="{{url('/checkout')}}">?????t h??ng</a>
                                        @else
                                        <a class="btn btn-default check_out" href="{{url('/dang-nhap')}}">?????t h??ng</a>
                                        @endif
                                    </td>
                                    <td colspan="2">
                                        <li>T???ng ti???n :<span>{{number_format($total,0,',','.')}}??</span></li>
                                        @if(Session::get('coupon'))
                                        <li>
                                            @foreach(Session::get('coupon') as $key => $cou)
                                            @if($cou['coupon_condition']==1)
                                            M?? gi???m : {{$cou['coupon_number']}} %
                                            <p>
                                                @php
                                                $total_coupon = ($total*$cou['coupon_number'])/100;
                                                echo '
                                            <p>
                                        <li>T???ng gi???m:'.number_format($total_coupon,0,',','.').'??</li>
                                        </p>';
                                        @endphp
                                        </p>
                                        <p>
                                        <li>T???ng ???? gi???m :{{number_format($total-$total_coupon,0,',','.')}}??</li>
                                        </p>
                                        @elseif($cou['coupon_condition']==2)
                                        M?? gi???m : {{number_format($cou['coupon_number'],0,',','.')}} k
                                        <p>
                                            @php
                                            $total_coupon = $total - $cou['coupon_number'];
                                            @endphp
                                        </p>
                                        <p>
                                        <li>T???ng ???? gi???m :{{number_format($total_coupon,0,',','.')}}??</li>
                                        </p>
                                        @endif
                                        @endforeach
                                        </li>
                                        @endif
                                        {{--    
                                        <li>Thu??? <span></span></li>
                                        <li>Ph?? v???n chuy???n <span>Free</span></li>
                                        --}}
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="5">
                                        <center>
                                            @php
                                            echo 'L??m ??n th??m s???n ph???m v??o gi??? h??ng';
                                            @endphp
                                        </center>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                    </form>
                    @if(Session::get('cart'))
                    <tr><td>
                    <form method="POST" action="{{url('/check-coupon')}}">
                    @csrf
                    <input type="text" class="form-control" name="coupon" placeholder="Nh???p m?? gi???m gi??"><br>
                    <input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="T??nh m?? gi???m gi??">
                    </form>
                    </td>
                    </tr>
                    @endif
                    </table>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
        <footer id="footer">
            <!--Footer-->
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>H??? tr??? kh??ch h??ng</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Th??? ??u ????i</a></li>
                                    <li><a href="#">Trung t??m b???o h??nh</a></li>
                                    <li><a href="#">Thanh to??n v?? giao h??ng</a></li>
                                    <li><a href="#">D???ch v??? s???a ch???a v?? b???o tr??</a></li>
                                    <li><a href="#">Doanh nghi???p th??n thi???t</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-widget">
                                <h2>Ch??nh s??ch mua v?? b???o h??nh</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Quy ?????nh chung</a></li>
                                    <li><a href="#">Ch??nh s??ch b???o m???t th??ng tin</a></li>
                                    <li><a href="#">Ch??nh s??ch v???n chuy???n v?? l???p ?????t</a></li>
                                    <li><a href="#">Ch??nh s??ch b???o h??nh</a></li>
                                    <li><a href="#">Ch??nh s??ch ?????i tr??? v?? ho??n ti???n</a></li>
                                    <li><a href="#">Ch??nh s??ch tr??? g??p</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Th??ng tin</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Gi???i thi???u PN-Shop</a></li>
                                    <li><a href="#">Th??ng tin li??n h???</a></li>
                                    <li><a href="#">H??? th???ng Showroom</a></li>
                                    <li><a href="#">H???i ????p</a></li>
                                    <li><a href="#">Tin c??ng ngh???</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-widget">
                                <h2>Li??n h???</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"><i class="fa fa-facebook"></i>PN-Shop</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i>nguyendatphi1701@gmail.com </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-widget">
                                <img src="{{asset('public/frontend/images/da-dang-ky.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright ?? 2013 E-SHOPPER Inc. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                    </div>
                </div>
            </div>
        </footer>
        <!--/Footer-->
        <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('public/frontend/js/main.js')}}"></script>
        <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <div id="fb-root"></div>

        <script type="text/javascript">
            $(document).ready(function(){
              $('.send_order').click(function(){
                  swal({
                    title: "X??c nh???n ????n h??ng",
                    text: "????n h??ng s??? kh??ng ???????c ho??n tr??? khi ?????t,b???n c?? mu???n ?????t kh??ng?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "C???m ??n, Mua h??ng",
                      cancelButtonText: "????ng,ch??a mua",
                      closeOnConfirm: false,
                      closeOnCancel: false
                  },
                  function(isConfirm){
                       if (isConfirm) {
                          var shipping_email = $('.shipping_email').val();
                          var shipping_name = $('.shipping_name').val();
                          var shipping_address = $('.shipping_address').val();
                          var shipping_phone = $('.shipping_phone').val();
                          var shipping_notes = $('.shipping_notes').val();
                          var shipping_method = $('.payment_select').val();
                          var order_fee = $('.order_fee').val();
                          var order_coupon = $('.order_coupon').val();
                          var _token = $('input[name="_token"]').val();
                          $.ajax({
                              url: '{{url('/confirm-order')}}',
                              method: 'POST',
                              data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                              success:function(){
                                 swal("????n h??ng", "????n h??ng c???a b???n ???? ???????c g???i th??nh c??ng", "success");
                              }
                          });
                          window.setTimeout(function(){
                              location.reload();
                          } ,3000);
                        } else {
                          swal("????ng", "????n h??ng ch??a ???????c g???i, l??m ??n ho??n t???t ????n h??ng", "error");
                        }
                  });
              });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                //show cart quantity
            show_cart();
            function show_cart(){
               $.ajax({
                 url : '{{url('/show-cart')}}',
                 method: 'GET',
                 success:function(data){
                    $('.show-cart').html(data);
                 }
             });
           }
                $('.add-to-cart').click(function(){
                    var id = $(this).data('id_product');
                    var cart_product_id = $('.cart_product_id_' + id).val();
                    var cart_product_name = $('.cart_product_name_' + id).val();
                    var cart_product_image = $('.cart_product_image_' + id).val();
                    var cart_product_price = $('.cart_product_price_' + id).val();
                    var cart_product_qty = $('.cart_product_qty_' + id).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                        success:function(){
                            swal({
                                    title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                    text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem ti???p",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "??i ?????n gi??? h??ng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });
                            show_cart();
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.choose').on('change',function(){
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';
                if(action=='city'){
                    result = 'province';
                }else{
                    result = 'wards';
                }
                $.ajax({
                    url : '{{url('/select-delivery-home')}}',
                    method: 'POST',
                    data:{action:action,ma_id:ma_id,_token:_token},
                    success:function(data){
                       $('#'+result).html(data);
                    }
                });
            });
            });
        </script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('.calculate_delivery').click(function(){
                    var matp = $('.city').val();
                    var maqh = $('.province').val();
                    var xaid = $('.wards').val();
                    var _token = $('input[name="_token"]').val();
                    if(matp == '' && maqh =='' && xaid ==''){
                        alert('L??m ??n ch???n ????? t??nh ph?? v???n chuy???n');
                    }else{
                        $.ajax({
                        url : '{{url('/calculate-fee')}}',
                        method: 'POST',
                        data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                        success:function(){
                           location.reload();
                        }
                        });
                    }
            });
            });
        </script>
    </body>
</html>