<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<link rel="icon"  href="{{ asset('uploads/logo') }}/{{ $logo->logo }}">
	<!-- All CSS -->
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/assets/plugins/venobox/css/venobox.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/assets/plugins/slick-slider/css/slick.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/assets/css/style.css">
	<style>
		.main-content{
			position: relative;
		}
		
		.shadow-1{
				position: absolute;
				height: 100%;
				width:100%;
				top:0;
				left:0;
				
				
		}
		.mehedi{
			opacity: 0;
			transition: all linear .3s;
		}
		
		.content{
			position:absolute;;
			top:50%;
			left:50%;
			font-family: sans-serif;
			font-size: 12px;
			transform: translateY(-50%);
			background: beige;
			width:180px;
			padding: 10px;
			display: none;
			transition: all linear .3s;
		}
		.mehedi:hover{
			opacity: 1;
		}
		.mehedi:hover .content{
			display: block;
			z-index: 555;
		}
		.mehedi{
			clip-path: polygon(45px 210px,248px 210px,253px 70px,434px 70px,474px 33px,517px 75px,900px 82px,970px 250px, 1085px 367px, 1085px 377px, 1060px 377px, 1060px 560px, 618px 558px, 553px 552px, 57px 554px, 56px 437px, 50px 437px, 50px 397px, 35px 395px);
			background:rgba(0, 255, 0, 0.479);
			height: 1200px;
			width:1200px;
		}
	</style>
</head>
<body>
	<!-- Header Section -->
	<header class="header w-100">
		<nav class="navbar navbar-expand-lg px-md-5">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('index') }}">
					<img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="logo" class="img-fluid">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-capitalize text-center ml-auto">
						<li class="nav-item position-relative">
							<a class="nav-link transition @yield('home')" href="{{ route('index') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative transition @yield('about')" href="{{ route('about') }}">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative transition" href="{{ route('index') }}#layouts">Category</a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative transition @yield('gallery')" href="{{ route('gallery') }}">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative transition @yield('location')" href="{{ route('location') }}">Location</a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative transition" href="#schedule">Schedule</a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative transition" href="#footer">Contact us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    @yield('frontend_content')
    
	<!-- Footer Section -->
	<footer id="footer" class="footer">
		<div class="footer__top section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
						<div class="footer__block">
							<a href="index.html" class="d-inline-block footer__logo">
								<img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="logo" class="img-fluid">
							</a>
							<div class="row mt-4">
                                @forelse ($infos as $info)
								<div class="col-2 mb-3">
									<i class="footer__block__icon {{ $info->class }}"></i>
								</div>
								<div class="col-10 mb-3">
									<address class="mb-0">{{ $info->info }}</address>
								</div>
                                @empty
                                    
                                @endforelse
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
						<div class="footer__block">
							<h5 class="footer__block__title mb-5">Opening Hours</h5>
							@forelse ($schedules as $schedule)
							<div class="footer__block__schedule mb-3">{{ $schedule->opening_schedule }}</div>
							@empty
								
							@endforelse
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
						<div class="footer__block">
							<h5 class="footer__block__title mb-5">Subscribe Newsletter</h5>
							<p class="footer__block__text">Subscribe to our newsletter & always be aware of all the latest updates</p>
                                    @if (session('subscriber_send'))
                                        <p class="text-success">{{ session('subscriber_send') }}</p>
                                    @endif
							<form class="footer__block__form form-inline position-relative" action="{{ route('subscriberpost') }}" method="POST">
								@csrf
								<input class="form-control rounded-0 w-100" type="email" placeholder="Your email address" name="email" required>
								<button class="btn shadow-none rounded-0 position-absolute" type="submit"><i class="fas fa-paper-plane"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom text-center py-4 border-top">
			<p class="footer__bottom__text">Copyrights © 2021 <a href="index.html" class="footer__bottom__link transition">Developer-Zahid</a>. All rights reserved.</p>
			<ul class="footer__bottom__social d-flex justify-content-center mb-0">
                @forelse ($socials as $social)
				<li class="social__item">
					<a href="{{ $social->link }}" class="social__link border d-inline-flex align-items-center justify-content-center rounded-circle transition">
						<i class="{{ $social->class }}"></i>
					</a>
				</li>
                @empty
                    
                @endforelse
			</ul>
		</div>
	</footer>
	<!-- Scroll Top Button -->
	<div class="scroll-top position-fixed">
		<div class="scroll-top__btn d-inline-flex justify-content-center align-items-center rounded-circle transition">
			<i class="fas fa-chevron-up"></i>
		</div>
	</div>

	<!-- All Script -->
	<script src="{{ asset('frontend_asset') }}/assets/js/jquery-1.12.4.min.js"></script>
	<script src="{{ asset('frontend_asset') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend_asset') }}/assets/plugins/parallax/js/parallax.min.js"></script>
	<script src="{{ asset('frontend_asset') }}/assets/plugins/venobox/js/venobox.min.js"></script>
	<script src="{{ asset('frontend_asset') }}/assets/plugins/slick-slider/js/slick.js"></script>
	<script src="{{ asset('frontend_asset') }}/assets/js/script.js"></script>
	<script>
		// Parallax Effect
		const scene = document.querySelector('#scene');
		const parallaxInstance = new Parallax(scene, {
			relativeInput: true,
			selector: ".layer",
			pointerEvents: true,
		});
	</script>
</body>
</html>