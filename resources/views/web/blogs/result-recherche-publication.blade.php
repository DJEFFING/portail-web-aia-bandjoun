@extends('web.app.app', ['page' => 7])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('asset_web/assets/img/breadcrumbs-bg.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Resultat Recherche</h2>
                <ol>
                    <li><a href="{{ route('web.publications') }}">Publication</a></li>
                    <li>Resultat Recherche</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <div class="container">



            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up" data-aos-delay="100">




                    <br>
                    <div class="row g-5">

                        <!-- formulaire de recherche -->
                        <div class="col-lg-4">

                            <form method="POST" action="{{ route('web.findByCreteriad') }}" class="sidebar mt-100">
                                @csrf

                                <div class="sidebar-item search-form">
                                    <h3 class="sidebar-title">Année</h3>

                                    <div class="search_select_box">
                                        <select name="annee_id" id="" class="form-control custom-select2"
                                            style="width: 100%; height: 38px;" data-live-search="true">
                                            <option value=""></option>
                                            @forelse ($anneePublications as $annee)
                                                @if ($request->annee_id != null && $request->annee_id == $annee->id)
                                                    <option value="{{ $annee->id }}" selected>
                                                        {{ $annee->annee_publication }}</option>
                                                @else
                                                    <option value="{{ $annee->id }}">{{ $annee->annee_publication }}
                                                    </option>
                                                @endif
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>

                                </div>

                                <div class="sidebar-item search-form">
                                    <h3 class="sidebar-title">Type Document</h3>
                                    <div class="search_select_box">
                                        <select class="custom-select2 form-control" name="type_id"
                                            style="width: 100%; height: 38px;" required>
                                            <optgroup label="Type de document">
                                                <option value=""></option>

                                                @forelse ($typePublications as $typePublication)
                                                    @if ($request->type_id != null && $request->type_id == $typePublication->id)
                                                        <option value="{{ $typePublication->id }}" selected>
                                                            {{ $typePublication->nom }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $typePublication->id }}">
                                                            {{ $typePublication->nom }}
                                                        </option>
                                                    @endif

                                                @empty
                                                @endforelse

                                            </optgroup>
                                        </select>
                                    </div>

                                </div>

                                <div class="sidebar-item search-form">
                                    <h3 class="sidebar-title">Auteur</h3>

                                    <div class="search_select_box">
                                        <select name="auteur_id" id="" style="width: 100%; height: 38px;"
                                            class="form-control custom-select2" data-live-search="true">
                                            <optgroup label="Auteurs">
                                                <option value=""></option>

                                                @forelse ($users as $user)
                                                    @if ($request->auteur_id != null && $request->auteur_id == $user->id)
                                                        <option value="{{ $user->id }}" selected>{{ $user->name }}
                                                            {{ $user->prenom }}</option>
                                                    @else
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                            {{ $user->prenom }}</option>
                                                    @endif


                                                @empty
                                                @endforelse

                                            </optgroup>
                                        </select>
                                    </div>

                                </div>


                                <div class="sidebar-item search-form">
                                    <h3 class="sidebar-title">Recherche dans le titre</h3>
                                    <input type="text" name="titre" value="{{ $request->titre }}"
                                        class="form-control">
                                    {{-- <select name="titre" id="" style="width: 100%; height: 38px;"
                                        class="form-control custom-select2" data-live-search="true">
                                        <optgroup label="titre">
                                            <option value=""></option>

                                            @forelse ($titrepublications as $titrepublication)
                                                @if ($request->titre != null && $request->titre == $titrepublication)
                                                    <option value="{{ $titrepublication }}" selected>
                                                        {{ $titrepublication }}
                                                    </option>
                                                @else
                                                    <option value="{{ $titrepublication }}">{{ $titrepublication }}
                                                    </option>
                                                @endif

                                            @empty
                                            @endforelse

                                        </optgroup>
                                    </select> --}}

                                </div> <br>

                                <button type="submit" class="btn btn-primary">Recherche <i
                                        class="bi bi-search"></i></button>
                                <!-- End sidebar search formn-->

                                <!-- End sidebar categories-->

                            </form>
                            <!-- End Blog Sidebar -->

                        </div>
                        <!--END formulaire de recherche -->



                        <!-- Liste des Résultat de recherche -->
                        <div class="col gy-8 posts-list ">
                            <label for="">Resultat de Recherche :
                            </label><strong>{{ count($publications) }}</strong>
                            <a href="{{ route('web.publications') }}" class="btn btn-success">Actuliser la pages</a>
                            <hr>

                            @forelse ($publications as $publication)
                                <div class="col-xl-12 d-flex " data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-item d-flex card post-item position-relative h-100 ">
                                        <div class="row">
                                            {{-- <div class="col-xl-4">
                                                    <img src=" {{ config('global.S3_url'). $publication->media_url }} "
                                                        class="img-fluid" alt="">

                                                </div> --}}
                                            <div class="col-xl-12 d-flex align-items-center">

                                                <div class="card-body">

                                                    <h3 class="post-title">
                                                        {{ Str::limit($publication->titre, 100, '...') }}</h3>
                                                    <span
                                                        class="post-date">{{ $publication->anneePublication->annee_publication }}
                                                    </span>

                                                    <div class="meta d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-person"></i>
                                                            @forelse ($publication->users as $user)
                                                                <strong><span
                                                                        class="ps-2">{{ $user->name }}</span></strong>,
                                                            @empty
                                                            @endforelse

                                                        </div>
                                                        <span class="px-3 text-black-50">/</span>
                                                        <div class="d-flex align-items-center">

                                                            <i class="bi bi-folder2"></i> <span
                                                                class="ps-2">{{ count($publication->documents) }}
                                                                Documents</span>
                                                        </div>

                                                    </div><br>
                                                    {{-- <span class="px-3 text-black-50">/</span> --}}
                                                    <div class="d-flex align-items-center">
                                                        <span
                                                            style="background-color: #00aefe; color:white; text-align: center; width: 80px; margin-right: 10px; padding: 5px;">Categ
                                                            :
                                                        </span>
                                                        <span class="ps-2">
                                                            {{ $publication->typePublication->nom }}
                                                        </span>
                                                    </div>

                                                    <p style="display-flex:auto;" class="px-3">
                                                        {{ Str::limit($publication->description_1, 500, '...') }} <a
                                                            href="{{ route('web.show-publication', $publication->id) }}"
                                                            class="">voir+
                                                        </a>
                                                    </p>


                                                    <hr>

                                                    <div class="row">
                                                        @if ($publication->documents->isNotEmpty())
                                                            <div class="col-md-6">
                                                                <a href="{{ route('web.file_download', $publication->documents[0]) }}"
                                                                    class="readmore stretched-link "><span
                                                                        class="btn btn-primary">
                                                                        Telecharger </span><i
                                                                        class="bi bi-download"></i>
                                                                </a>
                                                            </div>
                                                        @endif

                                                        @if ($publication->lien_externe)
                                                            <div class="col-md-6">
                                                                <a href="{{ $publication->lien_externe }}"
                                                                    class="readmore stretched-link "><span
                                                                        class="btn btn-primary">
                                                                        consluter </span><i
                                                                        class="bi bi-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        @endif

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div><br>
                            @empty
                            @endforelse




                        </div>
                        <!--END Liste des Résultat de recherche -->
                    </div>




                    <!-- End blog pagination -->

                </div>
            </section>


        </div>
    </main>
@endsection
