@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20">

            <div class="row">
                <!-- count user -->
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">{{ $nbrUser }}</div>
                                <div class="weight-600 font-14">Utilisateurs</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END count user -->

                <!-- Count Equipe -->
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart2"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">{{ $nbrEquipe }}</div>
                                <div class="weight-600 font-14">Equipes</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END Count Equipe -->

                <!-- Count Projet -->
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart3"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">{{ $nbrProjet }}</div>
                                <div class="weight-600 font-14">Projets</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Count Projet -->

                <!-- Count Article -->
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart4"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">{{ $nbrArticle }}</div>
                                <div class="weight-600 font-14">Articles</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Count Article -->
            </div>

            <div class="row">
                <div class="col-xl-8 mb-30">
                    <div class="card-box height-100-p pd-20">
                        <h2 class="h4 mb-20">Fréquence de publication d'articles</h2>
                        <div id="chart5"></div>
                    </div>
                </div>

                <div class="col-xl-4 mb-30">
                    <div class="card-box height-100-p pd-20">
                        <h2 class="h4 mb-20">Revue ayant le plus d'articles</h2>
                        <div id="chart6"></div>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <h2 class="h4 pd-20">Les articles les plus récents</h2>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titre</th>
                            {{-- <th scope="col">Desciption</th> --}}
                            <th scope="col">Date Creation</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($articles as $article)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ Str::limit($article->titre, 20, '...') }}</td>
                                {{-- <td>{{Str::limit($article->description_1, 20, '...') }}</td> --}}
                                <td>{{ $article->created_at->format("d-M-Y") }}</td>

                                <td>
                                    @if ($article->user->profil_url)
                                        <img src="{{ asset('storage/' . $article->user->profil_url) }}"
                                        style="width: 50px; height: 50px;" alt=""><br>
                                    @else
                                        <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}"
                                            style="width: 50px; height: 50px;" alt=""><br>
                                    @endif
                                    <span>{{ $article->user->name }}</span>

                                </td>

                                <td>
                                    <a href="{{ Auth::user()->getRole('admin') ? route('admin.article.isVisible', $article->id) : '#' }}"><span
                                            class="{{ $article->status ? 'badge badge-success' : 'badge badge-danger' }}">{{ $article->status ? 'public' : 'non-public' }}
                                        </span>
                                    </a>
                                </td>

                                <td> <a href="{{ route('admin.article.show',$article->id) }}" class="btn btn-sm btn-outline-info me-2">
                                        <i class="dw dw-eye"></i>
                                    </a>

                                    @if (Auth::user()->id == $article->user->id)
                                        <a href="{{ route('admin.article.showUpdate',$article->id) }}" class="btn btn-sm btn-outline-warning me-2">
                                            <i class="dw dw-edit2"></i>
                                        </a>
                                    @endif
                                </td>

                            </tr>

                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA BANJOUN
            </div>
        </div>
    </div>
@endsection
