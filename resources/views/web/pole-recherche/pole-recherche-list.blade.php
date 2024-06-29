@extends('web.app.app',["page"=>3])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/breadcrumbs-bg.jpg') }} ');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Dommaine de Recherche</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Aceuil</a></li>
                    <li>Dommaine de Recherche</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->
        <!-- ======= Pole Recherche Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2> {{ count($poleRecherches) }} Dommaine de Recherche</h2>
                    <p>Découvrez ci-dessous, la liste complète de  nos Dommaine de Recherche, où nous explorons et développons des solutions
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
                                            style="background-image: url({{ asset('storage/' . $poleRecherche->media_url) }});">
                                        </div>
                                    </div>
                                    <div class="row-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <p><span
                                                    style="background-color: green; color:white; text-align: center; width: 200px; margin-right: 10px;">Reponsable
                                                </span> {{ $poleRecherche->user->name }}
                                            </p><br>
                                            <p><span
                                                style="background-color: rgb(69, 123, 240); color:white; text-align: center; width: 200px; margin-right: 10px;">Equipe :
                                            </span> {{ count($poleRecherche->equipes)}}
                                            </p>
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
