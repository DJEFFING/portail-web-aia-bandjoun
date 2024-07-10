@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row bg-sucess text-white">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Liste Projet</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste Evénements</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text " class="form-control" id="searchBar" name="search"
                        placeholder="Recherche: Titre, Date Debut, Date Fin, Status ">
                </div>


                <div class="row clearfix">
                    @foreach ($listProjet as $projet)
                        <div class="col-sm-12 col-md-12 col-lg-4 mb-30 search-card">
                            <div class="card card-box">
                                <img class="card-img-top" src="{{ config('global.S3_url'). $projet->media_url }}"
                                    alt="Card image cap">
                                <div class="card-body">
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
                                    <h5 class="card-title weight-500">{{ $projet->titre }}</h5>
                                    <p class="card-text">{{ $projet->description_1 }}</p>

                                    <div class="row">

                                        <a href="{{ route('admin.projet.show', $projet->id) }}"
                                            class="btn btn-sm btn-outline-info me-2 col-4">
                                            <i class="dw dw-eye"></i>
                                        </a>

                                        @if (Auth::user()->getRole('Admin'))
                                            <a href="{{ route('admin.projet.edit', $projet->id) }}"
                                                class="btn btn-sm btn-outline-warning me-2 col-4 " >
                                                <i class="dw dw-edit2"></i>
                                            </a>

                                            <button class="btn btn-sm btn-outline-danger col-4" data-toggle="modal"
                                                data-target= "{{ '#delete' . $projet->id }}">
                                                <i class="dw dw-delete-3"></i>
                                            </button>

                                            @include('admin.global-modal.delete-modal', [
                                                'url' => route('admin.projet.delete', $projet->id),
                                                'id' => $projet->id,
                                            ])
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA BANDJOUN
            </div>
        </div>
    </div>
@endsection
