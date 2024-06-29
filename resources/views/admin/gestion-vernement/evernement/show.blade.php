@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Detaill d'un Evénement</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.poleRecherche.index') }}">Pole De
                                            Recheche</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail> {{ $evernement->titre }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <h4>{{ $evernement->titre }}</h4>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-img">
                                        <img src="{{ asset('storage/' . $evernement->media_url) }}" alt="">
                                    </div>
                                    <br><small style="margin-left: 10px;"><span
                                            class="badge badge-info">{{ $evernement->date }}</span>, <span
                                            class="badge badge-info">{{ $evernement->ville }}</span>, <span
                                            class="badge badge-info">{{ $evernement->adress }}</span></small><br>
                                    <div class="blog-caption">
                                        {!! $evernement->description_2 !!}
                                    </div>
                                    <hr>
                                    <div style="margin-left: 20px; margin-bottom: 20px;">
                                        @forelse ($evernement->types as $type)
                                            <span class="badge badge-primary clo-4">{{ $type->nom }}</span>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-12">


                                <!-- Enregistrement d'un Nouveau Partenaire -->
                                @if (Auth::user()->getRole('admin'))
                                    <form action="{{ route('admin.evernement.addPartenaire', $evernement->id) }}"
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
                                <!-- Enregistrement d'un Nouveau Membre -->
                                @if (Auth::user()->getRole('admin'))
                                    <form action="{{ route('admin.evernement.addMembre', $evernement->id) }}"
                                        method="POST" class="card-box mb-30">

                                        @csrf
                                        <h5 class="pd-20 h5 mb-0">Nouveau Membre</h5>
                                        <div class="list-group">

                                            <!--  Nouveau Du Membre -->
                                            <div class="form-group" style="margin: 10px">
                                                <label>Responssable : </label> <span class="text-danger">*</span>
                                                <select class="custom-select2 form-control" name="user_id"
                                                    style="width: 100%; height: 38px;" required>

                                                    <optgroup label="Liste Des Menbres">
                                                        @forelse ($listUsers as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </optgroup>
                                                </select>
                                            </div>


                                            <!--  Role du Membre dans l'equipe -->
                                            <div class="form-group" style="margin: 20px">
                                                <label>Role : </label> <span class="text-danger">*</span>
                                                <select class="custom-select2 form-control" name="role_evernement_id"
                                                    style="width: 100%; height: 38px;" required>

                                                    <optgroup label="Liste Des roles">
                                                        @forelse ($listeRoleEvernement as $RoleEvernement)
                                                            <option value="{{ $RoleEvernement->id }}">
                                                                {{ $RoleEvernement->nom }}
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


                                <!-- Liste Membres -->
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0 col-10">Membres ({{ count($evernement->membres) }})</h5>
                                    <div class="latest-post">
                                        <ul>
                                            @forelse ($evernement->membres as $membre)
                                                <li>
                                                    <h4><a href="#">{{ $membre->name }}</a></h4>
                                                    <span
                                                        class="badge badge-info text-white">{{ app\Models\RoleEvernement::find($membre->pivot->role_evernement_id)->nom }}</span>
                                                </li>

                                            @empty
                                                <li>
                                                    <h4>cette Equipe n'as pas de membre</h4>
                                                    {{-- <span>HTML</span> --}}
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>

                                <!-- List Partenaires -->
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0 col-10">Partenaire ({{ count($evernement->partenaires) }})
                                    </h5>
                                    <div class="latest-post">
                                        <ul>
                                            @forelse ($evernement->partenaires as $partenaire)
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
