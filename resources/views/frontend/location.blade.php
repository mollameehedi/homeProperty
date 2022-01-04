@extends('layouts.frontend_app')
@section('title')
    Location | Eco Property
@endsection
@section('location')
    active
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
	<section id="sub-banner" class="sub-banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="sub-banner__title text-uppercase">Location</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
			</div>
		</div>
	</section>
	<!-- Overview Section -->
	<section id="overview" class="overview py-5 pb-md-2">
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