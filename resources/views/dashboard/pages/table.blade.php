@extends('dashboard.layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')
    <style>
        @media (min-width: 100px) {
            .container {
                margin-top: -80px;
                height: 500px;
                overflow-y: auto;
            }

            table {
                overflow-x: auto;
                max-height: 400px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                margin-top: -130px;
                height: 500px;
                overflow-y:hidden;
            }

        }
        table {
            text-align: center;
            width: 100%
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
                    <table class="table table-hover">
                        <thead style="border-radius:20px ">
                            <tr>
                                <th style="width:18%">Nom de lévénement</th>
                                <th style="width:16%">Nombre de place</th>
                                <th style="width:25%">Date de l'événement et horaire</th>
                                <th style="width:30%">Status</th>
                                <th style="width:20%">Lieu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Paris-Brest</td>
                                <td>4</td>
                                <td>11/05/1998 21:00</td>
                                <td><span style="padding: 10px;background-color:#9ce995;color:black" class="badge">Demande
                                        de
                                        participation</span>
                                    <i style="background-color: white;color:black;padding:5px;border-radius:50%;border:black 1px groove"
                                        class="uil uil-plus"></i>
                                </td>
                                <td>Parc des</td>
                            </tr>
                            <tr>
                                <td>Rubrik TechUpdate</td>
                                <td>15</td>
                                <td>23/05/1998 21:00</td>
                                <td><span style="padding: 10px;background-color:#f6ff91;color:black;width:180px"
                                        class="badge">Inscrit</span>
                                </td>
                                <td>Palais des</td>
                            </tr>
                            <tr>
                                <td>Next Nutanix</td>
                                <td>4</td>
                                <td>11/05/1998 21:00</td>
                                <td><span style="padding: 10px;background-color:#d495e9;color:black;width:180px"
                                        class="badge">Demande envoyee</span>
                                </td>
                                <td> Barcelone</td>
                            </tr>
                            <tr>
                                <td>Paris-Brest</td>
                                <td>4</td>
                                <td>11/05/1998 21:00</td>
                                <td><span style="padding: 10px;background-color:#9ce995;color:black" class="badge">Demande
                                        de
                                        participation</span>
                                    <i style="background-color: white;color:black;padding:5px;border-radius:50%;border:black 1px groove"
                                        class="uil uil-plus"></i>
                                </td>
                                <td>Parc des</td>
                            </tr>
                            <tr>
                                <td>Paris-Brest</td>
                                <td>4</td>
                                <td>11/05/1998 21:00</td>
                                <td><span style="padding: 10px;background-color:#9ce995;color:black" class="badge">Demande
                                        de
                                        participation</span>
                                    <i style="background-color: white;color:black;padding:5px;border-radius:50%;border:black 1px groove"
                                        class="uil uil-plus"></i>
                                </td>
                                <td>Parc des</td>
                            </tr>
                            <tr>
                                <td>Paris-Brest</td>
                                <td>4</td>
                                <td>11/05/1998 21:00</td>
                                <td><span style="padding: 10px;background-color:#9ce995;color:black" class="badge">Demande
                                        de
                                        participation</span>
                                    <i style="background-color: white;color:black;padding:5px;border-radius:50%;border:black 1px groove"
                                        class="uil uil-plus"></i>
                                </td>
                                <td>Parc des</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endpush
