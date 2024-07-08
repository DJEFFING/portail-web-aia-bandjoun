@extends('web.app.app', ['page' => 5])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/footer_and_head.jpeg') }} ');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>PROJETS</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Aceuil</a></li>
                    <li>Projets</li>
                </ol>

            </div>
        </div><br>
        <!-- End Breadcrumbs -->

        <br><div class="section-header">
            <h2>Nos Projets</h2>
            <p>Découvrez nos Projet ci-dessous, où nous développons des solutions
                innovantes pour un avenir meilleur.</p>
        </div>

        <!-- ======= Projet Section ======= -->
        {{-- @forelse ($poleRecherches as $poleRecherche) --}}
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                    {{-- <div class="section-header">
                        <h2>{{ $poleRecherche->titre }}</h2>
                        <p>({{ count($poleRecherche->projets) }}) Projets</p>
                    </div> --}}

                    <div class="row gy-4">
                        @forelse ($projets as $projet)
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item  position-relative">
                                    <div class="col-xl-5">
                                        <div class="card-bg"
                                            style="background-image: url({{ asset('asset_web/assets/img/about.jpg') }});">
                                        </div>
                                    </div>
                                    <h3>{{ $projet->titre }}</h3>
                                    <p>{{ $projet->description_1 }}</p>
                                    <a href="{{ route('web.show-projet', $projet->id) }}"
                                        class="btn btn-primary">
                                        consulter
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        @empty
                            <center>
                                <p>Aucun projet</p>
                            </center>
                        @endforelse
                    </div>

                </div>
            </section>
        {{-- @empty
            <center>
                <p>Aucun Information</p>
            </center>
        @endforelse --}}

        <!-- End Projet Section -->
    </main>
@endsection
