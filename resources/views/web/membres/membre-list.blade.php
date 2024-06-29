@extends('web.app.app', ['page' => 8])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(' {{ asset('asset_web/assets/img/breadcrumbs-bg.jpg') }} ');">
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

                    <div class="row gy-5">

                        <!-- zone de recherche -->
                            <div class="col-lg-3">
                                <div class="sidebar">

                                    <div class="sidebar-item search-form">
                                        <h3 class="sidebar-title">Recherche</h3>
                                        <form action="" class="mt-3">
                                            <input type="text">
                                            <button type="submit"><i class="bi bi-search"></i></button>
                                        </form>
                                    </div>
                                    <!-- End sidebar search formn-->

                                </div>
                            </div>
                        <!--END zone de recherche -->

                        <!-- Liste Des Membres -->
                        <div class="row gy-4 posts-list col-lg-9">

                            <!-- Responsable pole Recherche -->
                                @include('web.membres.partials.membre-list-responsable-pole')
                            <!--END Responsable pole Recherche -->

                            <!-- Responsable Equipe -->
                                @include('web.membres.partials.membre-list-responsable-equipe')
                            <!-- END Responsable Equipe -->

                            <!-- Membre Equipe -->
                                @include('web.membres.partials.membre-list-membre-equipe')
                            <!--END Membre Equipe -->

                            <!-- Autre Membres-->
                                @include('web.membres.partials.membre-list-autre')
                            <!--END Autre Membres   -->

                        </div>
                        <!--END Liste Des Membres -->



                    </div>

                </div>
            </section>


        </div>
    </main>
@endsection
