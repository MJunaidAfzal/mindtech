@extends('dashboard.layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')
    <style>
        @media (min-width: 100px) {
            .container {
                margin-top: -80px;
                height: 680px
            }
            .resso{
                display: none;
            }
            #cancel1{
                display: block;
            }
            #cancel{
                display: none;
            }
        }

        @media (min-width: 1024px) {
            #cancel1{
                display: none;
            }
            #cancel{
                display: block;

            }
            .container {
                margin-top: -130px;
                height: 350px;
            }
            .resso{
                display: block;
            }
            .reso{
                display: none;
            }

        }

        input:hover {
            border: orange 1px groove;
        }

        input {
            border: rgb(153, 153, 153) 1px groove;
            width: 100%;
            padding: 10px;
            border-radius: 10px
        }

        /* Add animation to the button */
        .animated-button {
            transition: background-color 0.5s ease-out;
        }

        .animated-button:hover {
            background-color: #ff69b4;
            /* Change the background color on hover */
            box-shadow: 0 0 10px rgba(255, 105, 180, 0.5);
        }

        .animated-button:active {
            transform: translateY(2px);
            box-shadow: 0 0 10px rgba(255, 105, 180, 0.5);
        }
    </style>


    <div class="geex-content">

        <div style="background-color: #ffffff;color:black;padding:50px;border-radius:20px" class="container">
            <a id="cancel" href="{{ route('form') }}">
                <button class="animated-button"
                style="background: white;color:orange;border-radius:10px;border: orange 1px groove;padding:10px;float: right;padding-left:50px;padding-right:50px">Annuler</button>
            </a>
            <form action="{{ route('profile.edit') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <label for="Nom dafichage">Nom dafichage</label><br>
                        <input value="{{ $user->name }}" type="text" name="name" id="Nom dafichage" placeholder="Enter Nom dafichage"><br><br>
                        <label for="‘Société Nmae">‘Société Nmae.</label><br>
                        <input value="{{ $user->company_name }}" type="text" name="company_name" id="‘Société Nmae."
                            placeholder="Enter ‘Société Nmae."><br><br>
                        <label for="Telephone">Telephone</label><br>
                        <input value="{{ $user->phone }}" type="number" name="phone" id="Telephone" placeholder="Enter Telephone">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <label for="E-mail">E-mail</label><br>
                        <input value="{{ $user->email }}" type="email" name="email" id="E-mail" placeholder="Enter E-mail"><br><br>
                        <label for="NumérodeTVA">NumérodeTVA</label><br>
                        <input value="{{ $user->vat_number }}" type="number" name="vat_number" id="NumérodeTVA" placeholder="Enter NumérodeTVA">
                    </div>
                    <div class="col-md-4 mt-4 resso">
                        <!-- Modified button with animation -->
                        <br>
                        <button type="submit" class="animated-button"
                            style="margin-right: -175px;margin-top: 5px;background: linear-gradient(135deg, #ff832b 0%, #ff56a8 100%);color:white;border-radius:10px;border: white 1px groove;padding:10px;float: right">Modifier
                            Enregister</button>
                    </div>
                    <div class="col-md-4 mt-4 reso">
                        <!-- Modified button with animation -->
                        <br>
                        <button type="submit" class="animated-button"
                            style="width:100%; background: linear-gradient(135deg, #ff832b 0%, #ff56a8 100%);color:white;border-radius:10px;border: white 1px groove;padding:10px;float: right">Modifier
                            Enregister</button>

                    </div>
                </div>
            </form>


            <a  id="cancel1" href="{{ route('form') }}">
                <button class="animated-button"
                style="width:100%;background: white;color:orange;border-radius:10px;border: orange 1px groove;padding:10px;margin-top:10px;float: right;padding-left:50px;padding-right:50px">Annuler</button>
               </a>
        </div>
    </div>
@endsection
@push('scripts')
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endpush
