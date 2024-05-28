@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Pole De Recherche</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">ACCEUIL</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pole De Recherche</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-list">
                                    <ul>
                                        @forelse ($listPoles as $listPole)
                                            <li>
                                                <div class="row no-gutters">
                                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                                        <div class="blog-img">
                                                            <img src="{{ $listPole->media_url }}" alt=""
                                                                class="bg_img">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                                        <div class="blog-caption">
                                                            <h4><a
                                                                    href="{{ route('admin.poleRecherche.show', $listPole->id) }}">{{ $listPole->titre }}</a>
                                                            </h4>
                                                            <div class="blog-by">
                                                                <p>{{ $listPole->description_1 }}</p><br>

                                                                <span class="badge badge-success">Reponssable</span> :<label
                                                                    for="">{{ $listPole->user->name }}</label>
                                                                <div class="pt-10">
                                                                    <a href="{{ route('admin.poleRecherche.show', $listPole->id) }}"
                                                                        class="btn btn-sm btn-outline-info me-2">
                                                                        <i class="dw dw-eye"></i>
                                                                    </a>
                                                                    <a href="{{ route('admin.poleRecherche.showUpdate', $listPole->id) }}"
                                                                        class="btn btn-sm btn-outline-warning me-2">
                                                                        <i class="dw dw-edit2"></i>
                                                                    </a>
                                                                    <button class="btn btn-sm btn-outline-danger"
                                                                        data-toggle="modal" data-target= "{{ '#delete'.$listPole->id }}">
                                                                        <i class="dw dw-delete-3"></i>
                                                                    </button>
                                                                    <small class="me-2">
                                                                        <a href="{{ route('admin.poleRecherche.isVisble', $listPole->id) }}">
                                                                            @if ($listPole->status)
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

                                                                    @include('admin.global-modal.delete-modal',["url" => route('admin.poleRecherche.delete', $listPole->id),"id"=>$listPole->id])
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
