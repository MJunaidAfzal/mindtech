@extends('dashboard.layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@push('styles')
<link href="css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap/bootstrap.css') }}">
<link rel="stylesheet" href="swiper%4011.1.12/swiper-bundle.min.css">
<link rel="stylesheet" href="releases/fullcalendar/3.9.0/fullcalendar.min.css">
<link rel="stylesheet" href="ui/1.12.1/themes/cupertino/jquery-ui.css">
<link rel="stylesheet" href="npm/apexcharts%403.27.0/dist/apexcharts.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="npm/%40iconscout/unicons%404.0.8/css/line.min.css">
@endpush
@section('content')
<style>
      @media (min-width: 100px) {
            .container {
                margin-top: -80px;
                height: 680px
            }
        }

        @media (min-width: 1024px) {
            .container {
                margin-top: -130px;
                height: 350px;
            }
        }
</style>



			<div style="margin-top: -130px" class="geex-content__wrapper">
					<div class="geex-content__section geex-content__section--transparent geex-content__calendar">



						<div style="margin-top: 20px" class="tab-content geex-content__calendar__content">
							<div class="geex-content__modal__form">
								<div class="geex-content__modal__form__header">
									<h3 class="geex-content__modal__form__title">Add New Event</h3>
									<button class="geex-content__modal__form__close">
										<i class="uil-times"></i>
									</button>
								</div>
								<form class="geex-content__modal__form__wrapper">
									<div class="geex-content__modal__form__item">
										<input type="text" name="geex-content__modal__form__name" class="geex-content__modal__form__input" placeholder="Event Title">
									</div>
									<div class="geex-content__modal__form__item">
										<textarea name="geex-content__modal__form__desc" class="geex-content__modal__form__input geex-content__modal__form__input--textarea" placeholder="Event Description"></textarea>
									</div>
									<div class="geex-content__modal__form__item">
										<button type="submit" class="geex-content__modal__form__submit">Submit</button>
									</div>
								</form>
							</div>
							<div id='geex-calendar' class="geex-calendar"></div>
						</div>
					</div>
			</div>

@endsection
@push('scripts')
{{-- <script src="{{ asset('assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script> --}}
<script src="{{ asset('assets/vendor/js/jquery/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap/bootstrap.m in.js') }}"></script>
<script src="swiper%4011.1.12/swiper-bundle.min.js"></script>
<script src="releases/fullcalendar/3.9.0/lib/moment.min.js"></script>
<script src="releases/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="npm/apexcharts%403.27.0/dist/apexcharts.min.js"></script>
<script src="1/no-api-key/tinymce/5.10.9-138/tinymce.min.js" referrerpolicy="origin"></script>
{{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
@endpush
