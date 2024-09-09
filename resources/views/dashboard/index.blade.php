@extends('dashboard.layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h1 class="geex-content__header__title">Hi Mahabbub Alum,</h1>
				</div>

<div class="geex-content__header__action">


<div class="geex-content__header__customizer">
    <button class="geex-btn geex-btn__toggle-sidebar">
        <i class="uil uil-align-center-alt"></i>
    </button>
</div>

    <div class="geex-content__header__action__wrap">
        <ul class="geex-content__header__quickaction">
            <li class="geex-content__header__quickaction__item">
                <a style="background:color:white" href="#" class="geex-content__header__quickaction__link">
                    <img class="user-img" src="{{asset('assets/img/avatar/user.svg')}}" alt="user"><span>Mahabub Alam <i class="uil uil-arrow-down"></i></span>
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--author">
                    <div class="geex-content__header__popup__header">
                        <div class="geex-content__header__popup__header__img">
                            <img src="{{asset('assets/img/avatar/user.svg')}}" alt="user">
                        </div>
                        <div class="geex-content__header__popup__header__content">
                            <h3 class="geex-content__header__popup__header__title">Mahabub Alam</h3>
                            <span class="geex-content__header__popup__header__subtitle">CEO, Themesdaddy</span>
                        </div>
                    </div>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-cog"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-dollar-alt"></i>
                                    Billing
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-users-alt"></i>
                                    Activity
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-bell"></i>
                                    Help
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="geex-content__header__popup__footer">
                        <a href="#" class="geex-content__header__popup__footer__link">
                            <i class="uil uil-arrow-up-left"></i>Logout
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
			</div>
            <div style="background-color: rgb(223, 223, 223);color:black;padding:20px;border-radius:20px" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color: black"><b>Bienvenue sur ton portail client MindTech!</b></h2>
                        <p style="font-size: 13px"> Accedez a lensemble der resources qui vous sont mises a disposition.</p>
                    </div>
                    <div class="col-md-4">
asfasfas
                    </div>
                    <div class="col-md-4">
afasfas
                    </div>
                    <div class="col-md-4">
asfasfad
                    </div>
                </div>
            </div>
		</div>


@endsection
@push('scripts')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endpush
