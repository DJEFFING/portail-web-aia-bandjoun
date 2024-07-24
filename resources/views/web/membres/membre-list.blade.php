@extends('web.app.app', ['page' => 8])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/footer_and_head.jpeg') }} ');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Membres</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Membres</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <div class="container">

            <section id="team" class="team blog">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Nos Membres</h2>
                        <p>Découvrez les profils de nos membres ci-dessous, et apprenez-en davantage sur leurs parcours,
                            leurs domaines d'expertise et leurs contributions à nos projets de recherche. Nous sommes fiers
                            de la diversité et de la richesse de notre équipe, qui est à la base de nos succès et de notre
                            capacité à faire avancer la science agricole.</p>
                    </div>

                    <div class="card">
                        <!-- formulaire de recherche -->

                            <div class="sidebar">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <h4>Formulaire de recherche</h4>
                                        <input type="text" id="searchBar" class="form-control" name="recherche" placeholder="Recherche par : Nom, Prenom, Equipe de Recherche, Axe de Recherche, Fonction, etc.">
                                    </div>
    
                                </div>
                            </div>

                        <!--END formulaire de recherche -->
                    </div>

                    <div class="row gy-5">



                        <!-- Liste Des Membres -->
                        <div class="row  gy-5 posts-list col-lg-12">

                            <!-- Responsable pole Recherche -->
                            {{-- @include('web.membres.membre-partials-list.membre-list-responsable-pole') --}}
                            <!--END Responsable pole Recherche -->

                            <!-- Responsable Equipe -->
                            @include('web.membres.membre-partials-list.membre-list-responsable-equipe')
                            <!-- END Responsable Equipe -->

                            <!-- Responsable Axe -->
                            @include('web.membres.membre-partials-list.membre-list-responsable-axe')
                            <!-- END Responsable Axe -->

                            <!-- Membre Equipe -->
                            @include('web.membres.membre-partials-list.membre-list-membre-equipe')
                            <!--END Membre Equipe -->

                            <!-- Autre Membres-->
                            @include('web.membres.membre-partials-list.membre-list-autre')
                            <!--END Autre Membres   -->

                        </div>
                        <!--END Liste Des Membres -->



                    </div>

                </div>
            </section>


        </div>
    </main>
@endsection
