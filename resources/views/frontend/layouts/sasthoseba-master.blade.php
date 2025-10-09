<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<!-- CSRF Token for JS -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('title')</title>	

		<meta name="keywords" content="shasthoseba"/>
		<meta name="description" content="shasthoseba">
		<meta name="author" content="shasthoseba">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}">
		<link rel="icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon">


		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="{{ asset('https://www.w3schools.com/w3css/5/w3.css')}}">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/theme-shop.css')}}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/demos/demo-medical.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('frontend/assets/css/skins/skin-medical.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">

    
        @stack('css')
		<style>
			.envato-buy-redirect {
				position: fixed; /* make it sticky/floating */
				bottom: 20px;    /* distance from bottom */
				right: 2px;     /* distance from right */
				z-index: 9999;   /* above everything */
				background: #fff; /* optional, button background */
				padding: 10px 12px;
				border-radius: 50%;
				box-shadow: 0 2px 8px rgba(0,0,0,0.2);
				display: flex;
				align-items: center;
				justify-content: center;
			}

			.extra-cart-info {
				position: absolute;
				/* top: -8px; */
				/* right: -8px; */
				top: 3px;
				right:3rem;
				width: 18px;
				height: 18px;
				text-align: center;
				line-height: 18px;
				background: #18443F;
				color: #fff;
				border-radius: 50%;
				font-size: 12px;
			}

			/* @media (max-width: 768px) {
				.envato-buy-redirect {
					bottom: 15px;
					right: 15px;
					padding: 8px 10px;
				}

				.extra-cart-info {
					width: 16px;
					height: 16px;
					line-height: 16px;
					font-size: 10px;
				}
			}

			.nav-link {
				text-transform: none !important;
			} */

		</style>
		<style>
		.header-nav-main .nav-link,
		.header-nav-main .dropdown-item {
			text-transform: capitalize !important;
		}
		/* Default: hidden */
		.mobile-bottom-bar {
			display: none;
		}

		/* Show only on mobile */
		@media (max-width: 768px) {
			/* Hide floating cart icon on mobile */
			.envato-buy-redirect {
				display: none !important;
			}

			/* Show bottom bar */
			.mobile-bottom-bar {
				display: flex !important;
				position: fixed;
				bottom: 0;
				left: 0;
				width: 100%;
				height: 60px;
				align-items: center;
				justify-content: space-between;
				background: #fff;
				box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
				padding: 0 10px;
				z-index: 9999;
			}

			/* Checkout button */
			.checkout-btn {
				position: relative;
				display: flex;
				align-items: center;
				justify-content: center;
				background: #18443F;
				color: #fff;
				font-weight: bold;
				padding: 5px 36px;
				border-radius: 10px;
				height: 90%;
				min-width: 120px;
				text-decoration: none;
			}

			.checkout-btn i {
				margin-left: 8px;
				font-size: 18px;
			}

			.checkout-price {
				position: absolute;
				top: 5px;
				right: 10px;
				background: red;
				color: #fff;
				font-size: 12px;
				padding: 2px 6px;
				border-radius: 50%;
			}

			/* Other icons */
			.other-icons {
				display: flex;
				gap: 20px;
				flex: 1;
				justify-content: flex-end;
			}

			.other-icons a {
				color: #18443F;
				font-size: 28px;
				display: flex;
				align-items: center;
				justify-content: center;
			}
		}

		</style>

	</head>
	<body>
@php 
$count_info = \App\Models\Cart::when(Auth::check(), fn($q) => $q->where('user_id', operator: Auth::id()))
								->when(value: !Auth::check(), callback: fn($q) => $q->where('session_id', session('session_id')));
$count_data = $count_info->count();
$totalCartPrice = \App\Models\Cart::totalCartPrice();
@endphp
		<div class="body">
			@include('frontend.layouts.header')
				<div role="main" class="main">

					    <a class="envato-buy-redirect" href="{{ route('new.checkout')}}">
							<i class="fas fa-shopping-cart w3-large" style="color: #0A52A3"></i>
							<span class="extra-cart-info" style="background: #0A52A3">
								<span class="cartItemsCount" id="">{{ $count_data }}</span>
							</span>
						</a>

						<!-- Bottom Nav Bar start-->
						 <div class="mobile-bottom-bar">
							<a href="{{ route('checkout')}}" class="checkout-btn">
								<span class="checkout-text">Checkout</span>
								<span class="checkout-price">৳{{ $totalCartPrice }}</span>
								<i class="fas fa-shopping-cart"></i>
							</a>
							<div class="other-icons">
								<a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
								<a href="{{ url('/shasthoseba') }}""><i class="fas fa-th-large"></i></a>
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
						</div>
						<!-- Bottom Nav Bar end-->		
					@include('sweetalert::alert')
					@yield('content')
				</div>
			@include('frontend.layouts.footer')
		</div>

		<!-- Vendor -->
		<script src="{{asset('frontend/assets/vendor/plugins/js/plugins.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('frontend/assets/js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('frontend/assets/js/views/view.contact.js')}}"></script>

		<!-- Demo -->
		<script src="{{asset('frontend/assets/js/demos/demo-medical.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('frontend/assets/js/theme.init.js')}}"></script>

		<!-- sweetalert2 js -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        @stack('js')



		<script>
		$.ajaxSetup({
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
		});
		</script>


	</body>
</html>
