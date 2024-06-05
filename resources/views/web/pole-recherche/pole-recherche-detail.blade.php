@extends('web.app.app', ['page' => 0])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Pôle de Recherche Détail</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Pôle de Recherche Détail</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Service Details Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">



                    <div class="col-lg-8">
                        <img src="{{ asset('storage/'.$poleRecherche->media_url) }}" alt="" class="img-fluid services-img">
                        <h3>{{ $poleRecherche->titre }}</h3>
                        <div class="container mt-5">
                            <div id="article-content">
                                <p class="text-justify">{!! $poleRecherche->description_2 !!}</p>
                            </div>
                        </div>

                        {{-- <p></p> --}}
                    </div>

                    <div class="col-lg-4" >
                        <div class="card" style="width: 18rem;">

                            <div class="row">
                                @if ($poleRecherche->user->profil_url)
                                <img src="{{ asset('storage/'.$poleRecherche->user->profil_url) }}" class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @else
                                <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} " class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @endif
                            </div>

                            <div class="card-body">
                                <p><strong>Nom :</strong> {{ $poleRecherche->user->name }}</p>
                              <p class="card-text text-blue w-50 h-50" style="background-color: green;color:white; text-align: center">Responssable</p>
                            </div>
                        </div><br>


                        <br><div class="services-list" style="margin-left: 60px;">
                            <h4>Equipe ({{ count($poleRecherche->equipes) }})</h4>
                            @forelse ($poleRecherche->equipes as $equipe)
                            <a href="#">Remodeling</a><hr>
                            @empty
                            <center>Pas d'équipe</center>
                            @endforelse
                        </div>


                    </div>
                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->
@endsection
