@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Equipes</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">ACCEUIL</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Equipes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text " class="form-control" id="searchBar" name="search"
                    placeholder="Recherche: Titre, Responsable, Status ">
                </div>

                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-list">
                                    <ul>
                                        @forelse ($equipes as $equipe)
                                            <li class="search-card">
                                                <div class="row no-gutters">
                                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                                        <div class="blog-img">
                                                            {{-- <img src="{{ Storage::url($equipe->media_url)}}" alt="" class="bg_img"> --}}
                                                            <img src="{{asset('storage/'.$equipe->media_url)}}" alt="" class="bg_img">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                                        <div class="blog-caption">
                                                            <h4><a
                                                                    href="{{ route('admin.equipe.show', $equipe->id) }}">{{ $equipe->titre }}</a>
                                                            </h4>
                                                            <div class="blog-by">
                                                                <p>{{ $equipe->description_1 }}</p><br>

                                                                <span class="badge badge-success">Reponssable</span> :<label
                                                                    for="">{{ $equipe->user->name }}</label>
                                                                <div class="pt-10">

                                                                    <a href="{{ route('admin.equipe.show', $equipe->id) }}"
                                                                        class="btn btn-sm btn-outline-info me-2">
                                                                        <i class="dw dw-eye"></i>
                                                                    </a>

                                                                    @if (Auth::user()->getRole('Admin'))

                                                                        <a href="{{ route('admin.equipe.showUpdate', $equipe->id) }}"
                                                                            class="btn btn-sm btn-outline-warning me-2">
                                                                            <i class="dw dw-edit2"></i>
                                                                        </a>

                                                                        <button class="btn btn-sm btn-outline-danger"
                                                                            data-toggle="modal"
                                                                            data-target= "{{ '#delete' . $equipe->id }}">
                                                                            <i class="dw dw-delete-3"></i>
                                                                        </button>
                                                                    @endif

                                                                    <small class="me-2">
                                                                        <a
                                                                            href="{{(Auth::user()->getRole("admin")) ? route('admin.equipe.isVisble', $equipe->id) : '#'}}">
                                                                            @if ($equipe->status)
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
                                                                                'admin.equipe.delete',
                                                                                $equipe->id),
                                                                            'id' => $equipe->id,
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
									<h5 class="pd-20 h5 mb-0">pôles de recherche</h5>
									<div class="list-group">
                                        @forelse ($poleRecherches as $poleRecherche)
                                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">{{ $poleRecherche->titre }} <span class="badge badge-primary badge-pill">{{ count($poleRecherche->equipes) }}</span></a>
                                        @empty
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">Aucun pôles de recherche<span class="badge badge-primary badge-pill">0</span></a>
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
