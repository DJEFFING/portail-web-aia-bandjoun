@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Articles</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">ACCEUIL</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Articles</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text " class="form-control" id="searchBar" name="search"
                        placeholder="Recherche: Titre, Auteur, Date Création, Status ">
                </div>



                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-list">
                                    <ul>
                                        @forelse ($listArticle as $article)
                                            <li class="search-card">
                                                <div class="row no-gutters">
                                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                                        <div class="blog-img">
                                                            <img src="{{config('global.S3_url').$article->media_url}}" alt="" class="bg_img">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                                        <div class="blog-caption">
                                                            <h4><a
                                                                    href="{{ route('admin.article.show', $article->id) }}">{{ $article->titre }}</a>
                                                            </h4>
                                                            <span ><i class="icon-copy fi-calendar"> {{ $article->created_at->format("d-M-Y") }}</i></span>
                                                            <span ><i class="icon-copy fa fa-user-circle" aria-hidden="true" style="margin-left: 20px;"> {{ $article->user->name }}</i></span>
                                                            <span style="margin-left: 20px;"><i class="icon-copy fi-comments ">{{ count($article->commentaires) }}</i> </span>
                                                            <div class="blog-by">
                                                                <p>{{ $article->description_1 }}</p><br>

                                                                <span class="badge badge-success">Auteur</span> :<label
                                                                    for="">{{ $article->user->name }}</label>
                                                                <div class="pt-10">

                                                                    <a href="{{ route('admin.article.show', $article->id) }}"
                                                                        class="btn btn-sm btn-outline-info me-2">
                                                                        <i class="dw dw-eye"></i>
                                                                    </a>

                                                                    @if (Auth::user()->id == $article->user_id)

                                                                        <a href="{{ route('admin.article.edit', $article->id) }}"
                                                                            class="btn btn-sm btn-outline-warning me-2">
                                                                            <i class="dw dw-edit2"></i>
                                                                        </a>

                                                                        <button class="btn btn-sm btn-outline-danger"
                                                                            data-toggle="modal"
                                                                            data-target= "{{ '#delete' . $article->id }}">
                                                                            <i class="dw dw-delete-3"></i>
                                                                        </button>
                                                                    @endif

                                                                    <small class="me-2">
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

                                                                    @include(
                                                                        'admin.global-modal.delete-modal',
                                                                        [
                                                                            'url' => route(
                                                                                'admin.article.delete',
                                                                                $article->id),
                                                                            'id' => $article->id,
                                                                        ]
                                                                    )
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0">Revues</h5>
                                    <div class="list-group">
                                        @forelse ($listRevue as $revue)
                                            <a href="#"
                                                class="list-group-item d-flex align-items-center justify-content-between">{{ $revue->titre }}
                                                <span
                                                    class="badge badge-primary badge-pill">{{ count($revue->articles) }}</span></a>
                                        @empty
                                            <a href="#"
                                                class="list-group-item d-flex align-items-center justify-content-between">Aucun
                                                Domaine de Recherche<span class="badge badge-primary badge-pill">0</span></a>
                                        @endforelse

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA-BANDJOUN
            </div>
        </div>
    </div>
@endsection
