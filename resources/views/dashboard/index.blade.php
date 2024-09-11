@extends('dashboard.layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<style>
     @media (min-width: 100px) {
        .container{
        margin-top: -80px;
        height: 600px
    }
     }
     @media (min-width: 1024px) {
        .container{
        margin-top: -130px;
        height: 270px;
    }
     }
     .content{
        margin-top: -80px;
        margin-left: 40px;
     }
     .content2{
        margin-top: -80px;
        margin-left: 50px;
     }
     .content3{
        margin-top: -80px;
        margin-left: 50px;
     }
     .icon{
        margin-top: -50px;
     }

</style>

		<div class="geex-content">

            <div style="background-color: #ffffff;color:black;padding:30px;border-radius:20px" class="container">
                <div class="row">
                    <div  class="col-md-12">
                        <h2 style="color: black"><b>Bienvenue sur ton portail client MindTech!</b></h2>
                        <p style="font-size: 13px"> Accedez a lensemble der resources qui vous sont mises a disposition.</p>
                    </div>
                    <div class="col-md-4 mt-5">
                        <b style="color: black;font-size:65px">1 </b>
                        <div class="content">
                        <h5 style="color: black">Espace Commercial </h5>
                        <p style="color: gray;font-size:13px">Accedes a vos commands <br> deivs contrats en cours.et a la  <br> maintenance de vos serveours  </p>
                    </div>
                  <div class="icon">
                    <i style="border: 1px grey groove;padding:20px;border-radius:50px;margin-left:248px;font-size:20px;" class="uil uil-building"></i>
                  </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <b style="color: black;font-size:65px">2 </b>
                        <div class="content2">
                        <h5 style="color: black">Espace Technique:</h5>
                        <p style="color: gray;font-size:13px">Acces aux applications de <br> support en cas d'incidents  <br> Techniques  </p>
                    </div>
                  <div class="icon">
                    <i style="border: 1px grey groove;padding:20px;border-radius:50px;margin-left:248px;font-size:20px;" class="uil uil-assistive-listening-systems"></i>
                  </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <b style="color: black;font-size:65px">3 </b>
                        <div class="content3">
                            <h5 style="color: black">Escape Documentation </h5>
                            <p style="color: gray;font-size:13px">Consultez les procedure at la <br> base de connaissances <br> redigees pour vour. </p>
                    </div>
                  <div class="icon">
                    <i style="border: 1px grey groove;padding:20px;border-radius:50px;margin-left:248px;font-size:20px;" class="uil uil-folder-open"></i>
                  </div>
                    </div>

                </div>
            <div class="contianer">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color: black;margin-top:120px"><b>Commercial</b></h2>
                    </div>
                    <div style="background-color: #ffffff;padding:35px;border-radius:10px;" class="col-md-6 mt-4">
                            <h3 style="color: black"> <i style="color: white;background-color:#637381;padding:8px;border-radius:50%;padding-left:15px;padding-right:15px" class="uil uil-shopping-cart"></i> <span style="margin-left:20px;margin-top:10px">Vos commandes</span></h3>
                            <p style="font-size: 13px" class="mt-4">En cliquant sur Launch’ vous accéderez a Lapplication ot vous. retrouverez vos devis, bons de commande en ligne ainsi que les factures associées.</p>
                            <button style="background-color: #e7e7e7;border-radius:10px" class="text-center btn  w-100 mt-5">Launch</button>
                      </div>

                      <div style="background-color: #ffffff;padding:35px;border-radius:10px;" class="col-md-6 mt-4">
                        <h3 style="color: black"> <i style="color: white;background-color:#637381;padding:8px;border-radius:50%;padding-left:15px;padding-right:15px" class="uil uil-shopping-cart"></i> <span style="margin-left:20px;margin-top:10px">Maintenance et contrats</span></h3>
                        <p style="font-size: 13px" class="mt-4">En cliquant sur “Launch” vous acceéderez (application oi vous retrouverez un état des lieu du support isponible pour le materiel que vous avez acheté chez MindTech. quil sagisse de materiel hardware. software. ou de la maintenance de niveau 3.</p>
                        <button style="background-color: #e7e7e7;border-radius:10px" class="text-center btn  w-100 mt-3">Launch</button>
                  </div>
                </div>
            </div>
            <div class="contianer">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color: black;margin-top:20px"><b>Technique</b></h2>
                    </div>
                </div>
                   <div class="row">
                    <div style="background-color: #ffffff;padding:35px;border-radius:10px;" class="col-md-6 mt-4">
                        <h3 style="color: black"> <i style="color: white;background-color:#637381;padding:8px;border-radius:50%;padding-left:15px;padding-right:15px" class="uil uil-shopping-cart"></i> <span style="margin-left:20px;margin-top:10px">Support technique</span></h3>
                        <p style="font-size: 13px" class="mt-4">En cliquant sur “Launch vous accéderez au support technique, vous pourrez créer et sure vos tickets, consulter [état des demandes en cours, et accéder a assistance pour tout contrat acheté chez MindTech</p>
                        <button style="background-color: #e7e7e7;border-radius:10px" class="text-center btn  w-100 mt-3">Launch</button>
                  </div>

                  <div style="background-color: #ffffff;padding:35px;border-radius:10px;" class="col-md-6 mt-4">
                    <h3 style="color: black"> <i style="color: white;background-color:#637381;padding:8px;border-radius:50%;padding-left:15px;padding-right:15px" class="uil uil-shopping-cart"></i> <span style="margin-left:20px;margin-top:10px">Monitoring</span></h3>
                    <p style="font-size: 13px" class="mt-4">En cliquant sur ‘Launch’ vous accéderez au support technique, ou vous pourrez créer et suivre vos tickets, consulter état des. demandes en cours, et accéder a lassistance pour tout contrat acheté chez MindTech</p>
                    <button style="background-color: #e7e7e7;border-radius:10px" class="text-center btn  w-100 mt-3">Launch</button>
              </div>
                   </div>
            </div>
            <div class="contianer">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color: black;margin-top:20px"><b>Documentation</b></h2>
                    </div>
                    <div style="background-color: #ffffff;padding:35px;border-radius:10px;" class="col-md-6 mt-4">
                            <h3 style="color: black"> <i style="color: white;background-color:#637381;padding:8px;border-radius:50%;padding-left:15px;padding-right:15px" class="uil uil-shopping-cart"></i> <span style="margin-left:20px;margin-top:10px">Vos documents & KB</span></h3>
                            <p style="font-size: 13px" class="mt-4">En cliquant sur Launch’ vous accéderez a la base documentaire avec (ensemble des documentations, et base de connaissence mindtech</p>
                            <button style="background-color: #e7e7e7;border-radius:10px" class="text-center btn  w-100 mt-3">Launch</button>
                      </div>
                </div>
            </div>
        </div>

		</div>


@endsection
@push('scripts')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endpush
