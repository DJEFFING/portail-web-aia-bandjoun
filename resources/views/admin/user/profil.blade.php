@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Profile</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo" style="margin-bottom: 50px;">
                                <img src=" {{ asset('storage/' . $user->profil_url) }} " alt=""
                                    class="avatar-photo">
                            </div>
                            <h5 class="text-center h5 mb-0">{{ $user->name }}</h5>
                            <p class="text-center text-muted font-14">{{ $user->prenom }}</p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                <ul>
                                    <li>
                                        <span>Address Email :</span>
                                        {{ $user->email }}
                                    </li>
                                    <li>
                                        <span>Telepone:</span>
                                        {{ $user->telephone }}
                                    </li>
                                    <li>
                                        <span>Role:</span>
                                        @if ($user->getRole('admin'))
                                            <span class="badge badge-danger text-white">Admin</span>
                                        @else
                                            <span class="badge badge-success  text-white">Membre</span>
                                        @endif

                                    </li>
                                    <li>
                                        <span>Address:</span>
                                        {{ $user->adress }}
                                    </li>
                                </ul>
                            </div>
                            <div class="profile-social">
                                <h5 class="mb-20 h5 text-blue">Lien Social</h5>
                                <ul class="clearfix">
                                    <li><a href="{{ $user->facebook_url }}" class="btn" data-bgcolor="#3b5998"
                                            data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $user->twiter_url }}" class="btn" data-bgcolor="#1da1f2"
                                            data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{ $user->instagram_url }}" class="btn" data-bgcolor="#007bb5"
                                            data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{ $user->linkdin_url }}" class="btn" data-bgcolor="#f46f30"
                                            data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div>
                                <p>{{ $user->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="tab height-100-p">
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item">
                                            @if ($user->poleRecherches()->exists())
                                                <a class="nav-link active" data-toggle="tab" href="#pole_recherche"
                                                    role="tab">POLE DE RECHERCHE
                                                </a>
                                            @elseif ($user->equipes()->exists() || $user->equipe()->exists())
                                                <a class="nav-link active" data-toggle="tab" href="#equipe"
                                                    role="tab">EQUIPE
                                                </a>
                                            @endif

                                        </li>

                                        <!-- Equipe du pole -->
                                            @if($user->poleRecherches->isNotEmpty() && $user->poleRecherches[0]->equipes->isNotEmpty())
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#Equipes_pole"
                                                    role="tab">Equipes du pôle
                                                </a>
                                            </li>
                                            @endif
                                        <!-- END Equipe du pole -->

                                        <!-- Article -->
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">
                                                    {{ Auth::user()->id == $user->id ? 'Mes Articles' : 'Articles' }}</a>
                                            </li>
                                        <!--END Article -->


                                        <!-- Evénements -->
                                            @if ($user->evernements()->exists())
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#evenements" role="tab">
                                                        Événements</a>
                                                </li>
                                            @endif
                                        <!--END Evénements -->

                                        <!-- Projets -->
                                            @if (
                                                ($user->equipes->isNotEmpty() && $user->equipes[0]->projets()->exists()) ||
                                                    ($user->equipe->isNotEmpty() && $user->equipe[0]->projets->isNotEmpty()))
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#projets"
                                                        role="tab">Projets</a>
                                                </li>
                                            @elseif ($user->poleRecherches->isNotEmpty() && $user->poleRecherches[0]->projets->isNotEmpty())
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#projets"
                                                        role="tab">Projets</a>
                                                </li>
                                            @endif
                                        <!--END Projets -->

                                        <!-- Parametre -->
                                            @if (Auth::user()->id == $user->id)
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#setting"
                                                        role="tab">Paramètre</a>
                                                </li>
                                            @endif
                                        <!--END Parametre -->
                                    </ul>
                                    <div class="tab-content">
                                        <!-- Pole ou Equipe Tab -->
                                        @if ($user->poleRecherches()->exists())
                                            @include('admin.user.pole-recherche')
                                        @elseif ($user->equipes()->exists() || $user->equipe()->exists())
                                            @include('admin.user.equipe', [
                                                'equipes' => $user->equipes()->exists()
                                                    ? $user->equipes
                                                    : $user->equipe,
                                                'titre' => $user->equipes()->exists()
                                                    ? "Vous êtes responsable d'une Equipe"
                                                    : "Vous faites partie d'une Equipe",
                                            ])
                                        @endif
                                        <!--END Pole ou Equipe Tab -->


                                        <!-- Article Tab -->
                                            @include('admin.user.list-article')
                                        <!--END Article Tab -->

                                        <!-- Paramettre Tab -->
                                            @if (Auth::user()->id == $user->id)
                                                @include('admin.user.profil-setting')
                                            @endif
                                        <!--END Paramettre Tab -->


                                        <!-- Projet Tab -->
                                            @if (
                                                ($user->equipes->isNotEmpty() && $user->equipes[0]->projets()->exists()) ||
                                                    ($user->equipe->isNotEmpty() && $user->equipe[0]->projets->isNotEmpty()))
                                                @include('admin.user.projet', [
                                                    'projets' =>
                                                        $user->equipes->isNotEmpty() &&
                                                        $user->equipes[0]->projets()->exists()
                                                            ? $user->equipes[0]->projets
                                                            : $user->equipe[0]->projets,
                                                    'text' => null,
                                                ])
                                            @elseif ($user->poleRecherches->isNotEmpty() && $user->poleRecherches[0]->projets->isNotEmpty())
                                                @include('admin.user.projet', [
                                                    'projets' => $user->poleRecherches[0]->projets,
                                                    'text' => 'les projets de votre Pôle de recherche',
                                                ])
                                            @endif
                                        <!--END Projet Tab -->

                                        <!-- Evénements Tab -->
                                            @if ($user->evernements()->exists())
                                                @include('admin.user.evernement', [
                                                    'evenements' => $user->evernements,
                                                ])
                                            @endif
                                        <!--END Evénements Tab -->

                                        <!-- Pole Recherche projet Tab -->
                                            @if($user->poleRecherches->isNotEmpty() && $user->poleRecherches[0]->equipes->isNotEmpty())
                                                @include('admin.user.equipe_pole',
                                                [
                                                    "equipes" =>$user->poleRecherches[0]->equipes
                                                ])
                                            @endif
                                        <!--END Pole Recherche projet Tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA BANDJOUN
            </div>
        </div>
    </div>
@endsection
