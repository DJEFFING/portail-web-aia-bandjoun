@extends('web.app.app', ['page' => 7])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Membre Détail</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Membre Détail</li>
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

                            <div class="row">
                                @if ($user->profil_url)
                                    <img src="{{ asset('storage/' . $user->profil_url) }}"
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @else
                                    <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @endif
                            </div>

                            <div class="card-body">
                                <p><strong>Nom :</strong> {{ $user->name }}</p>
                                <p><strong>Prenom :</strong> {{ $user->prenom }}</p>
                                <p><strong>Grade :</strong> {{ $user->grade }}</p>
                                <p><strong>Lieu de Travail :</strong> {{ $user->lieu_travail }}</p>
                                <p><strong>Email :</strong> {{ $user->email }}</p>
                                <p><strong>telephone :</strong> {{ $user->telephone }}</p>
                                <p><strong>address :</strong> {{ $user->adress }}</p>
                                <p class="card-text text-blue w-50 h-50"
                                    style="background-color: rgb(35, 161, 245);color:white; text-align: center">
                                    {{ $user->fonction->nom }}</p>
                            </div>
                            <br>





                        </div>
                    </div>
                    <!--END Information Responsable -->

                    <div class="col-lg-8">

                        <!-- List Arcticle -->
                        @include('web.membres.partials.membre-list-article')
                        <!--END List Arcticle -->

                        @if($user->evernements->isNotEmpty())
                            <!-- List Evernement -->
                                @include('web.membres.partials.membre-list-evernement')
                            <!--END List Evernement -->
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
