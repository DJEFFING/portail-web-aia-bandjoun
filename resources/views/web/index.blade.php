@extends('web.app.app', ['page' => 0])
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">{{ $slide->titre }}</h2>
                        <p data-aos="fade-up">{{ $slide->desription }}</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            @if(json_decode($slide->image_url) )
                @forelse (json_decode($slide->image_url) as $item => $image)
                    @if ($item == 0)
                        <div class="carousel-item active" style="background-image: url({{ asset('storage/' . $image) }})">
                        </div>
                    @else
                        <div class="carousel-item" style="background-image: url({{ asset('storage/' . $image) }})">
                        </div>
                    @endif


                @empty
                    <div class="carousel-item active"
                        style="background-image: url({{ asset('asset_web/assets/img/hero-carousel/hero-carousel-1.jpg') }})">
                    </div>
                    <div class="carousel-item"
                        style="background-image: url({{ asset('asset_web/assets/img/hero-carousel/hero-carousel-2.jpg') }})">
                    </div>
                    <div class="carousel-item"
                        style="background-image: url({{ asset('asset_web/assets/img/hero-carousel/hero-carousel-3.jpg') }})">
                    </div>
                    <div class="carousel-item"
                        style="background-image: url({{ asset('asset_web/assets/img/hero-carousel/hero-carousel-4.jpg') }})">
                    </div>
                    <div class="carousel-item"
                        style="background-image: url({{ asset('asset_web/assets/img/hero-carousel/hero-carousel-5.jpg') }})">
                    </div>
                @endforelse
            @endif


            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">
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


        <!-- ======= Pole Recherche Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Domaine de Recherche</h2>
                    <p>Découvrez nos Domaine de Recherche ci-dessous, où nous explorons et développons des solutions
                        innovantes pour un avenir agricole meilleur.</p>
                </div>

                <div class="row gy-4">

                    @forelse ($poleRecherches as $poleRecherche)
                        <a href="{{ route('web.show-poleRecherche',$poleRecherche->id) }}" class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="card-bg"
                                            style="background-image: url({{ asset('storage/' . $poleRecherche->media_url) }});">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
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

        <!-- ======= Projet Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nos Projets</h2>
                    <p>Découvrez nos Projet ci-dessous.</p>
                </div>

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
                                <a href="{{ route('web.show-projet',$projet->id) }}" class="readmore stretched-link">Learn more <i
                                        class="bi bi-arrow-right"></i></a>
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
        <!-- End Projet Section -->


        <!-- ======= Our Events Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nos  Evénements</h2>
                    <p>Consultez ici quelque une de nos événements</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @forelse ($typeEvenement as $type)
                            <li data-filter=".filter-{{ $type->nom }}">{{ $type->nom }}</li>
                        @empty
                            <center>
                                <p>Pas d'Événement</p>
                            </center>
                        @endforelse

                    </ul>
                    <!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @forelse ($evenements as $evernement)
                            @if (count($evernement->types) > 1)
                                <div
                                    class="col-lg-4 col-md-6 portfolio-item @foreach ($evernement->types as $type) filter-{{ $type->nom }} @endforeach ">
                                    <div class="portfolio-content h-100">
                                        <img src=" {{ asset('storage/' . $evernement->media_url) }} " class="img-fluid"
                                            alt="">

                                        <div class="portfolio-info">
                                            <h4>{{ $evernement->date }}</h4>
                                            <h4>{{ $evernement->ville }}</h4>
                                            <p>{{ $evernement->titre }}</p>
                                            <a href=" {{ asset('storage/' . $evernement->media_url) }}"
                                                title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="{{ route('web.show-evernement',$evernement->id) }}" title="More Details" class="details-link"><i
                                                    class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Projects Item -->
                            @else
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $evernement->types[0]->nom }} ">
                                    <div class="portfolio-content h-100">
                                        <img src="  {{ asset('storage/' . $evernement->media_url) }} " class="img-fluid"
                                            alt="">
                                        <div class="portfolio-info">
                                            <h4>{{ $evernement->date }}</h4>
                                            <h4>{{ $evernement->ville }}</h4>
                                            <p>{{ $evernement->titre }}</p>
                                            <a href="  {{ asset('storage/' . $evernement->media_url) }} "
                                                title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="{{ route('web.show-evernement',$evernement->id) }}" title="More Details" class="details-link"><i
                                                    class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        @empty
                            <center>
                                <p>Pas d'événement pour l'instant</p>
                            </center>
                        @endforelse


                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section>
        <!-- End Our Events Section -->


        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">



                <div class=" section-header">
                    <h2>Dernière Publication</h2>
                    <p>Découvrez nos dernières publications</p>
                </div>

                <div class="row gy-5">
                    {{-- @forelse ($publications as $publication)
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src=" {{ asset('storage/'.$publication->media_url) }} " class="img-fluid"
                                        alt="">
                                    <span class="post-date">{{ $publication->created_at->format("d-M-Y") }}</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ $publication->titre }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2">{{ $publication->user->name }}</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2">{{ $publication->revue->titre }}</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="{{ route('web.show-article',$publication->id) }}" class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                        </div>
                        <!-- End post item -->
                    @empty
                        <center>
                            <p>Pas de publication....</p>
                        </center>
                    @endforelse --}}

                </div>

            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
@endsection
