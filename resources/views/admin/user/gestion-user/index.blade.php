@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="title">
                                <h4>Liste Utilisateurs</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste Utilisateur</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            @if (Auth::user()->getRole('Admin'))
                            <div class="pull-right">
                                <a href="#striped-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"
                                    data-toggle="modal" data-target="#Ajouter" role="button"><i class="icon-copy fi-plus"></i></a>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text " class="form-control" id="searchBar" name="search"
                    placeholder="Recherche: Nom, Prenom, Pôle de Recherche, Equipe....">
                </div>

                <!-- List Des Responssable de pôles de recherche -->
                <div class="row clearfix">
                    <!-- List Des Responssable de pôles de recherche -->
                   @include('admin.user.gestion-user.layout.respPoleRecherche')
                    <!-- List Des Responssable de pôles de recherche -->


                    <!-- List Des Responssable d'equipe-->
                    @include('admin.user.gestion-user.layout.respEquipe')
                    <!--END List Des Responssable d'equipe-->

                    <!-- List Des Responssable d'axe de Recherche-->
                    @include('admin.user.gestion-user.layout.respAxeRecherche')
                    <!-- List Des Responssable d'axe de Recherche-->

                    <!-- List Des Membres d'axe de Recherche-->
                    @include('admin.user.gestion-user.layout.membAxeRecherche')
                    <!-- List Des Membres d'axe de Recherche-->



                    <!-- Liste Membres Equipe-->
                        @include('admin.user.gestion-user.layout.membEquipe')
                    <!--END Liste Membres Equipe-->

                    <!-- Liste Membres qui ne sont pas dans un pole ou dans une equipe de recherche-->
                        @include('admin.user.gestion-user.layout.membNoPoEq')
                    <!--END Liste Membres qui ne sont pas dans un pole ou dans une equipe de recherche-->

                </div>

            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA BANDJOUN
            </div>
        </div>
    </div>
    @include('admin.user.gestion-user.create')
@endsection
