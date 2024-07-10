@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Detaill d'une equipe</h4>
                            </div>
                            <h5><small><span class="badge badge-danger">Pole Recherche :</span></small> {{ $equipe->poleRecherche->titre }}</h5><br>
                            <h5><small><span class="badge badge-success">Titre :</span></small>  {{ $equipe->titre }}</h5>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">

                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-img">
                                        <img src="{{config('global.S3_url').$equipe->media_url}}" alt="">
                                    </div>
                                    <div class="blog-caption">
                                        <h4>{{ $equipe->titre }}</h4>
                                        {!! $equipe->description_2 !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0"><span class="badge badge-success">Reponssable</span></h5>
                                    <div class="list-group">

                                        <a class="list-group-item d-flex align-items-center justify-content-between"
                                            href="{{ route('admin.user.show',$equipe->user->id) }}">
                                            @if ($equipe->user->profil_url)
                                                <img src="{{ asset(asset('storage/'.$equipe->user->profil_url)) }} "
                                                class="avatar-photo" style="width: 70px; height: 70px;" alt="">
                                            @else
                                                <img src="{{ asset(asset('asset_admin/vendors/images/photo-avatar-profil.png')) }} "
                                                class="avatar-photo" style="width: 70px; height: 70px;" alt="">
                                            @endif

                                            <span class="user-name">{{ $equipe->user->name }}</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Enregistrement d'un Nouveau Membre -->
                                    @if (Auth::user()->getRole('admin'))
                                        <form action="{{ route('admin.equipe.addMembre', $equipe->id) }}" method="POST"
                                            class="card-box mb-30">

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
                                                                <option value="{{ $user->id }}">{{ $user->name }} {{ $user->prenom }}</option>
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
                                <!--END Enregistrement d'un Nouveau Membre -->


                                <!-- Liste Membre -->
                                    <div class="card-box mb-30">
                                        <h5 class="pd-20 h5 mb-0 col-10">Membres ({{ count($equipe->menbres) }})</h5>
                                        <div class="latest-post">
                                            <ul>
                                                @forelse ($equipe->menbres as $menbre)
                                                    <li>
                                                        <h4><a href="{{ route('admin.user.show',$menbre->id) }}">{{ $menbre->name }} {{ $menbre->prenom }}</a></h4>
                                                        <span
                                                            {{-- class="badge badge-info text-white">{{ $menbre->roleEquipe[0]->nom }}</span> --}}
                                                    </li>

                                                @empty
                                                    <li>
                                                        <h4>cette Equipe n'as pas de membre</h4>

                                                    </li>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                <!-- End Liste Membre -->

                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0 col-10">Axe de Recherche ({{ count($equipe->axes) }})</h5>
                                    <div class="latest-post">
                                        <ul>
                                            @forelse ($equipe->axes as $axe)
                                                <li>
                                                    <h4><a href="{{ route('admin.axe.show',$axe->id) }}">{{ $axe->titre }} ({{ $axe->code_axe }})</a></h4>
                                                    {{-- <span
                                                        class="badge badge-info text-white">({{ count($axe->membres) }}) Membre</span> --}}
                                                </li>

                                            @empty
                                                <li>
                                                    <h4>cette Equipe n'as pas d'axe de Recherche</h4>
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
