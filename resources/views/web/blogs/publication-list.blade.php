@extends('web.app.app', ['page' => 7])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('asset_web/assets/img/footer_and_head.jpeg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Publications</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Publications</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <div class="container">



            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="blog-pagination category-publication-menu" id="navbar">
                        <ul class="justify-content-center">
                            @forelse ($typePublications as $typePublication)
                                @if ($typePublicationsAcuelle->id == $typePublication->id)
                                    <li class="active"><a
                                            href="{{ route('web.findByCategoryPublication', $typePublication->id) }}">{{ $typePublication->nom }}</a>
                                    </li>
                                @else
                                    <li><a
                                            href="{{ route('web.findByCategoryPublication', $typePublication->id) }}">{{ $typePublication->nom }}</a>
                                    </li>
                                @endif

                            @empty
                            @endforelse

                            {{-- <li class="active"><a href="#">2022</a></li> --}}

                        </ul>
                    </div><br>


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
                                                    <option value="{{ $annee->id }}">{{ $annee->annee_publication }}</option>
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
                                                        <option value="{{ $typePublication->id }}">{{ $typePublication->nom }}
                                                        </option>
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
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                            {{ $user->prenom }}</option>

                                                    @empty
                                                    @endforelse
                                                </optgroup>
                                            </select>
                                        </div>

                                    </div>


                                    <div class="sidebar-item search-form">
                                        <h3 class="sidebar-title">Recherche dans le titre(mots clés)</h3>
                                        <input type="text" name="titre" class="form-control">

                                        {{-- <select name="titre" id="" style="width: 100%; height: 38px;"
                                            class="form-control custom-select2" data-live-search="true">
                                            <optgroup label="titre">
                                                <option value=""></option>
                                                @forelse ($titrepublications as $titrepublication)
                                                    <option value="{{ $titrepublication }}">{{ $titrepublication }}</option>

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



                        <!-- Liste des publication pas année -->
                            <div class="col gy-8 posts-list ">
                                <strong>{{ $typePublicationsAcuelle->nom }}</strong>
                                <hr>
                                @forelse ($publications as $annee => $pubs)
                                    <br>
                                    <br>
                                    <h5><span class="bg-success text-white" style="border-radius: 5px; margin-right: 5px;">
                                            Annee : </span>{{ $annee }}</h5>
                                    <br>


                                    @forelse ($pubs as $publication)
                                        <div class="col-xl-12 d-flex " data-aos="fade-up" data-aos-delay="100">
                                            <div class="card-item d-flex card post-item position-relative h-100 ">
                                                <div class="row">
                                                    {{-- <div class="col-xl-4">
                                                        <img src=" {{ asset('storage/' . $publication->media_url) }} "
                                                            class="img-fluid" alt="">

                                                    </div> --}}
                                                    <div class="col-xl-12 d-flex align-items-center">

                                                        <div class="card-body">

                                                            <h3 class="post-title ">{{ Str::limit($publication->titre, 100, '...') }}</h3>

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


                                                            </div>
                                                            <p style="display-flex:auto;" class="px-3">
                                                                {{ Str::limit($publication->description_1, 1000, '...') }}</p>

                                                            <hr>

                                                            <a href="{{ route('web.show-publication', $publication->id) }}"
                                                                class="readmore stretched-link "><span class="btn btn-primary">
                                                                    consluter </span><i class="bi bi-arrow-right"></i></a>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><br>
                                    @empty
                                    @endforelse


                                @empty
                                    <center>
                                        <p>Aucune Information</p>
                                    </center>
                                @endforelse



                            </div>
                        <!--END Liste des publication pas année -->
                    </div>




                    <!-- End blog pagination -->

                </div>
            </section>


        </div>
    </main>
@endsection
