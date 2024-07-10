@extends('web.app.app', ['page' => 4])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/footer_and_head.jpeg') }} ');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Equipes</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Aceuil</a></li>
                    <li>Equipes</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Equipe Section ======= -->
        @forelse ($poleRecherches as $poleRecherche)
            <section id="constructions" class="constructions section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{ $poleRecherche->titre }}</h2>
                        <p>{{ count($poleRecherche->equipes) }} Equipe</p>
                    </div>

                    <div class="row gy-4">

                        @forelse ($poleRecherche->equipes as $equipe)
                            <a href="{{ route('web.show-equipe', $equipe->id) }}" class="col-lg-6" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="card-item">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="card-bg"
                                                style="background-image: url({{ config('global.S3_url'). $equipe->media_url }});">
                                            </div>
                                        </div>
                                        <div class="col-xl-7 d-flex align-items-center">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $equipe->titre }} ({{ $equipe->code_equipe }})
                                                </h4>

                                                <div class="d-flex">
                                                    <p>
                                                        <span
                                                            style="background-color: #00aefe; color:white; text-align: center; width: 200px; margin-right: 10px; padding: 5px;">Reponsable
                                                        </span>
                                                        {{ $equipe->user->name }} {{ $equipe->user->prenom }}
                                                    </p>
                                                </div><br>


                                                <div>
                                                    <p>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-person"></i>
                                                        <strong><span class="ps-2">{{ count($equipe->menbres) + 1 }}</span>
                                                            Membres</strong>
                                                    </div>
                                                    </p>
                                                </div><br>

                                                <p>{{ Str::limit($equipe->description_1, 100, '...') }}</p>
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
        @empty
            <center>Aucune information</center>
        @endforelse
        <!-- End Equipe Section -->
    </main>
@endsection
