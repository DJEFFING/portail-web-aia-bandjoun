@extends('web.app.app', ['page' => 2])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/footer_and_head.jpeg') }} ');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2> EVENEMENT</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li> EVENEMENT</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nos  Evènements</h2>
                    <p>Consultez ici la liste complète nos évènements passé et futur.</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @forelse ($typeEvenement as $type)
                            <li data-filter=".filter-{{ $type->nom }}">{{ $type->nom }}</li>
                        @empty
                            <center>
                                <p>Pas d'Evènement</p>
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
                                        <img src=" {{ config('global.S3_url'). $evernement->media_url }} " class="img-fluid"
                                            alt="">

                                        <div class="portfolio-info">
                                            <h4>{{ $evernement->date }}</h4>
                                            <h4>{{ $evernement->ville }}</h4>
                                            <p>{{ $evernement->titre }}</p>
                                            <a href=" {{ config('global.S3_url'). $evernement->media_url }}"
                                                title="{{ $evernement->titre }}" data-gallery="portfolio-gallery-remodeling"
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
                                        <img src="  {{ config('global.S3_url'). $evernement->media_url }} " class="img-fluid"
                                            alt="">
                                        <div class="portfolio-info">
                                            <h4>{{ $evernement->date }}</h4>
                                            <h4>{{ $evernement->ville }}</h4>
                                            <p>{{ $evernement->titre }}</p>
                                            <a href="  {{ config('global.S3_url'). $evernement->media_url }} "
                                                title="{{ $evernement->titre }}" data-gallery="portfolio-gallery-remodeling"
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
        </section><!-- End Our Projects Section -->
    </main>
@endsection
