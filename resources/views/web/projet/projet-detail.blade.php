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
                        <img src="{{ asset('storage/' . $projet->media_url) }}" alt="" class="img-fluid services-img">
                        <h3>{{ $projet->titre }}</h3>
                        <div class="container mt-5">
                            <small>
                                <p class="card-text w-5 h-5" style="background-color: rgb(17, 236, 65);color:white; text-align: center">Date Debut : {{ $projet->date_debut }}</p>,
                                <p class="card-text w-5 h-5" style="background-color: rgb(12, 230, 30);color:white; text-align: center"> Date Fin  : {{ $projet->date_fin }}</p>
                                <div id="article-content">
                                    <p class="text-justify">{!! $projet->description_2 !!}</p>
                                </div>
                            </small>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">

                            <div class="row">
                                @if ($projet->user->profil_url)
                                    <img src="{{ asset('storage/' . $projet->user->profil_url) }}"
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @else
                                    <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @endif
                            </div>

                            <div class="card-body">
                                <p><strong>Nom :</strong> {{ $projet->user->name }}</p>
                                <p><strong>mail :</strong> {{ $projet->user->email }}</p>
                                <p><strong>telephone :</strong> {{ $projet->user->telephone }}</p>
                                <p><strong>address :</strong> {{ $projet->user->adress }}</p>
                                <p class="card-text text-blue w-50 h-50"
                                    style="background-color: green;color:white; text-align: center">Responssable</p>
                            </div>
                        </div><br>

                        <br>
                        <div class="services-list">
                            <h4>Equipe ({{ count($projet->equipes()->where('status', true)->get()) }})</h4>
                            @forelse ($projet->equipes()->where("status",true)->get() as $equipe)
                                <a href="{{ route('web.show-equipe',$equipe->id) }}">{{ $equipe->titre }} ({{ $equipe->code_equipe }})</a>
                                <p class="card-text text-blue w-50 h-50"
                                    style="background-color: rgb(18, 62, 209);color:white; text-align: center">
                                    {{ app\models\RoleEquipeProjet::find($equipe->pivot->role_equipe_projet_id)->nom }}</p>
                                <hr>
                            @empty
                                <center>Aucune Equipe...</center>
                            @endforelse
                        </div><br>

                        <br>
                        <div class="services-list">
                            <h4>Partenaire : ({{ count($projet->partenaires) }})</h4>
                            @forelse ($projet->partenaires as $partenaire)
                                <a href="#">{{ $partenaire->titre }}</a>
                                <hr>
                            @empty
                                <center>Aucun Partenaire...</center>
                            @endforelse
                        </div><br>


                    </div>
                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->
@endsection
