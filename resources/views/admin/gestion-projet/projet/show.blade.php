@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Detaill d'un Projet</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    {{-- <li class="breadcrumb-item "><label for="" class="badge badge-info">Pole De
                                            Recheche :</label><a
                                            href="{{ route('admin.poleRecherche.show', $projet->poleRecherche->id) }}">{{ $projet->poleRecherche->titre }}</a>
                                    </li> --}}
                                </ol>

                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item ">
                                        <label for="" class="badge badge-success">Titre : </label> <a>
                                            {{ $projet->titre }}</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">


                            <div class="col-md-8 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-img">
                                        <img src="{{ asset('storage/' . $projet->media_url) }}" alt="">
                                    </div>
                                    <div class="blog-caption">
                                        <small>
                                            <span class="badge badge-info">{{ $projet->date_debut }}</span>,
                                            <span class="badge badge-info">{{ $projet->date_fin }}</span>,
                                            <a
                                                href="{{ Auth::user()->getRole('admin') ? route('admin.projet.isVisible', $projet->id) : '#' }}">
                                                @if ($projet->status)
                                                    <span class="badge badge-success">
                                                        publier
                                                    </span>
                                                @else
                                                    <span class="badge badge-danger">
                                                        non-public
                                                    </span>
                                                @endif

                                            </a>
                                        </small>
                                        <h4>{{ $projet->titre }}</h4>
                                        {!! $projet->description_2 !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0"><span class="badge badge-success">Reponssable</span></h5>
                                    <div class="list-group">

                                        <a href="{{ route('admin.user.show',$projet->user->id) }}" class="list-group-item d-flex align-items-center justify-content-between"
                                            href="#">
                                            @if ($projet->user->profil_url)
                                                <img src="{{ asset('storage/'.$projet->user->profil_url) }}"
                                                style="width: 70px; height: 70px;" alt="">
                                            @else
                                                <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}"
                                                style="width: 70px; height: 70px;" alt="">
                                            @endif

                                            <span class="user-name">{{ $projet->user->name }}</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Enregistrement d'une Nouveau Equipe -->
                                @if (Auth::user()->getRole('admin'))
                                    <form action="{{ route('admin.projet.addMemnbre', $projet->id) }}" method="POST"
                                        class="card-box mb-30">

                                        @csrf
                                        <h5 class="pd-20 h5 mb-0">Ajouter un autre participant au projet</h5>
                                        <div class="list-group">

                                            <!--  Nouvelle  Participant -->
                                            <div class="form-group" style="margin: 10px">
                                                <label>Membre : </label> <span class="text-danger">*</span>
                                                <select class="custom-select2 form-control" name="user_id"
                                                    style="width: 100%; height: 38px;" required>

                                                    <optgroup label="Liste Des Equipes">
                                                        @forelse ($listMembres as $membre)
                                                            <option value="{{ $membre->id }}">{{ $membre->name }} {{ $membre->prenom }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </optgroup>
                                                </select>
                                            </div>


                                            {{-- <!--  Role de l'equipe dans le Projet -->
                                            <div class="form-group" style="margin: 20px">
                                                <label>Role : </label> <span class="text-danger">*</span>
                                                <select class="custom-select2 form-control" name="role_equipe_projet_id"
                                                    style="width: 100%; height: 38px;" required>

                                                    <optgroup label="Liste Des roles">
                                                        @forelse ($listRoleEquipeProjet as $roleEquipeProjet)
                                                            <option value="{{ $roleEquipeProjet->id }}">
                                                                {{ $roleEquipeProjet->nom }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </optgroup>
                                                </select>
                                            </div> --}}

                                            <button class=" pd-20 mb-0 btn btn-primary " style="margin: 20px"
                                                type="submit">
                                                <i class="icon-copy fi-plus"></i>
                                            </button>
                                        </div>
                                    </form>
                                @endif

                                <!-- Liste Equipes -->
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0 col-10">Participants ({{ count($projet->participants) }})</h5>
                                    <div class="latest-post">
                                        <ul>
                                            @forelse ($projet->participants as $participant)
                                                <li>
                                                    <h4><a href="{{ route('admin.user.show',$participant->id) }}">{{ $participant->name }}  {{ $participant->prenom }}</a></h4>
                                                    {{-- <span class="badge badge-info text-white">{{ app\models\RoleEquipeProjet::find($equipe->pivot->role_equipe_projet_id)->nom }}</span> --}}
                                                </li>

                                            @empty
                                                <li>
                                                    <h4>ce Projet n'as d'autre participant</h4>
                                                    {{-- <span>HTML</span> --}}
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>

                                <!-- Enregistrement d'un Nouveau Partenaire -->
                                @if (Auth::user()->getRole('admin'))
                                    <form action="{{ route('admin.projet.addPartenaire', $projet->id) }}"
                                        method="POST" class="card-box mb-30">

                                        @csrf
                                        <h5 class="pd-20 h5 mb-0">Nouveau Partenaire</h5>
                                        <div class="list-group">

                                            <!--  Nouveau Du Membre -->
                                            <div class="form-group" style="margin: 10px">
                                                <label>Partenaire : </label> <span class="text-danger">*</span>
                                                <select class="custom-select2 form-control" name="partenaire_id"
                                                    style="width: 100%; height: 38px;" required>

                                                    <optgroup label="Liste Des Partenaires">
                                                        @forelse ($listPartenaire as $partenaire)
                                                            <option value="{{ $partenaire->id }}">{{ $partenaire->nom }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <button class=" pd-20 mb-0 btn btn-primary " style="margin: 20px"
                                                type="submit">
                                                <i class="icon-copy fi-plus"></i>
                                            </button>
                                        </div>
                                    </form>
                                @endif

                                <!-- List Partenaires -->
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0 col-10">Partenaire ({{ count($projet->partenaires) }})
                                    </h5>
                                    <div class="latest-post">
                                        <ul>
                                            @forelse ($projet->partenaires as $partenaire)
                                                <li>
                                                    <h4><a href="#">{{ $partenaire->nom }}</a></h4>
                                                </li>

                                            @empty
                                                <li>
                                                    <h4>Aucun Partenaire Pour cette Evernment</h4>
                                                    {{-- <span>HTML</span> --}}
                                                </li>
                                            @endforelse
                                        </ul>
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
