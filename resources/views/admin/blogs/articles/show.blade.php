@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Detaill Article</h4>
                                <h5><small><span class="badge badge-danger">Pole Recherche :</span></small> {{ $article->revue->poleRecherche->titre }}</h5><br>
                                <h5><small><span class="badge badge-success">Revue :</span></small>  {{ $article->revue->titre }}</h5>
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
                                        <img src="{{ asset('storage/' . $article->media_url) }}" alt="">
                                    </div>
                                    <h4 style="margin: 20px">{{ $article->titre }}</h4>

                                    <div style="margin: 20px">
                                        <span ><i class="icon-copy fi-calendar"> {{ $article->created_at->format("d-M-Y") }}</i></span>
                                        <span ><i class="icon-copy fa fa-user-circle" aria-hidden="true" style="margin-left: 20px;"> {{ $article->user->name }}</i></span>
                                        <span style="margin-left: 20px;"><i class="icon-copy fi-comments ">{{ count($article->commentaires) }}</i> </span>
                                        <small class="me-2" style="margin-left: 20px;">
                                            <a
                                                href="{{(Auth::user()->getRole("admin")) ? route('admin.article.isVisible', $article->id) : '#'}}">
                                                @if ($article->status)
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
                                        {!! $article->description_2 !!}
                                    </div>

                                </div>

                                 <!-- section Des commentaires -->
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="row" style="padding: 10px;">
                                        <h4 class="col-md-6">Commentaires  ({{ count($article->commentaires) }})</h4>
                                        {{-- <h4 class="col-md-6">Commentaires</h4> --}}
                                    </div>
                                    <hr>

                                    <!-- Liste des Commentaires -->
                                    <div class="col-md-12">
                                        @forelse ($article->commentaires as $commentaire)
                                        <div class="card card-box" style="margin: 10px;">
                                            <div class="card-header">
                                                {{ $commentaire->nom }}, {{ $commentaire->email }}
                                            </div>
                                            <div class="card-body">
                                                <blockquote class="blockquote mb-0">
                                                    <p>{{ $commentaire->text }}</p>
                                                    <footer class="blockquote-footer"> {{ $commentaire->created_at->format("d-M-Y") }}</footer>
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
                                    <h5 class="pd-20 h5 mb-0"><span class="badge badge-success">Auteur</span></h5>
                                    <div class="list-group">

                                        <a class="list-group-item d-flex align-items-center justify-content-between"
                                            href="#">
                                            @if ($article->user->profil_url)
                                                <img src="{{ asset('storage/'.$article->user->profil_url) }} "
                                                style="width: 70px; height: 70px;" alt="">
                                            @else
                                                <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                                style="width: 70px; height: 70px;" alt="">
                                            @endif


                                            <span class="user-name">{{ $article->user->name }}</span>
                                        </a>
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
