@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Detaill Publication</h4>
                                <h5><small><span class="badge badge-danger">Type de Publication :</span></small>
                                    {{ $publication->typePublication->nom }}</h5><br>
                                <h5><small><span class="badge badge-success">Année de Publication :</span></small>
                                    {{ $currentAnnee->annee_publication }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-img">
                                        <img src="{{ config('global.S3_url'). $publication->media_url }}" alt="">
                                    </div>
                                    <h4 style="margin: 20px">{{ $publication->titre }}</h4>

                                    <div style="margin: 20px">
                                        <span><i class="icon-copy fi-calendar">
                                                {{ $publication->created_at->format('d-M-Y') }}</i></span>
                                        <span style="margin-left: 20px;"><i
                                                class="icon-copy fi-comments ">{{ count($publication->commentaires) }}</i>
                                        </span>
                                        <small class="me-2" style="margin-left: 20px;">
                                            <a
                                                href="{{ Auth::user()->getRole('admin') ? route('admin.publication.isVisible', $publication->id) : '#' }}">
                                                @if ($publication->status)
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
                                    </div>

                                    <div class="blog-caption">
                                        {!! $publication->description_2 !!}
                                    </div>

                                </div>

                                <!-- section Des commentaires -->
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="row" style="padding: 10px;">
                                        <h4 class="col-md-6">Commentaires ({{ count($publication->commentaires) }})</h4>
                                        {{-- <h4 class="col-md-6">Commentaires</h4> --}}
                                    </div>
                                    <hr>

                                    <!-- Liste des Commentaires -->
                                    <div class="col-md-12">
                                        @forelse ($publication->commentaires as $commentaire)
                                            <div class="card card-box" style="margin: 10px;">
                                                <div class="card-header">
                                                    {{ $commentaire->nom }}, {{ $commentaire->email }}
                                                </div>
                                                <div class="card-body">
                                                    <blockquote class="blockquote mb-0">
                                                        <p>{{ $commentaire->text }}</p>
                                                        <footer class="blockquote-footer">
                                                            {{ $commentaire->created_at->format('d-M-Y') }}</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        @empty
                                            <p>Pas de commentaire</p>
                                        @endforelse



                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0"><span class="badge badge-success">Responsables</span></h5>
                                    <div class="list-group">

                                        @forelse ($publication->users as $user)
                                            <a class="list-group-item d-flex align-items-center justify-content-between"
                                                href="#">
                                                @if ($user->profil_url)
                                                    <img src="{{ config('global.S3_url'). $user->profil_url }} "
                                                        style="width: 70px; height: 70px;" alt="">
                                                @else
                                                    <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                                        style="width: 70px; height: 70px;" alt="">
                                                @endif


                                                <span class="user-name">{{ $user->name }}</span>

                                            </a>
                                        @empty
                                            <p>Pas de responsable</p>
                                        @endforelse

                                    </div>
                                </div>

                                <!-- Enregistrement d'un Nouveau Membre -->
                                @if (Auth::user()->getRole('admin'))
                                    <form action="{{ route('admin.publication.addAuteur', $publication->id) }}"
                                        method="POST" class="card-box mb-30">

                                        @csrf
                                        <h5 class="pd-20 h5 mb-0">Un autre responsable</h5>
                                        <div class="list-group">

                                            <!--  Nouveau Du Membre -->
                                            <div class="form-group" style="margin: 10px">
                                                <label>Responssable : </label> <span class="text-danger">*</span>
                                                <select class="custom-select2 form-control" name="user_id"
                                                    style="width: 100%; height: 38px;" required>

                                                    <optgroup label="Liste Des Menbres">
                                                        @forelse ($listUsers as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }} {{ $user->prenom }}
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
                                <!--END Enregistrement d'un Nouveau Membre -->

                                <!-- Liste Documents -->
                                    <div class="card-box mb-30">
                                        <h5 class="pd-20 h5 mb-0 col-10">Documents ({{ count($publication->documents) }})</h5>
                                        <div class="latest-post">
                                            <ul>
                                                @forelse ($publication->documents as $document)
                                                    <li>
                                                        <h4><a href="#">{{ $document->titre }}</a></h4>
                                                        <a href="{{ route('admin.publication.file_download',$document->id) }}">
                                                            <span class="badge badge-info text-white">Telecharger</span>
                                                        </a>
                                                    </li>

                                                @empty
                                                    <li>
                                                        <h4>cette publication n'as pas de documents</h4>

                                                    </li>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                <!-- End Liste Documents -->

                                <!-- Enregistrement d'un document -->
                                @if (Auth::user()->getRole('admin'))
                                    <form action="{{ route('admin.publication.addDocument', $publication->id) }}"
                                        method="POST" class="card-box mb-30" enctype="multipart/form-data">

                                        @csrf
                                        <h5 class="pd-20 h5 mb-0">Une Pièce jointe (Document)</h5>
                                        <div class="list-group">
                                            <input type="hidden" name="form" value="1" class="form-control" required>

                                            <div class="form-group" style="margin: 10px">
                                                <label>Document (.pdf): </label> <span class="text-danger">*</span>
                                                <input type="file" accept=".pdf" name="document_url" class="form-control" required>
                                            </div>


                                            <button class=" pd-20 mb-0 btn btn-primary " style="margin: 20px"
                                                type="submit">
                                                <i class="icon-copy fi-plus"></i>
                                            </button>
                                        </div>
                                    </form>
                                @endif
                                <!--END Enregistrement d'un document -->
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
