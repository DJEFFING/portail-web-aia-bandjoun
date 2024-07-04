@extends('web.app.app', ['page' => 4])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Equipe</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Equipe | details</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Service Details Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">



                    <div class="col-lg-8">
                        <img src="{{ asset('storage/'.$equipe->media_url) }}" alt="" class="img-fluid services-img">
                        <h3>{{ $equipe->titre }}</h3>
                        <div class="container mt-5">
                            <div id="article-content">
                                <p class="text-justify">{!! $equipe->description_2 !!}</p>
                            </div>
                        </div>

                        {{-- <p></p> --}}
                    </div>

                    <div class="col-lg-4" >
                        <div class="card">

                            <div class="row">
                                @if ($equipe->user->profil_url)
                                <img src="{{ asset('storage/'.$equipe->user->profil_url) }}" class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @else
                                <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} " class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @endif
                            </div>

                            <div class="card-body">
                                <a href="{{ route('web.show-profil', $equipe->user->id) }}"><p><strong>Nom :</strong> {{ $equipe->user->name }} {{ $equipe->user->prenom }}</p></a>
                                <p><strong>mail :</strong> {{ $equipe->user->email }}</p>
                                <p><strong>telephone :</strong> {{ $equipe->user->telephone }}</p>
                                <p><strong>address :</strong> {{ $equipe->user->adress }}</p>
                              <p class="card-text text-blue w-50 h-50" style="background-color: green;color:white; text-align: center">Responssable</p>
                            </div>
                        </div><br>


                        <br><div class="services-list">
                            <h4>Membre ({{ count($equipe->menbres) }})</h4>
                            @forelse ($equipe->menbres as $menbre)
                            <a href="{{ route('web.show-profil', $menbre->id) }}">{{ $menbre->name }} {{ $menbre->prenom }}</a><hr>
                            {{-- <p style="background-color: blue; color:white; text-align: center; width: 150px;">{{ $menbre->roleEquipe[0]->nom }}</p><br><hr> --}}
                            @empty
                            <center>Pas de Membre</center>
                            @endforelse
                        </div>


                    </div>
                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->
@endsection
