@extends('layouts.frontend_app')
@section('title')
    Home | Eco Property
@endsection
@section('home')
    active
@endsection
@section('frontend_content')

	<!-- Banner Section -->
	<section id="banner" class="banner header-gap">
		<div data-relative-input="true" id="scene" class="overflow-hidden">
			<div class="container-fluid px-0">
				<div class="row">
					<div class="col-12">
						<div class="banner__slider">
                            @forelse ($banners as $banner)
							<div class="banner__block">
								<div class="row">
									<div class="col-xl-5 col-md-6 order-1 order-md-0 d-flex flex-column justify-content-center align-items-start">
										<h1 class="banner__block__title text-capitalize">{{ $banner->heading }}</h1>
										<p class="banner__block__text text-uppercase">{{ $banner->description }}</p>
										<a href="#about" class="primary-btn d-inline-block text-uppercase">Explore More</a>
									</div>
									<div class="col-xl-7 col-md-6 d-flex align-items-center justify-content-center mb-4 mb-4d-0">
										<div class="banner__block__image d-inline-block position-relative layer" data-depth="0.2">
											<img src="{{ asset('uploads/home_banner') }}/{{ $banner->thumbnail }}" alt="banner-village" class="w-100 h-100">
										</div>
									</div>
								</div>
							</div>
                            @empty

                            @endforelse
						</div>
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
	<!-- About Section -->
	<section id="about" class="about section-gap">
		<div class="container-fluid">
			<div class="row">
				<div class="section-header text-center col-12 mb-5">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">{{ $working_heading->sub_heading }}</h4>
					<h1 class="section-header__title text-capitalize">{{ $working_heading->heading }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
                @forelse ($workings as $working)
				<div class="col-md-6 pr-lg-5 mb-5">
					<div class="about__block position-relative rounded mb-5">
						<a href="#!" class="about__block__image rounded d-inline-block position-absolute overflow-hidden w-100 h-100">
							<img src="{{ asset('uploads/service') }}/{{ $working->thumbnail }}" alt="about-1" class="position-absolute w-100 h-100 transition">
						</a>
						<div class="about__block__content bg-white py-4 px-2 position-absolute">
							<h2 class="about__block__title mb-3">
								<a href="#!" class="d-inline-block transition">{{ $working->title }}<br><span class="b-line px-2 d-inline-block">{{ $working->link_title }}</span></a>
							</h2>
							<a href="#{{ $working->link_url }}" class="primary-btn d-inline-block text-uppercase">Explore More</a>
						</div>
						<span class="about__block__pattern about__block__pattern--left position-absolute">
							<img src="{{ asset('frontend_asset') }}/assets/images/pattern.png" alt="pattern" class="w-100">
						</span>
					</div>
				</div>
                @empty

                @endforelse
			</div>
		</div>
	</section>
	<!-- Property Layouts Section -->
	<section id="layouts" class="layouts section-gap pt-0">
		<div class="container">
			<div class="row">
				<div class="section-header text-center col-12 mb-5">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">layouts</h4>
					<h1 class="section-header__title text-capitalize">Property Layouts</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
				<div class="col-12">
					<ul class="nav nav-pills justify-content-center mb-5" id="pills-tab" role="tablist">
                        @foreach ($layouts as $layout)

						<li class="nav-item mb-2" role="presentation">
							<a class="nav-link transition" id="first-floor-tab-{{ $layout->id }}" data-toggle="pill" href="#first-floor-{{ $layout->id }}" role="tab" aria-controls="first-floor" aria-selected="true">First Floor</a>
						</li>
                        @endforeach
						{{-- <li class="nav-item mb-2" role="presentation">
							<a class="nav-link transition" id="second-floor-tab" data-toggle="pill" href="#second-floor" role="tab" aria-controls="second-floor" aria-selected="false">Second Floor</a>
						</li>
						<li class="nav-item mb-2" role="presentation">
							<a class="nav-link transition" id="third-floor-tab" data-toggle="pill" href="#third-floor" role="tab" aria-controls="third-floor" aria-selected="false">Third Floor</a>
						</li>
						<li class="nav-item mb-2" role="presentation">
							<a class="nav-link transition" id="fourth-floor-tab" data-toggle="pill" href="#fourth-floor" role="tab" aria-controls="fourth-floor" aria-selected="false">Fourth Floor</a>
						</li>
						<li class="nav-item mb-2" role="presentation">
							<a class="nav-link transition" id="fifth-floor-tab" data-toggle="pill" href="#fifth-floor" role="tab" aria-controls="fifth-floor" aria-selected="false">Fifth Floor</a>
						</li> --}}
					</ul>
					<div class="tab-content" id="pills-tabContent">
                        @foreach ($layouts as $layout)
						<div class="tab-pane fade show active" id="first-floor-{{ $layout->id }}" role="tabpanel" aria-labelledby="first-floor-tab-{{ $layout->id }}">
							<div class="layouts__block row">
								<div class="col-md-6 d-flex align-items-center justify-content-center mb-5 mb-md-0">
									<img src="{{ asset('frontend_asset') }}/assets/images/layouts-1.jpg" alt="layouts-1" class="layouts__block__image img-fluid">
								</div>
								<div class="col-md-6 pl-xl-5">
									<h3 class="layouts__block__title text-capitalize">First Floor</h3>
									<p class="layouts__block__text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
									<div class="table-responsive pt-3">
										<table class="layouts__block__table table table-striped table-borderless">
											<tbody>
											  <tr>
												<td class="table__title">Floor</td>
												<th scope="row" class="table__value text-right">First Floor</th>
											  </tr>
											  <tr>
												<td class="table__title">Total Area</td>
												<th scope="row" class="table__value text-right">560 Square Feets</th>
											  </tr>
											  <tr>
												<td class="table__title">Room</td>
												<th scope="row" class="table__value text-right">5</th>
											  </tr>
											  <tr>
												<td class="table__title">Bed</td>
												<th scope="row" class="table__value text-right">7</th>
											  </tr>
											  <tr>
												<td class="table__title">Bath</td>
												<th scope="row" class="table__value text-right">2</th>
											  </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
						{{-- <div class="tab-pane fade" id="second-floor" role="tabpanel" aria-labelledby="second-floor-tab">
							<div class="layouts__block row">
								<div class="col-md-6 d-flex align-items-center justify-content-center mb-5 mb-md-0">
									<img src="{{ asset('frontend_asset') }}/assets/images/layouts-2.jpg" alt="layouts-2" class="layouts__block__image img-fluid">
								</div>
								<div class="col-md-6 pl-xl-5">
									<h3 class="layouts__block__title text-capitalize">Second Floor</h3>
									<p class="layouts__block__text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
									<div class="table-responsive pt-3">
										<table class="layouts__block__table table table-striped table-borderless">
											<tbody>
											  <tr>
												<td class="table__title">Floor</td>
												<th scope="row" class="table__value text-right">Second Floor</th>
											  </tr>
											  <tr>
												<td class="table__title">Total Area</td>
												<th scope="row" class="table__value text-right">670 Square Feets</th>
											  </tr>
											  <tr>
												<td class="table__title">Room</td>
												<th scope="row" class="table__value text-right">4</th>
											  </tr>
											  <tr>
												<td class="table__title">Bed</td>
												<th scope="row" class="table__value text-right">2</th>
											  </tr>
											  <tr>
												<td class="table__title">Bath</td>
												<th scope="row" class="table__value text-right">2</th>
											  </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="third-floor" role="tabpanel" aria-labelledby="third-floor-tab">
							<div class="layouts__block row">
								<div class="col-md-6 d-flex align-items-center justify-content-center mb-5 mb-md-0">
									<img src="{{ asset('frontend_asset') }}/assets/images/layouts-3.jpg" alt="layouts-3" class="layouts__block__image img-fluid">
								</div>
								<div class="col-md-6 pl-xl-5">
									<h3 class="layouts__block__title text-capitalize">Third Floor</h3>
									<p class="layouts__block__text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
									<div class="table-responsive pt-3">
										<table class="layouts__block__table table table-striped table-borderless">
											<tbody>
											  <tr>
												<td class="table__title">Floor</td>
												<th scope="row" class="table__value text-right">Third Floor</th>
											  </tr>
											  <tr>
												<td class="table__title">Total Area</td>
												<th scope="row" class="table__value text-right">240 Square Feets</th>
											  </tr>
											  <tr>
												<td class="table__title">Room</td>
												<th scope="row" class="table__value text-right">4</th>
											  </tr>
											  <tr>
												<td class="table__title">Bed</td>
												<th scope="row" class="table__value text-right">1</th>
											  </tr>
											  <tr>
												<td class="table__title">Bath</td>
												<th scope="row" class="table__value text-right">1</th>
											  </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="fourth-floor" role="tabpanel" aria-labelledby="fourth-floor-tab">
							<div class="layouts__block row">
								<div class="col-md-6 d-flex align-items-center justify-content-center mb-5 mb-md-0">
									<img src="{{ asset('frontend_asset') }}/assets/images/layouts-4.jpg" alt="layouts-4" class="layouts__block__image img-fluid">
								</div>
								<div class="col-md-6 pl-xl-5">
									<h3 class="layouts__block__title text-capitalize">Fourth Floor</h3>
									<p class="layouts__block__text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
									<div class="table-responsive pt-3">
										<table class="layouts__block__table table table-striped table-borderless">
											<tbody>
											  <tr>
												<td class="table__title">Floor</td>
												<th scope="row" class="table__value text-right">Fourth Floor</th>
											  </tr>
											  <tr>
												<td class="table__title">Total Area</td>
												<th scope="row" class="table__value text-right">350 Square Feets</th>
											  </tr>
											  <tr>
												<td class="table__title">Room</td>
												<th scope="row" class="table__value text-right">5</th>
											  </tr>
											  <tr>
												<td class="table__title">Bed</td>
												<th scope="row" class="table__value text-right">3</th>
											  </tr>
											  <tr>
												<td class="table__title">Bath</td>
												<th scope="row" class="table__value text-right">1</th>
											  </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="fifth-floor" role="tabpanel" aria-labelledby="fifth-floor-tab">
							<div class="layouts__block row">
								<div class="col-md-6 d-flex align-items-center justify-content-center mb-5 mb-md-0">
									<img src="{{ asset('frontend_asset') }}/assets/images/layouts-5.jpg" alt="layouts-5" class="layouts__block__image img-fluid">
								</div>
								<div class="col-md-6 pl-xl-5">
									<h3 class="layouts__block__title text-capitalize">Fifth Floor</h3>
									<p class="layouts__block__text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
									<div class="table-responsive pt-3">
										<table class="layouts__block__table table table-striped table-borderless">
											<tbody>
											  <tr>
												<td class="table__title">Floor</td>
												<th scope="row" class="table__value text-right">Fifth Floor</th>
											  </tr>
											  <tr>
												<td class="table__title">Total Area</td>
												<th scope="row" class="table__value text-right">195 Square Feets</th>
											  </tr>
											  <tr>
												<td class="table__title">Room</td>
												<th scope="row" class="table__value text-right">5</th>
											  </tr>
											  <tr>
												<td class="table__title">Bed</td>
												<th scope="row" class="table__value text-right">3</th>
											  </tr>
											  <tr>
												<td class="table__title">Bath</td>
												<th scope="row" class="table__value text-right">2</th>
											  </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Property Gallery Section -->
	<section id="gallery" class="gallery section-gap">
		<div class="container-fluid">
			<div class="row">
				<div class="section-header text-center col-12 mb-5">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">{{ $gallery_heading->sub_heading }}</h4>
					<h1 class="section-header__title text-capitalize">{{ $gallery_heading->heading }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
                @forelse ($galleries as $gallery)
				<div class="col-md-4 col-sm-6 mb-4">
					<div class="gallery__item position-relative">
						<img src="{{ asset('uploads/gallery') }}/{{ $gallery->gallary_photo }}" alt="gallery-1" class="w-100">
						<div class="gallery__item__overlay transition d-flex align-items-center justify-content-center position-absolute w-100 h-100">
							<a href="{{ asset('uploads/gallery') }}/{{ $gallery->gallary_photo }}" data-gall="propertyGallery" class="zoom-btn venobox d-inline-flex align-items-center justify-content-center rounded-circle transition">
								<i class="fas fa-search-plus"></i>
							</a>
						</div>
					</div>
				</div>
                @empty

                @endforelse
			</div>
		</div>
	</section>
	<!-- Overview Section -->
	<!-- <section id="overview" class="overview py-5 py-md-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="embed-responsive embed-responsive-4by3 mb-5">
						<iframe class="embed-responsive-item roomFrame" src="https://3dteam.xn--bostadsvljare-ifb.com/preview/x6nKGF8cM51BtbiMHCo6vyPlYtuzOCHVSWNW0Fxr"></iframe>
					</div>
					<div class="embed-responsive embed-responsive-4by3 mb-5">
						<iframe class="embed-responsive-item" src="https://view.wec360.com/demo/brf-traffen/soder-" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" width="100%" height="780" frameborder="0"></iframe>
					</div>
					<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item roomFrame" src="https://3dteam.bostadsväljare.com/preview/W5cq3ldmzPB1FyRRvKjv8OFDl2t7h0Q78KkHZ7Ao" width="1000" height="900"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section> -->
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
