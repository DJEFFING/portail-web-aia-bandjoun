@extends('web.app.app', ['page' => 1])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/footer_and_head.jpeg') }} ');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Unite de Recherche d'Automatique et d'Informatique Appliqée</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Aceuil</a></li>
                    <li>À propos de Nous</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url( {{ asset('storage/' . $apropos->image_url) }} );"></div>

                    <div class="col-lg-7">
                        <h2>{{ $apropos->titre }}</h2>
                        <div class="our-story">
                            {!! $apropos->desription !!}
                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch
                                    Video</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $countSection['membre'] }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Membres</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->


                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $countSection['equipe'] }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Equipes</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->




                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $countSection['projet'] }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projets</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>

                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $countSection['publication'] }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Publications</p>
                            </div>

                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section>
        <!-- End Stats Counter Section -->

        <!-- ======= Pole Recherche Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2> {{ count($poleRecherches) }} Domaine de Recherche</h2>
                    {{-- <p>Découvrez nos Domaine de Recherche ci-dessous, où nous explorons et développons des solutions
                        innovantes pour un avenir agricole meilleur.</p> --}}
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
                                                </span> {{ $poleRecherche->user->name }}</p>
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

        <!-- ======= Equipe Section ======= -->
        <section id="constructions" class="constructions section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>{{ count($equipes) }} Equipe</h2>
                </div>

                <div class="row gy-4">

                    @forelse ($equipes as $equipe)
                        <a href="{{ route('web.show-equipe', $equipe->id) }}" class="col-lg-6" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="card-bg d-flex"
                                            style="background-image: url({{ asset('storage/' . $equipe->media_url) }}); ">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $equipe->titre }}</h4>
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
        <!-- End Equipe Section -->


        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Quelques membres importants</h2>
                    <p>Vous avez ci-dessous quelques membres importants de l'unité de recherche</p>
                </div>

                <div class="row gy-5">

                    @forelse ($administrationUser as $user)
                        @if (!$user->fonction()->where('nom', 'membre')->exists())
                            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    @if ($user->profil_url)
                                        <img src=" {{ asset('storage/' . $user->profil_url) }} " class="img-fluid"
                                            alt="">
                                    @else
                                        <img src=" {{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                            class="img-fluid" alt="">
                                    @endif
                                    <div class="social">
                                        <a href="{{ $user->twiter_url }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ $user->facebook_url }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ $user->instagram_url }}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{ $user->linkdin_url }}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <a href="{{ route('web.show-profil',$user->id) }}"><h4>{{ $user->name }}</h4></a>
                                    <h5>{{ $user->grade }}-{{ $user->lieu_travail }}</h5>
                                    <span>{{ $user->fonction->nom }}</span>
                                    <p>{{ $user->description }}
                                    </p>
                                </div>
                            </div><!-- End Team Member -->
                        @endif
                    @empty
                        <p>Pas De Membre....</p>
                    @endforelse


                </div>

            </div>
        </section><!-- End Our Team Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nos Partenaire</h2>
                    <p>Decouvrez ici Nos Partenaires</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                        @forelse ($partenaires as $partenaire)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('storage/'.$partenaire->logo_url) }}" class="testimonial-img"
                                            alt="">
                                        <h3>{{ $partenaire->nom }}</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            {{ $partenaire->description }}.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @empty
                            <center><p>Aucun Partenaire</p></center>
                        @endforelse


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
