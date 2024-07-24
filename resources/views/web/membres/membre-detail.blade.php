@extends('web.app.app', ['page' => 8])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Membre</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Membre | Détail</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-5">

                    <!-- Information Profil -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <div class="row gy-4">
                                @if ($user->profil_url)
                                    <img src="{{ config('global.S3_url'). $user->profil_url }}"
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100 col-md-6"
                                        alt="...">
                                @else
                                    <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @endif
                                <div class="col-md-6">
                                    <p><strong>Nom :</strong> {{ $user->name }}</p>
                                    <p><strong>Prenom :</strong> {{ $user->prenom }}</p>
                                    <p><strong>Grade :</strong> {{ $user->grade }}</p>

                                </div>

                            </div><br>

                            @if ($user->poleRecherches->isNotEmpty())
                                <div class="card p-3">
                                    <p style="background-color: green; color: white; text-align: center;">Pôle de Recherche
                                    </p>
                                    <p><strong>resp : </strong><a href="{{ route('web.show-poleRecherche',$user->poleRecherches[0]->id) }}">{{ $user->poleRecherches[0]->titre }}</a></p>
                                </div>
                            @elseif($user->equipes->isNotEmpty())
                                <div class="card p-3">
                                    <p style="background-color: rgb(20, 39, 218); color: white; text-align: center;">Equipe</p>
                                    <p><strong>resp : </strong><a href="{{ route('web.show-equipe',$user->equipes[0]->id) }}">{{ $user->equipes[0]->titre }}</a></p>
                                </div>
                            @elseif($user->equipe->isNotEmpty())
                                <div class="card p-3">
                                    <p style="background-color: rgb(159, 216, 226); color: white; text-align: center;">Membre Equipe</p>
                                    <p><strong>Equipe : </strong><a href="{{ route('web.show-equipe',$user->equipe[0]->id) }}">{{ $user->equipe[0]->titre }}</a></p>
                                </div>
                            @elseif($user->axes->isNotEmpty())
                                <div class="card p-3">
                                    <p style="background-color: rgb(41, 180, 204); color: white; text-align: center;">Responsable d'axe</p>
                                    <p><strong>Axe de recherche : </strong><a href="{{ route('web.show-axe',$user->axes[0]->id) }}">{{ $user->axes[0]->titre }}</a></p>
                                </div>
                            @endif

                            <br>
                            <div class="card-body">
                                <p><strong>Lieu de Travail :</strong> {{ $user->lieu_travail }}</p>
                                <p><strong>Email :</strong> {{ $user->email }}</p>
                                <p><strong>telephone :</strong> {{ $user->telephone }}</p>
                                <p><strong>address :</strong> {{ $user->adress }}</p>
                                <p class="card-text text-blue w-50 h-50"
                                    style="background-color: rgb(35, 161, 245);color:white; text-align: center">
                                    {{ $user->fonction->nom }}
                                </p>
                                <hr>
                                <p>{{ $user->description }}</p>
                            </div>
                            <br>





                        </div>
                    </div>
                    <!--END Information Responsable -->

                    <div class="col-lg-8">

                        <!-- List Publication -->
                            @include('web.membres.membre-partials-detail.membre-list-publication')
                        <!--END List Publication -->

                        <!-- List Arcticle -->
                            {{-- @include('web.membres.membre-partials-detail.membre-list-article') --}}
                        <!--END List Arcticle -->

                        @if ($user->evernements->isNotEmpty())
                            <!-- List Evernement -->
                            @include('web.membres.membre-partials-detail.membre-list-evernement')
                            <!--END List Evernement -->
                        @endif

                        @if ($user->getProjet())
                            <!-- List Projet -->
                            @include('web.membres.membre-partials-detail.membre-list-projet')
                            <!--END List Projet -->
                        @endif

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
