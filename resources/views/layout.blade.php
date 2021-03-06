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
      <link href="{{asset('public/frontend/css/lightgallery.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/frontend/css/lightslider.css')}}" rel="stylesheet">
      <link href="{{asset('public/frontend/css/prettify.css')}}" rel="stylesheet">
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
                        <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/logo4.png')}}" style=" width: 100%" /></a>
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
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>????ng xu???t</a></li>
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
      </br>
      <section id="slider">
         <!--slider-->
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
                        @php
                        $i = 0;
                        @endphp
                        @foreach($slider as $key => $slide)
                        @php
                        $i++;
                        @endphp
                        <div class="item {{$i==1 ? 'active' : '' }}">
                           <div class="col-sm-11">
                              <img alt="{{$slide->slider_desc}}" src="{{asset('public/uploads/slider/'.$slide->slider_image)}}" height="200" width="100%" class="img img-responsive">
                           </div>
                        </div>
                        @endforeach
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
      </section>
      <!--/slider-->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-sm-3">
                  <div class="left-sidebar">
                     <h2>Danh m???c s???n ph???m</h2>
                     <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach($category as $key => $cate)
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></h4>
                           </div>
                        </div>
                        @endforeach
                     </div>
                     <!--/category-products-->
                     <div class="brands_products">
                        <!--brands_products-->
                        <h2>Th????ng hi???u s???n ph???m</h2>
                        <div class="brands-name">
                           <ul class="nav nav-pills nav-stacked">
                              @foreach($brand as $key => $brand)
                              <li><a href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                     <!--/brands_products-->
                     <div class="like_products">
                        <h2>S???n ph???m y??u th??ch</h2>
                        <div class="like-name">
                           <div id="row_wishlist" class="row"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-9 padding-right">
                  @yield('content')
               </div>
            </div>
         </div>
      </section>
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
                           <li><a href="#"><i class="fa fa-facebook"></i>??P-Mobile</a></li>
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
      <script src="{{asset('public/frontend/js/lightslider.js')}}"></script>
      <script src="{{asset('public/frontend/js/lightgallery-all.min.js')}}"></script>
      <script src="{{asset('public/frontend/js/prettify.js')}}"></script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <div id="fb-root"></div>

      <script type="text/javascript">
         function view(){
             if(localStorage.getItem('data')!=null){
                 var data = JSON.parse(localStorage.getItem('data'));
                 data.reverse();
                 document.getElementById('row_wishlist').style.overflow = 'scroll';
                 document.getElementById('row_wishlist').style.height = '250px';
                 for(i=0;i<data.length;i++){
                    var name = data[i].name;
                    var price = data[i].price;
                    var image = data[i].image;
                    var url = data[i].url;
                    $('#row_wishlist').append('<div class="row" style="margin:10px 0"><div class="col-md-4"><img width="100%" src="'+image+'"></div><div class="col-md-8 info_wishlist"><p>'+name+'</p><p style="color:#FE980F">'+price+'</p><a href="'+url+'">?????t h??ng</a></div>');
                }
            }
         }
         view();
         function add_wistlist(clicked_id){
            var id = clicked_id;
            var name = document.getElementById('wishlist_productname'+id).value;
            var price = document.getElementById('wishlist_productprice'+id).value;
            var image = document.getElementById('wishlist_productimage'+id).src;
            var url = document.getElementById('wishlist_producturl'+id).href;
            var newItem = {
                'url':url,
                'id' :id,
                'name': name,
                'price': price,
                'image': image
            }
            if(localStorage.getItem('data')==null){
               localStorage.setItem('data', '[]');
            }
            var old_data = JSON.parse(localStorage.getItem('data'));
            var matches = $.grep(old_data, function(obj){
                return obj.id == id;
            })
            if(matches.length){
                alert('S???n ph???m b???n ???? y??u th??ch,n??n kh??ng th??? th??m');
            }else{
                old_data.push(newItem);
               $('#row_wishlist').append('<div class="row" style="margin:10px 0"><div class="col-md-4"><img width="100%" src="'+newItem.image+'"></div><div class="col-md-8 info_wishlist"><p>'+newItem.name+'</p><p style="color:#5bc0de">'+newItem.price+'</p><a href="'+newItem.url+'">?????t h??ng</a></div>');
            }
            localStorage.setItem('data', JSON.stringify(old_data));
         }
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery:true,
                item:1,
                loop:true,
                thumbItem:3,
                slideMargin:0,
                enableDrag: false,
                currentPagerPosition:'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                }   
            });  
         });
      </script>
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
          show_cart_menu();
            function show_cart_menu(){
               $.ajax({
                 url : '{{url('/show-cart')}}',
                 method: 'GET',
                 success:function(data){
                    $('.show-cart').html(data);
                 }
             });
            }
         $(document).ready(function(){
            //show cart quantity
           
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
                         show_cart_menu();
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