<style>

@media (min-width: 100px) {
    .container-fluid {
        background: url('assets/header1.jpg');
        border-radius: 50px;
        background-size: cover;
        padding: 10px;
    }
    .ceo {
        background-color: white;
        padding: 6px;
        border-radius: 10px;
        margin-top: 140px;

    }
    .title{
        margin-top: -40px;
    }

    #hides{
        display: none;
    }

    #cretet{
        margin-top: -100px;
    }

}

        @media (min-width: 1024px) {
            .container-fluid {
        background-image: url('assets/header1.jpg');
        background-size: cover;
        border-radius: 1px;
        padding: 100px;
        padding-left: 370px;
    }
            .ceo {
        margin-top: 20px;
        background-color: white;
        padding: 6px;
        border-radius: 10px;
    }
    .title{
        margin-top:80px;
    }
    #cretet{
        margin-top: -10px;
    }

    #shown{
        display: none;
    }
    #hides{
        display: block;
    }
}



</style>


<div style="height: 250px" class="container-fluid">
    <div class="container">
        <div class="geex-content__header">
            <div class="geex-content__header__content">
                <h1 style="color: white" class="geex-content__header__title title">{{ $heading ?? '' }}</h1>
                <p style="color: white;font-size:20px">{{ $description ?? '' }}</p>
                @if(Route::currentRouteName() == 'calender')
                <a id="cretet" href="{{ route('events.create') }}">
                    <button  class="animated-button"
                    style="background: #e7e7e7;color:black;border-radius:10px;border: white 1px groove;padding:10px; margin-bottom: 15px;"><img style="margin-top: -5px;" width="25px" src="{{ asset('images/add.png') }}" alt="">  Participer a un evenement </button>
                </a>
            @endif
            </div>

<div class="geex-content__header__action">


<div class="geex-content__header__customizer">
<button class="geex-btn geex-btn__toggle-sidebar">
    <i class="uil uil-align-center-alt"></i>
</button>
</div>



<div  class="geex-content__header__action__wrap ceo">
    <ul class="geex-content__header__quickaction">
        <li class="geex-content__header__quickaction__item">
            <a id="hides" style="background:color:white" href="#" class="geex-content__header__quickaction__link">
                @if(!empty(auth()->user()->image))
                <div>
                    <img class="user-img" src="{{ asset('upload/profile/'.auth()->user()->image) }}" alt="image" height="50px"><span>{{ auth()->user()->name }}</span> <i class="uil uil-arrow-down"></i>
                </div>
                @else
                <div>
                    <img class="user-img" src="{{ asset('images/user1.png') }}" alt="image" height="50px"><span>{{ auth()->user()->name }}</span> <i class="uil uil-arrow-down"></i>
                </div>
                @endif
            </a>
            <a id="shown" style="background:color:white" href="#" class="geex-content__header__quickaction__link">
                @if(!empty(auth()->user()->image))
                <div>
                    <img style="border-radius:20px" class="user-img" src="{{ asset('upload/profile/'.auth()->user()->image) }}" alt="image" height="50px">
                </div>
                @else
                <div>
                    <img class="user-img" src="{{ asset('images/user1.png') }}" alt="image" height="50px">
                </div>
                @endif
            </a>
            <div class="geex-content__header__popup geex-content__header__popup--author">
                <div  class="geex-content__header__popup__header">
                    <div class="geex-content__header__popup__header__img">
                        @if(!empty(auth()->user()->image))
                        <div>
                            <img class="user-img" src="{{ asset('upload/profile/'.auth()->user()->image) }}" alt="image" height="50px">
                        </div>
                        @else
                        <div>
                            <img class="user-img" src="{{ asset('images/user1.png') }}" alt="image" height="50px">
                        </div>
                        @endif
                    </div>
                    <div class="geex-content__header__popup__header__content">
                        <h3 class="geex-content__header__popup__header__title">{{ auth()->user()->name }}</h3>
                        <span class="geex-content__header__popup__header__subtitle">CEO, Themesdaddy</span>
                    </div>
                </div>

                <div class="geex-content__header__popup__content">
                    <a href="#" class="geex-header__menu__link geex-customizer__btn--light"><i style="font-size:25px" class="uil uil-sun"></i></a>
                    <a href="#" class="geex-header__menu__link geex-customizer__btn--dark"><i style="margin-left: 40px;margin-top:-25px;font-size:25px" class="uil uil-moon"></i></a>
                    <ul class="geex-content__header__popup__items">

                        <li class="geex-content__header__popup__item">
                            <a style="margin-top: 20px" class="geex-content__header__popup__link" href="{{ route('form') }}">
                                <i class="uil uil-user"></i>
                                Profile
                            </a>
                        </li>
                        {{-- <li class="geex-content__header__popup__item">
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
                        </li> --}}
                    </ul>
                </div>
                <div class="geex-content__header__popup__footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="geex-content__header__popup__footer__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="uil uil-arrow-up-left"></i>Logout
                    </a>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>
        </div>
    </div>
</div>
 {{-- <div class="col-md-12">
                  <a href="{{ route('events.index') }}">
                    <button  class="animated-button"
                    style="background: linear-gradient(135deg, #ff832b 0%, #ff56a8 100%);color:white;border-radius:10px;border: white 1px groove;padding:10px;float: right;    margin-bottom: 15px;">Liste des événements
                </button>
                  </a>
                </div> --}}
