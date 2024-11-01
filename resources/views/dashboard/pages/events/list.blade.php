@extends('dashboard.layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')
    <style>
        @media (min-width: 100px) {
            .container {
                margin-top: -80px;
                height: 660px;
                overflow-y: auto;
            }

            table {
                max-height: 400px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                margin-top: -130px;
                height: 560px;
            }
            table {
            text-align: center;
            width: 100%
        }
        }

        thead {
                background-color: #fae3d7;
                font-size: 12px
            }



            tbody {
                font-size: 12px;
            }
    </style>



        <div style="background-color: #ffffff;color:black;padding:50px;border-radius:20px;" class="container">
            <div class="row">
                <div class="col-md-12">
                  <a href="{{ route('events.create') }}">
                    <button  class="animated-button"
                    style="background: linear-gradient(135deg, #ff832b 0%, #ff56a8 100%);color:white;border-radius:10px;border: white 1px groove;padding:10px;float: right;    margin-bottom: 15px;">Ajouter des événements</button>
                  </a>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead style="border-radius:20px ">
                            <tr>
                                <th style="width:15%">Nom de lévénement</th>
                                <th style="width:12%">Nombre de place</th>
                                <th style="width:19%">Date de l'événement et horaire</th>
                                <th style="width:20%">Status</th>
                                <th style="width:20%">Lieu</th>
                                <th style="width:20%">Action</th>
                            </tr>
                        </thead>
                        @foreach ($events as $event)
                        <tbody>
                            <tr>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->number_of_place }}</td>
                                <td>{{ \Carbon\Carbon::parse($event->event_date)->format('d/m/Y H:i') }}</td>
                                <td>
                                    @if ($event->status == 'Request for participation')
                                    <span style="padding: 10px;background-color:#9ce995;color:black;width:180px"
                                        class="badge">{{ $event->status }}</span>
                                    @elseif ($event->status == 'Registered')
                                    <span style="padding: 10px;background-color:#f6ff91;color:black;width:180px"
                                        class="badge">{{ $event->status }}</span>
                                    @elseif ($event->status == 'Request sent')
                                    <span style="padding: 10px;background-color:#d495e9;color:black;width:180px"
                                        class="badge">{{ $event->status }}</span>
                                    @else
                                    <span style="padding: 10px;background-color:#e7b26c;color:black;width:180px"
                                        class="badge">{{ $event->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $event->place }}</td>
                                <td style="width: 40%">
                                    <a href="{{ route('events.edit',$event->name) }}">
                                            <button style="color: white" class="btn-info btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                    </a>
                                    <a href="{{ route('events.view',$event->name) }}">
                                        <button style="color: white" class="btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                </a>
                                    <form action="{{ route('events.destroy', ['name' => $event->name]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')" class="btn-danger btn-sm" type="submit"><i style="color: white" class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endpush
