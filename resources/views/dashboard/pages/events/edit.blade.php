@extends('dashboard.layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')
    <style>
        @media (min-width: 100px) {
            .container {
                margin-top: -80px;
                height: 700px
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
                height: 450px;
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

            <form action="{{ route('events.update',$event->name) }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $event->user_id }}">
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <label for="Nom dafichage">Nom de l'événement</label><br>
                        <input value="{{ $event->name }}" type="text" name="name" placeholder="Entrez le nom de l'événement">

                        <br><br>

                        <label for="Nombre de place">Nombre de place</label><br>
                        <input value="{{ $event->number_of_place }}" type="number" name="number_of_place"
                            placeholder="Enter Nombre de place">
                            <br><br>

                        <label for="Date et heure de l'événement">Date et heure de l'événement</label><br>
                        <input value="{{ $event->event_date }}" type="date" name="event_date" id="Date et heure de l'événement" placeholder="Enter Date et heure de l'événement">

                    </div>
                    <div class="col-md-4">
                        <br>
                        <label for="Statut">Statut</label><br>
                       <select style="border: rgb(153, 153, 153) 1px groove;width: 100%;padding: 10px;border-radius: 10px" name="status" class="form-control">
                        <option value="{{ $event->status }}">{{ $event->status }}</option>
                        <option value="Request for participation">Request for participation</option>
                        <option value="Registered">Registered</option>
                        <option value="Request sent">Request sent</option>
                    </select>
                    <br>

                        <label for="lieu">lieu</label><br>
                        <input value="{{ $event->place }}" type="text" name="place" placeholder="Entrez lieu">



                    </div>

                    <div class="col-md-4 mt-4 resso">

                        <br>
                        <button type="submit" class="animated-button"
                            style="background: linear-gradient(135deg, #ff832b 0%, #ff56a8 100%);color:white;border-radius:10px;border: white 1px groove;padding:10px;float: right">Evénement de mise à jour</button>
                    </div>
                    <div class="col-md-4 mt-4 reso">

                        <br>
                        <button type="submit" class="animated-button"
                            style="width:100%; background: linear-gradient(135deg, #ff832b 0%, #ff56a8 100%);color:white;border-radius:10px;border: white 1px groove;padding:10px;float: right">Evénement de mise à jour</button>

                    </div>
                </div>
            </form>



        </div>
    </div>
@endsection
@push('scripts')
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endpush
