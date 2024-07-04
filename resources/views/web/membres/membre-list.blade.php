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
                        <form method="POST" action="" class="sidebar">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 sidebar-item search-form">
                                    <h3 class="sidebar-title">Par Nom</h3>
                                    <div class="search_select_box">
                                        <select name="user_name" id="" class="form-control custom-select2"
                                            style="width: 100%; height: 38px;" data-live-search="true">
                                            <option value=""></option>
                                            @forelse ($listNameUser as $listNameUse)
                                                <option value="{{ $listNameUse }}">{{ $listNameUse }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6 sidebar-item search-form ">
                                    <h3 class="sidebar-title">Equipes</h3>
                                    <div class="search_select_box">
                                        <select class="custom-select2 form-control" name="type_id"
                                            style="width: 100%; height: 38px;" required>
                                            <optgroup label="Type de document">
                                                <option value=""></option>
                                                @forelse ($listequipes as $equipe)
                                                    <option value="{{ $equipe->id }}">{{ $equipe->titre }}
                                                    </option>
                                                @empty
                                                @endforelse
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-6 sidebar-item search-form">
                                    <h3 class="sidebar-title">Axe de recherche</h3>

                                    <div class="search_select_box">
                                        <select name="auteur_id" id="" style="width: 100%; height: 38px;"
                                            class="form-control custom-select2" data-live-search="true">
                                            <optgroup label="Auteurs">
                                                <option value=""></option>
                                                @forelse ($listAxes as $axe)
                                                    <option value="{{ $axe->id }}">{{ $axe->titre }}
                                                        ({{ $axe->code_axe }})
                                                    </option>

                                                @empty
                                                @endforelse
                                            </optgroup>
                                        </select>
                                    </div>

                                </div>



                                <div class="col-md-6 sidebar-item search-form">
                                    <h3 class="sidebar-title">Fonction</h3>
                                    <select name="titre" id="" style="width: 100%; height: 38px;"
                                        class="form-control custom-select2" data-live-search="true">
                                        <optgroup label="titre">
                                            <option value=""></option>
                                            @forelse ($listFonction as $fonction)
                                                <option value="{{ $fonction->id }}">{{ $fonction->nom }}</option>

                                            @empty
                                            @endforelse
                                        </optgroup>
                                    </select>

                                </div>

                            </div><br>


                            <button type="submit" class="btn btn-primary">Recherche <i class="bi bi-search"></i></button>
                            <!-- End sidebar search formn-->

                            <!-- End sidebar categories-->

                        </form>
                        <!-- End Blog Sidebar -->


                        <!--END formulaire de recherche -->
                    </div>

                    <div class="row gy-5">



                        <!-- Liste Des Membres -->
                        <div class="row  gy-5 posts-list col-lg-12">

                            <!-- Responsable pole Recherche -->
                            @include('web.membres.membre-partials-list.membre-list-responsable-pole')
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
