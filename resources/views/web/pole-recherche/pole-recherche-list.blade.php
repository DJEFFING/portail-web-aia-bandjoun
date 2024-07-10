@extends('web.app.app', ['page' => 3])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/footer_and_head.jpeg') }} ');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Domaine de Recherche</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Aceuil</a></li>
                    <li>Domaine de Recherche</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->
        <!-- ======= Pole Recherche Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2> {{ count($poleRecherches) }} Domaine de Recherche</h2>
                    <p>Découvrez ci-dessous, la liste complète de nos Domaine de Recherche, où nous explorons et développons
                        des solutions
                        innovantes pour un avenir agricole meilleur.</p>
                </div>

                <div class="row gy-4">

                    @forelse ($poleRecherches as $poleRecherche)
                        <a href="{{ route('web.show-poleRecherche', $poleRecherche->id) }}" class="col-lg-6"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                                <div class="col">
                                    <div class="row-xl-5">
                                        <div class="card-bg"
                                            style="background-image: url({{ config('global.S3_url'). $poleRecherche->media_url }});">
                                        </div>
                                    </div>
                                    <div class="row-xl-7 d-flex align-items-center">
                                        <div class="card-body">

                                            <div class="row d-flex">
                                                <div class="col-md-6">
                                                    <p>
                                                        <span style="background-color: #00aefe; color:white; text-align: center; width: 200px; margin-right: 10px; padding: 5px;">Reponsable </span>
                                                        {{ $poleRecherche->user->name }} {{ $poleRecherche->user->prenom }}
                                                    </p>
                                                </div>

                                                <div class="col-md-6">
                                                    <p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-person"></i>
                                                            <strong><span class="ps-2">{{ count($poleRecherche->equipes) }}</span> Equipes</strong>
                                                        </div>
                                                    </p>
                                                </div>

                                            </div>


                                            <p></p><br>
                                            <h4 class="card-title">{{ $poleRecherche->titre }}</h4>
                                            <p>{{ Str::limit($poleRecherche->description_1, 200, '...') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a><!-- End Card Item -->
                    @empty
                        <center>
                            <p>Pas d'information.....</p>
                        </center>
                    @endforelse


                </div>

            </div>
        </section>
        <!-- End Pole Recherche Section -->
    </main>
@endsection
