@extends('web.app.app', ['page' => 4])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>AXE DE RECHERCHE</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Axe | details</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Service Details Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">



                    <div class="col-lg-8">
                        <img src="{{config('global.S3_url').$axe->media_url }}" alt="" class="img-fluid services-img">
                        <h3>{{ $axe->titre }}</h3>
                        <div class="container mt-5">
                            <div id="article-content">
                                <p class="text-justify">{!! $axe->description_2 !!}</p>
                            </div>
                        </div>

                        {{-- <p></p> --}}
                    </div>

                    <div class="col-lg-4" >
                        <div class="card" style="padding: 20px;">

                            <div class="row">
                                @if ($axe->user->profil_url)
                                <img src="{{config('global.S3_url').$axe->user->profil_url }}" class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @else
                                <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} " class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @endif
                            </div>

                            <div class="card-body">
                                <a href="{{ route('web.show-profil', $axe->user->id) }}"><p><strong>Nom :</strong> {{ $axe->user->name }} {{ $axe->user->prenom }}</p></a>
                                <p><strong>mail :</strong> {{ $axe->user->email }}</p>
                                <p><strong>telephone :</strong> {{ $axe->user->telephone }}</p>
                                <p><strong>address :</strong> {{ $axe->user->adress }}</p>
                              <p class="card-text text-blue w-50 h-50" style="background-color: #00aefe;color:white; padding: 5px; text-align: center">Responssable</p>
                            </div>
                        </div><br>


                        {{-- <br><div class="services-list">
                            <h4>Membre ({{ count($axe->menbres) }})</h4>
                            @forelse ($axe->menbres as $menbre)
                            <a href="{{ route('web.show-profil', $menbre->id) }}">{{ $menbre->name }} {{ $menbre->prenom }}</a><hr>
                            <p style="background-color: blue; color:white; text-align: center; width: 150px;">{{ $menbre->roleEquipe[0]->nom }}</p><br><hr>
                            @empty
                            <center>Pas de Membre</center>
                            @endforelse
                        </div> --}}


                    </div>
                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->
@endsection
