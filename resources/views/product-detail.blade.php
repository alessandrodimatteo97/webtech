<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">

	<link rel="stylesheet" href="{{asset('css/cart.css')}}">

	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<style>
	.fa {
	  font-size: 50px;
	  cursor: pointer;
	  user-select: none;
	}

	.fa:hover {
	  color: red;
	}
	</style>
	</head>
	<body>
		<meta name="csrf-token" content="{{ csrf_token() }}">

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
							<form  class="search-wrap">
								<div class="form-group">
								 <input  class="form-control search autocomplete"   id="complete" placeholder="Search Shoes or News" />
								 {{ csrf_field() }}
								 <button id="none"class="btn submit-search text-center " disabled><i style = " color: white;"class="icon-search"></i></button>
								</div>
						 </form>
					 </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li><a href="index">Home</a></li>
								<li class="has-dropdown active">
									<a href="shoes/men">Men</a>

								</li>
								<li><a href="shoes/women">Women</a></li>
								<li><a href="about">About</a></li>
								<li><a href="contact">Contact</a></li>
								@guest
								<li>
														<a href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@if (Route::has('register'))
								<li>
														<a href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>

								<li class="cart"><a href="cart"><i class="icon-shopping-cart"></i>Cart [0]</a></li>
							  @endif
								@else

								<li class="has-dropdown" >
												<a id="navbarDropdown" class="{{ Auth::user()->id }}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
														{{ Auth::user()->name }}
											  </a>
													<ul class="dropdown">
													<li>
															<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
													</li>
													</ul>
																<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																		@csrf
																</form>

									</li>

									<li class="dropdown cart" id="dropdown-cart-js">

									@include('cartviews',[ $items, $itemsInCart])

								</li>

									@endguest
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index">Home</a></span> / <span>Product Details</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">
					<div class="col-sm-8">
						<div class="owl-carousel">
							@foreach($images as $image)
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="https://s7d2.scene7.com/is/image/VansBrand/190123-drillchorecoat-2?$SCALE-ORIGINAL$" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-desc">
							@foreach($shoes as $shoe)
							<h3 class="idshoe" id="{{$shoe->id}}">{{$shoe->name}}</h3>
							@endforeach

							<p class="price">
								<span id="price"></span>
								<span class="rate">
									@if((!(empty($medium)))&($medium < 1) )<i class="icon-star-empty"></i>@else<i class="icon-star-full"></i>@endif
									@if((!(empty($medium)))&($medium < 2) )<i class="icon-star-empty"></i>@else<i class="icon-star-full"></i>@endif
									@if((!(empty($medium)))&($medium < 3) )<i class="icon-star-empty"></i>@else<i class="icon-star-full"></i>@endif
									@if((!(empty($medium)))&($medium < 4) )<i class="icon-star-empty"></i>@else<i class="icon-star-full"></i>@endif
									@if((!(empty($medium)))&($medium < 5) )<i class="icon-star-empty"></i>@else<i class="icon-star-full"></i>@endif

									@if (!(empty($reviews_counter)))
									({{$reviews_counter}})
									@else
									(Nobody rates this)
									@endif
								</span>
							</p>
							@foreach($shoes as $shoe)
								 <p>{{$shoe->details}}</p>
							@endforeach
							<div class="size-wrap">
								<div class="block-26 mb-2">
									<h4>Size</h4>
				               <ul class="js-size">
												 @foreach ($measures as $measure)

				                  <li><a id="{{$measure->size_shoe}}">{{$measure->size_shoe}}</a></li>

												@endforeach
				               </ul>
				            </div>
				            <div class="block-26 mb-4">

				            </div>
							</div>
							<div class="input-group mb-4">
							 <span class="input-group-btn">
									 <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
										<i class="icon-minus2"></i>
									 </button>
								 </span>
							 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="5">
							 <span class="input-group-btn ml-1">
									 <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
											<i class="icon-plus2"></i>
									</button>
							 </span>
						 </div>
                  	<div class="row">
	                  	<div class="col-sm-12 text-center">
									<p class="addtocart"><a class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart </a></p>

								</div>
							</div>
							<div>
							</br>
							</div>

								@include('likeview', [$likedBy, $alreadyLiked])

						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-12 pills">
								<div class="bd-example bd-example-tabs">
								  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								    <li class="nav-item">
								      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Manufacturer</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
								    </li>
								  </ul>

								  <div class="tab-content" id="pills-tabContent">
								    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
										 @foreach($shoes as $shoe)
										    <p>{{$shoe->details}}</p>
										 @endforeach
								    </div>

								    <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
								      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
								    </div>
										<div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">

											@include('reviewview', [$reviews_counter, $reviews, $alreadyReviewed, $fivestars, $fivepercentage, $fourstars, $fourpercentage, $threestars, $threepercentage, $twostars, $twopercentage, $onestars, $onepercentage])

										</div>
								  </div>
								</div>
				         </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.js"></script>
	<!-- jQuery -->

	<script src="{{asset('js/selectSize.js')}}"></script>

	<script src="{{asset('js/addToCart.js')}}"></script>

		<script src="{{asset('js/starsInsertReview.js')}}"></script>

		<script src="{{asset('js/plusminus.js')}}"></script>

		<script src="{{asset('js/review.js')}}"></script>

		<script src="{{asset('js/rmfromcart.js')}}"></script>

		<script src="{{asset('js/like.js')}}"></script>

   <!-- popper -->
   <script src="{{asset('js/popper.min.js')}}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <!-- jQuery easing -->
   <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('js/main.js')}}"></script>

	<script src="{{asset('js/searchnav.js')}}"></script>



	</body>
</html>
