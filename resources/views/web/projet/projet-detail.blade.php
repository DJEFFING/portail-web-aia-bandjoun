@extends('web.app.app', ['page' => 0])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Projet</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Projet | Détails</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Service Details Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">



                    <div class="col-lg-8">
                        <img src="{{ config('global.S3_url'). $projet->media_url }}" alt=""
                            class="img-fluid services-img">
                        <h3>{{ $projet->titre }}</h3>
                        <div class="container mt-5">
                            <small>
                                <p class="card-text w-5 h-5"
                                    style="background-color: #00aefe;color:white; text-align: center">Date Debut :
                                    {{ $projet->date_debut }}</p>,
                                <p class="card-text w-5 h-5"
                                    style="background-color: #00aefe;color:white; text-align: center"> Date Fin :
                                    {{ $projet->date_fin }}</p>
                                <div id="article-content">
                                    <p class="text-justify">{!! $projet->description_2 !!}</p>
                                </div>
                            </small>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <a href="{{ route('web.show-profil', $projet->user->id) }}">
                            <div class="card">

                                <div class="row">
                                    @if ($projet->user->profil_url)
                                        <img src="{{ config('global.S3_url'). $projet->user->profil_url }}"
                                            class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                    @else
                                        <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                            class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                    @endif
                                </div>

                                <div class="card-body">
                                    <p><strong>Nom :</strong> {{ $projet->user->name }} {{ $projet->user->prenom}} </p>
                                    <p><strong>mail :</strong> {{ $projet->user->email }}</p>
                                    <p><strong>telephone :</strong> {{ $projet->user->telephone }}</p>
                                    <p><strong>address :</strong> {{ $projet->user->adress }}</p>
                                    <p class="card-text text-blue w-50 h-50"
                                        style="background-color: #00aefe;color:white; text-align: center">Responssable</p>
                                </div>
                            </div>
                        </a><br>

                        <br>
                        @if ($projet->participants()->exists())
                            <div class="services-list">
                                <h4>Autre paricipants ({{ count($projet->participants) }})</h4>
                                @forelse ($projet->participants as $participant)
                                    <a href="{{ route('web.show-profil', $participant->id) }}">{{ $participant->name }},
                                        {{ $participant->prenom }}

                                    </a>
                                    <hr>
                                @empty
                                    <center>Aucun autre participant...</center>
                                @endforelse
                            </div><br>
                        @endif


                        <br>
                        @if ($projet->partenaires()->exists())
                            <div class="services-list">
                                <h4>Partenaire : ({{ count($projet->partenaires) }})</h4>
                                @forelse ($projet->partenaires as $partenaire)
                                    <a href="#">{{ $partenaire->titre }}</a>
                                    <hr>
                                @empty
                                    <center>Aucun Partenaire...</center>
                                @endforelse
                            </div><br>
                        @endif



                    </div>
                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->
@endsection
