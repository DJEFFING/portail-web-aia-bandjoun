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
                    @forelse ($listUserRespPole as $user)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 search-card">
                            <div class="pd-20 card-box height-100-p">
                                @if ($user->profil_url != null)
                                    <div class="profile-photo" style="margin-bottom: 50px;">
                                        @if (Auth::user()->getRole('Admin'))
                                            <a href="modal" data-toggle="modal" data-target="#{{ 'update' . $user->id }}"
                                                class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                        @endif
                                        <img src="{{ asset('storage/' . $user->profil_url) }}" alt=""
                                            class="avatar-photo">
                                    </div>
                                @else
                                    <div class="profile-photo" style="margin-bottom: 50px;">
                                        @if (Auth::user()->getRole('Admin'))
                                            <a href="modal" data-toggle="modal" data-target="#{{ 'update' . $user->id }}"
                                                class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                        @endif
                                        <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}"
                                            alt="" class="avatar-photo">
                                    </div>
                                @endif

                                <h5 class="text-center h5 mb-0">
                                    {{ $user->name }}
                                    @if ($user->getRole('admin'))
                                        <span class="badge badge-danger">Admin</span>
                                    @endif
                                </h5>
                                <br>
                                <center>
                                    <p><span class="badge badge-success">Pôle de Recherche</span></p>
                                </center>

                                <p class="text-center text-muted font-14">
                                    <strong>
                                        <span class="badge badge-warning text-white">Resp</span> :
                                        {{ $user->poleRecherches[0]->titre }}
                                    </strong>
                                </p>
                                <a href="{{ route('admin.user.show', $user->id) }}">
                                    <div class="profile-info">
                                        <h5 class="mb-20 h5 text-blue">Contact </h5>
                                        <ul>
                                            <li>
                                                <span>Email :</span>
                                                {{ $user->email }}
                                            </li>
                                            <li>
                                                <span>Telephone :</span>
                                                {{ $user->telephone }}
                                            </li>
                                            <li>
                                                <span>Fonction :</span>
                                                <span
                                                    class="badge badge-primary  text-white">{{ $user->fonction->nom }}</span>
                                            </li>
                                            <li>
                                                <span>Address:</span>
                                                {{ $user->adress }}
                                            </li>

                                            <li>
                                                <span>Grade:</span>
                                                {{ $user->grade }}
                                            </li>

                                            <li>
                                                <span>Lieu de Travail:</span>
                                                {{ $user->lieu_travail }}
                                            </li>

                                        </ul>
                                    </div>
                                </a>
                                <div class="profile-social">
                                    <h5 class="mb-20 h5 text-blue">Lien Social</h5>
                                    <ul class="clearfix">
                                        <li><a href="{{ $user->facebook_url }}" class="btn" data-bgcolor="#3b5998"
                                                data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $user->twiter_url }}" class="btn" data-bgcolor="#1da1f2"
                                                data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $user->linkdin_url }}" class="btn" data-bgcolor="#007bb5"
                                                data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="{{ $user->instagram_url }}" class="btn" data-bgcolor="#f46f30"
                                                data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{ $user->web_url }}" class="btn" data-bgcolor="#c32361"
                                                data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        @include('admin.user.gestion-user.update', ['id' => $user->id, 'item' => $user])
                    @empty
                    @endforelse
                    <!-- List Des Responssable de pôles de recherche -->


                    <!-- List Des Responssable d'equipe-->
                    @forelse ($listUserRespEquipe as $user)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 search-card">
                            <div class="pd-20 card-box height-100-p">
                                @if ($user->profil_url != null)
                                    <div class="profile-photo" style="margin-bottom: 50px;">
                                        @if (Auth::user()->getRole('Admin'))
                                            <a href="modal" data-toggle="modal" data-target="#{{ 'update' . $user->id }}"
                                                class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                        @endif
                                        <img src="{{ asset('storage/' . $user->profil_url) }}" alt=""
                                            class="avatar-photo">
                                    </div>
                                @else
                                    <div class="profile-photo">
                                        @if (Auth::user()->getRole('Admin'))
                                            <a href="modal" data-toggle="modal" data-target="#{{ 'update' . $user->id }}"
                                                class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                        @endif
                                        <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}"
                                            alt="" class="avatar-photo">
                                    </div>
                                @endif

                                <h5 class="text-center h5 mb-0">
                                    {{ $user->name }}
                                    @if ($user->getRole('admin'))
                                        <span class="badge badge-danger">Admin</span>
                                    @endif
                                </h5>
                                <br>

                                <center>
                                    <p><span class="badge badge-info">Equipe</span></p>
                                </center>

                                <p class="text-center text-muted font-14">
                                    <strong>
                                        <span class="badge badge-warning text-white">Resp</span> :
                                        {{ $user->equipes[0]->titre }}
                                    </strong>
                                </p>

                                <a href="{{ route('admin.user.show', $user->id) }}">
                                    <div class="profile-info">
                                        <h5 class="mb-20 h5 text-blue">Contact </h5>
                                        <ul>
                                            <li>
                                                <span>Email :</span>
                                                {{ $user->email }}
                                            </li>
                                            <li>
                                                <span>Telephone :</span>
                                                {{ $user->telephone }}
                                            </li>
                                            <li>
                                                <span>Fonction :</span>
                                                <span
                                                    class="badge badge-primary  text-white">{{ $user->fonction->nom }}</span>
                                            </li>
                                            <li>
                                                <span>Address:</span>
                                                {{ $user->adress }}
                                            </li>

                                            <li>
                                                <span>Grade:</span>
                                                {{ $user->grade }}
                                            </li>

                                            <li>
                                                <span>Lieu de Travail:</span>
                                                {{ $user->lieu_travail }}
                                            </li>

                                        </ul>
                                    </div>
                                </a>

                                <div class="profile-social">
                                    <h5 class="mb-20 h5 text-blue">Lien Social</h5>
                                    <ul class="clearfix">
                                        <li><a href="{{ $user->facebook_url }}" class="btn" data-bgcolor="#3b5998"
                                                data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $user->twiter_url }}" class="btn" data-bgcolor="#1da1f2"
                                                data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $user->linkdin_url }}" class="btn" data-bgcolor="#007bb5"
                                                data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="{{ $user->instagram_url }}" class="btn" data-bgcolor="#f46f30"
                                                data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{ $user->web_url }}" class="btn" data-bgcolor="#c32361"
                                                data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        @include('admin.user.gestion-user.update', ['id' => $user->id, 'item' => $user])
                    @empty
                    @endforelse
                    <!--END List Des Responssable d'equipe-->


                    <!-- Liste Membres Equipe-->
                    @forelse ($listMenbreEquipeUser as $user)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 search-card">
                            <div class="pd-20 card-box height-100-p ">

                                @if ($user->profil_url != null)
                                    <div class="profile-photo" style="margin-bottom: 50px;">
                                        @if (Auth::user()->getRole('Admin'))
                                            <a href="modal" data-toggle="modal"
                                                data-target="#{{ 'update' . $user->id }}" class="edit-avatar"><i
                                                    class="fa fa-pencil"></i></a>
                                        @endif
                                        <img src="{{ asset('storage/' . $user->profil_url) }}" alt=""
                                            class="avatar-photo">
                                    </div>
                                @else
                                    <div class="profile-photo">
                                        @if (Auth::user()->getRole('Admin'))
                                            <a href="modal" data-toggle="modal"
                                                data-target="#{{ 'update' . $user->id }}" class="edit-avatar"><i
                                                    class="fa fa-pencil"></i></a>
                                        @endif
                                        <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}"
                                            alt="" class="avatar-photo">
                                    </div>
                                @endif

                                <h5 class="text-center h5 mb-0">
                                    {{ $user->name }}
                                    @if ($user->getRole('admin'))
                                        <span class="badge badge-danger">Admin</span>
                                    @endif
                                </h5>
                                <br>

                                <center>
                                    <p><span class="badge badge-secondary">Membre Equipe</span></p>
                                </center>

                                <p class="text-center text-muted font-14">
                                    <strong> {{ $user->equipe[0]->titre }} </strong>
                                </p>
                                <a href="{{ route('admin.user.show', $user->id) }}">
                                    <div class="profile-info">
                                        <h5 class="mb-20 h5 text-blue">Contact </h5>
                                        <ul>
                                            <li>
                                                <span>Email :</span>
                                                {{ $user->email }}
                                            </li>
                                            <li>
                                                <span>Telephone :</span>
                                                {{ $user->telephone }}
                                            </li>
                                            <li>
                                                <span>Fonction :</span>
                                                <span
                                                    class="badge badge-primary  text-white">{{ $user->fonction->nom }}</span>
                                            </li>
                                            <li>
                                                <span>Address:</span>
                                                {{ $user->adress }}
                                            </li>

                                            <li>
                                                <span>Grade:</span>
                                                {{ $user->grade }}
                                            </li>

                                            <li>
                                                <span>Lieu de Travail:</span>
                                                {{ $user->lieu_travail }}
                                            </li>

                                        </ul>
                                    </div>
                                </a>
                                <div class="profile-social">
                                    <h5 class="mb-20 h5 text-blue">Lien Social</h5>
                                    <ul class="clearfix">
                                        <li><a href="{{ $user->facebook_url }}" class="btn" data-bgcolor="#3b5998"
                                                data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $user->twiter_url }}" class="btn" data-bgcolor="#1da1f2"
                                                data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $user->linkdin_url }}" class="btn" data-bgcolor="#007bb5"
                                                data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="{{ $user->instagram_url }}" class="btn" data-bgcolor="#f46f30"
                                                data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{ $user->web_url }}" class="btn" data-bgcolor="#c32361"
                                                data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        @include('admin.user.gestion-user.update', ['id' => $user->id, 'item' => $user])
                    @empty
                    @endforelse
                    <!--END Liste Membres Equipe-->

                    <!-- Liste Membres qui ne sont pas dans un pole ou dans une equipe de recherche-->
                        @forelse ($userListe as $user)
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 search-card">
                                <div class="pd-20 card-box height-100-p ">

                                    @if ($user->profil_url != null)
                                        <div class="profile-photo" style="margin-bottom: 50px;">
                                            @if (Auth::user()->getRole('Admin'))
                                                <a href="modal" data-toggle="modal"
                                                    data-target="#{{ 'update' . $user->id }}" class="edit-avatar"><i
                                                        class="fa fa-pencil"></i></a>
                                            @endif
                                            <img src="{{ asset('storage/' . $user->profil_url) }}" alt=""
                                                class="avatar-photo">
                                        </div>
                                    @else
                                        <div class="profile-photo">
                                            @if (Auth::user()->getRole('Admin'))
                                                <a href="modal" data-toggle="modal"
                                                    data-target="#{{ 'update' . $user->id }}" class="edit-avatar"><i
                                                        class="fa fa-pencil"></i></a>
                                            @endif
                                            <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}"
                                                alt="" class="avatar-photo">
                                        </div>
                                    @endif

                                    <h5 class="text-center h5 mb-0">
                                        {{ $user->name }}
                                        @if ($user->getRole('admin'))
                                            <span class="badge badge-danger">Admin</span>
                                        @endif
                                    </h5>
                                    <br>

                                    <center>
                                        <p><span class="badge badge-secondary">-</span></p>
                                    </center>

                                    <p class="text-center text-muted font-14">
                                        <strong> - </strong>
                                    </p>
                                    <a href="{{ route('admin.user.show', $user->id) }}">
                                        <div class="profile-info">
                                            <h5 class="mb-20 h5 text-blue">Contact </h5>
                                            <ul>
                                                <li>
                                                    <span>Email :</span>
                                                    {{ $user->email }}
                                                </li>
                                                <li>
                                                    <span>Telephone :</span>
                                                    {{ $user->telephone }}
                                                </li>
                                                <li>
                                                    <span>Fonction :</span>
                                                    <span
                                                        class="badge badge-primary  text-white">{{ $user->fonction->nom }}</span>
                                                </li>
                                                <li>
                                                    <span>Address:</span>
                                                    {{ $user->adress }}
                                                </li>

                                                <li>
                                                    <span>Grade:</span>
                                                    {{ $user->grade }}
                                                </li>

                                                <li>
                                                    <span>Lieu de Travail:</span>
                                                    {{ $user->lieu_travail }}
                                                </li>

                                            </ul>
                                        </div>
                                    </a>
                                    <div class="profile-social">
                                        <h5 class="mb-20 h5 text-blue">Lien Social</h5>
                                        <ul class="clearfix">
                                            <li><a href="{{ $user->facebook_url }}" class="btn" data-bgcolor="#3b5998"
                                                    data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{ $user->twiter_url }}" class="btn" data-bgcolor="#1da1f2"
                                                    data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{ $user->linkdin_url }}" class="btn" data-bgcolor="#007bb5"
                                                    data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="{{ $user->instagram_url }}" class="btn" data-bgcolor="#f46f30"
                                                    data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="{{ $user->web_url }}" class="btn" data-bgcolor="#c32361"
                                                    data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            @include('admin.user.gestion-user.update', ['id' => $user->id, 'item' => $user])
                        @empty
                        @endforelse
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
