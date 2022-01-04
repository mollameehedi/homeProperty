@extends('layouts.frontend_app')
@section('about')
    active
@endsection
@section('title')
    about | Eco Property
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
	<section id="sub-banner" class="sub-banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="sub-banner__title text-uppercase">{{ $about_detail->bradcrumb_title }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section -->
	<section id="about" class="about section-gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 pr-lg-5 mb-4 mb-md-0">
					<div class="about__block position-relative rounded">
						<a href="gallery.html" class="about__block__image rounded d-inline-block position-absolute overflow-hidden w-100 h-100">
							<img src="{{ asset('uploads/about') }}/{{ $about_detail->thumbnail }}" alt="about-1" class="position-absolute w-100 h-100 transition">
						</a>
						<div class="about__block__content bg-white py-4 px-2 position-absolute">
							<h2 class="about__block__title mb-3">
								<a href="gallery.html" class="d-inline-block transition">View Our<br><span class="b-line px-2 d-inline-block">Gallery</span></a>
							</h2>
						</div>
						<span class="about__block__pattern about__block__pattern--left position-absolute">
							<img src="{{ asset('frontend_asset') }}/assets/images/pattern.png" alt="pattern" class="w-100">
						</span>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about__content">
						<h1 class="about__content__title text-capitalize">{{ $about_detail->heading }}</h1>
						<svg class="section-header__icon mb-4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
							<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
						</svg>
						<p class="about__content__text">{{ $about_detail->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Watch Video Section -->
	<section id="watch" class="watch section-gap">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="section-header text-center col-12 mb-3 mb-md-5">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">{{ $youtube_heading->sub_heading }}</h4>
					<h1 class="section-header__title text-capitalize">{{ $youtube_heading->heading }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
				<div class="col-12">
					<div class="watch__slider">
                        @forelse ($youtube_link as $link)
						<div class="watch__block transition position-relative">
							<img src="{{ asset('uploads/youtube_thumbnail') }}/{{ $link->thumbnail }}" alt="watch" class="w-100">
							<div class="watch__block__overlay transition d-flex align-items-center justify-content-center position-absolute w-100 h-100">
								<a href="{{ $link->link }}" class="play-btn venobox d-inline-block text-center rounded-circle transition position-absolute" data-vbtype="video" data-autoplay="true">
									<i class="fas fa-play"></i>
								</a>
							</div>
						</div>
                        @empty
                            
                        @endforelse
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials Section -->
	<section class="testimonials section-gap">
		<div class="container-fluid">
			<div class="row">
				<div class="section-header text-center col-12 mb-3">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">{{ $testimonial_heading->sub_heading }}</h4>
					<h1 class="section-header__title text-capitalize">{{ $testimonial_heading->heading }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
				<div class="col-12">
					<div class="testimonials__slider">
                        @forelse ($testimonials as $testimonial)
						<div class="testimonials__block px-3">
							<div class="testimonials__block__content text-center position-relative bg-white py-5 px-4">
								<div class="testimonials__block__client-image position-absolute rounded-circle overflow-hidden">
									<img src="{{ asset('uploads/testimonial') }}/{{ $testimonial->thumbnail }}" alt="testimonial-1" class="w-100 h-100">
								</div>
								<h3 class="testimonials__block__client-name text-capitalize mt-4">{{ $testimonial->name }}</h3>
								<h5 class="testimonials__block__client-position text-capitalize">{{ $testimonial->designtaion }}</h5>
								<p class="testimonials__block__text mt-4">{{ $testimonial->description }}</p>
							</div>
						</div>
                        @empty
                            
                        @endforelse
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Schedule Section -->
	<section id="schedule" class="schedule section-gap">
		<div class="container">
			<div class="row">
				<div class="section-header text-center col-12 mb-2">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">schedule</h4>
					<h1 class="section-header__title text-capitalize">INTERESTED IN A SHOWING?</h1>
					<p class="schedule__text mt-4">Get in touch with us if you would like to schedule a showing.</p>
                                    @if (session('set_schedule'))
                                        <p class="text-success">{{ session('set_schedule') }}</p>
                                    @endif
				</div>
				<div class="col-12 text-center">
					<!-- Schedule Button trigger modal -->
					<button type="button" class="btn primary-btn shadow-none" data-toggle="modal" data-target="#exampleModal">SCHEDULE A SHOWING</button>
					
					<!-- Schedule Modal -->
					<div class="modal schedule__modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header justify-content-center border-0">
									<h1 class="modal-title" id="exampleModalLabel">Schedule a <span class="modal-title--color">Visit</span></h1>
									<button type="button" class="close schedule__modal__close transition m-0 position-absolute" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="modal-form needs-validation" action="{{ route('schedulepost') }}" method="POST">
                                        @csrf
										<div class="row">
										  <div class="col-sm-6 mb-4">
											<input type="text" name="name" class="form-control" placeholder="Your Name">
										  </div>
										  <div class="col-sm-6 mb-4">
											<input type="email" class="form-control" name="email" placeholder="Your Email">
										  </div>
										  <div class="col-sm-6 mb-4">
											<input type="date" name="date" class="form-control" placeholder="Select Date" required>
											<div class="invalid-feedback text-left">The field is required.</div>
										  </div>
										  <div class="col-sm-6 mb-4">
											<input type="text" class="form-control" name="phone_no" placeholder="Phone Number" required>
											<div class="invalid-feedback text-left">The field is required.</div>
										  </div>
										  <div class="col-12 mb-4">
											<textarea name="message" class="form-control" placeholder="Your Message" rows="8"></textarea>
										  </div>
										  <div class="col-12 mb-4">
											<button type="submit" class="btn shadow-none text-white modal-form-btn transition w-100 text-uppercase">Submit</button>
										  </div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection