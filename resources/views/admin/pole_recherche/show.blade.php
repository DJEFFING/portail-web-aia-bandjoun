@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Detaill d'un Pole de recherche</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.poleRecherche.index') }}">Pole De
                                            Recheche</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail> {{  $poleRecherche->titre }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <h4>{{  $poleRecherche->titre }}</h4>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-img">
                                        <img src="{{ $poleRecherche->media_url }}" alt="">
                                    </div>
                                    <div class="blog-caption">
                                        {!! $poleRecherche->description_2 !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0"><span class="badge badge-success">Reponssable</span></h5>
                                    <div class="list-group">

                                        <a class="list-group-item d-flex align-items-center justify-content-between" href="#">
                                            <img src="{{ asset('asset_admin/vendors/images/photo1.jpg') }} " style="width: 70px; height: 70px;" alt="">
                                            <span class="user-name">{{$poleRecherche->user->name}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-box mb-30">
                                    <h5 class="pd-20 h5 mb-0">Equipes ({{ count($poleRecherche->equipes) }})</h5>
                                    <div class="latest-post">
                                        <ul>
                                            @forelse ($poleRecherche->equipes as $equipe)

                                            <li>
                                                <h4><a href="#">Ut enim ad minim veniam, quis nostrud exercitation
                                                        ullamco</a></h4>
                                                <span>HTML</span>
                                            </li>

                                            @empty
                                            <li>
                                                <h4>Ce Pole n'as pas d'equipe</h4>
                                                {{-- <span>HTML</span> --}}
                                            </li>
                                            @endforelse
                                    </div>
                                </div>
                                {{-- <div class="card-box overflow-hidden">
                                    <h5 class="pd-20 h5 mb-0">Archives</h5>
                                    <div class="list-group">
                                        <a href="#"
                                            class="list-group-item d-flex align-items-center justify-content-between">January
                                            2020</a>
                                        <a href="#"
                                            class="list-group-item d-flex align-items-center justify-content-between">February
                                            2020</a>
                                        <a href="#"
                                            class="list-group-item d-flex align-items-center justify-content-between">March
                                            2020</a>
                                        <a href="#"
                                            class="list-group-item d-flex align-items-center justify-content-between">April
                                            2020</a>
                                        <a href="#"
                                            class="list-group-item d-flex align-items-center justify-content-between">May
                                            2020</a>
                                    </div>
                                </div> --}}
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
