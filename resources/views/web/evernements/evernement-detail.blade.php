@extends('web.app.app', ['page' => 0])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2> EVENEMENT</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li> Evenement | Detail</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Projet Details Section ======= -->
        <section id="project-details" class="project-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="position-relative h-100">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$evernement->media_url) }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>{{ $evernement->titre }}</h2>
                            <p>{{ $evernement->description_1 }}</p>
                            <div id="article-content">
                                <p>{!! $evernement->description_2 !!}</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>Information sur l'événement</h3>
                            <ul>
                                <li><strong style="color: black">Categories :</strong>
                                    @forelse ($evernement->types as $type)
                                    <span class="bold-text" style="background-color: #00aefe; color:white; text-align: center; width: 100px;">{{ $type->nom }}</span><br>
                                    @empty

                                    @endforelse

                                </li>
                                <li><strong style="color: black">Date :</strong>
                                    @php
                                        $date = new DateTime($evernement->date);
                                    @endphp
                                     <span class="bold-text" class="bold-text" style="font-weight: bold;">{{$date->format("Y-m-d") }}</span>
                                </li>

                                <li><strong style="color: black">Lieu : </strong>
                                     <span class="bold-text" style="font-weight: bold;">{{ $evernement->ville }}, {{ $evernement->adress }}</span>
                                </li>
                            </ul>

                        </div>

                        @if ($evernement->membres()->exists())
                        <div class="portfolio-info card p-3">
                            <h3>Participants ({{ count($evernement->membres) }})</h3>
                            <ul>
                                @forelse ($evernement->membres as $membre)
                                    <li>
                                        <strong>{{ $membre->name }}</strong>
                                        <span style="background-color: blue; color:white; text-align: center; width: 150px;">{{ app\models\RoleEvernement::find($membre->pivot->role_evernement_id)->nom }}</span><br>
                                    </li><hr>
                                @empty
                                <p>Aucun Membre... </p>
                                @endforelse

                            </ul>
                        </div>
                        @endif

                        @if ($evernement->partenaires()->exists())
                        <br><div class="portfolio-info card p-3">
                            <h3>Partenaire : ({{ count($evernement->partenaires) }})</h3>
                            <ul>
                                @forelse ($evernement->partenaires as $partenaire)
                                    <li>
                                        <strong>{{ $partenaire->nom }}</strong>
                                    </li><hr>
                                @empty
                                <p>Aucun Partenaire... </p>
                                @endforelse

                            </ul>
                        </div>
                        @endif
                    </div>

                </div>

            </div>
        </section><!-- End Projet Details Section -->

    </main><!-- End #main -->
@endsection
