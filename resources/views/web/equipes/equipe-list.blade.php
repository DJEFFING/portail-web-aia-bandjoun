@extends('web.app.app',["page"=>4])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/breadcrumbs-bg.jpg') }} ');">
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
                                                style="background-image: url({{ asset('storage/' . $equipe->media_url) }});">
                                            </div>
                                        </div>
                                        <div class="col-xl-7 d-flex align-items-center">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $equipe->titre }} ({{ $equipe->code_equipe }})</h4>
                                                <p><span
                                                        style="background-color: green; color:white; text-align: center; width: 200px; margin-right: 10px;">Reponsable
                                                    </span> {{ $equipe->user->name }}</p>
                                                <p></p><br>
                                                <p>{{ Str::limit($equipe->description_1, 200, '...') }}</p>
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
