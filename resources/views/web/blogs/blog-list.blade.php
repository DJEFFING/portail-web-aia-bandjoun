@extends('web.app.app', ['page' => 7])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('asset_web/assets/img/breadcrumbs-bg.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>List Publication</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>List Publication</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <div class="container">



            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-5">

                        <div class="col-lg-3">

                            <div class="sidebar">

                                <div class="sidebar-item search-form">
                                    <h3 class="sidebar-title">Recherche</h3>
                                    <form action="" class="mt-3">
                                        <input type="text">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>

                                <div class="sidebar-item search-form search_select_box">
                                    <h3 class="sidebar-title">Recherche</h3>
                                    {{-- <form action="" class="mt-3">
                                        <input type="text">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form> --}}
                                    <select name="" id="">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <!-- End sidebar search formn-->

                                <div class="sidebar-item categories">
                                    <h3 class="sidebar-title">Revue</h3>
                                    <ul class="mt-3">
                                        @forelse ($revues as $revue)
                                            <li><a href="#">{{ $revue->titre }}
                                                    <span>({{ count($revue->articles) }})</span></a></li>
                                        @empty
                                            <p>Pas de revue</p>
                                        @endforelse

                                    </ul>
                                </div>
                                <!-- End sidebar categories-->

                            </div>
                            <!-- End Blog Sidebar -->

                        </div>


                        <div class="col gy-4 posts-list ">
                        <strong>{{$anneeActuelle->annee_publication}}</strong>
<hr>
                            @forelse ($anneeActuelle->publications as $publication)
                                <br>
                                <div class="col-xl-8 d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-item post-item position-relative h-100 ">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <img src=" {{ asset('storage/' . $publication->media_url) }} " class="img-fluid"
                                                    alt="">

                                            </div>
                                            <div class="col-xl-7 d-flex align-items-center">

                                                <div class="card-body">

                                                    <h3 class="post-title">{{ $publication->titre }}</h3>
                                                    {{-- <span
                                                        class="post-date">{{ $publication->created_at->format('d-M-Y') }}</span> --}}
                                                    <div class="meta d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-person"></i>
                                                            @forelse ($publication->users as $user)
                                                             <strong><span
                                                                class="ps-2">{{$user->name }}</span></strong>,
                                                            @empty

                                                            @endforelse

                                                        </div>
                                                        <span class="px-3 text-black-50">/</span>
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-folder2"></i> <span
                                                                class="ps-2">{{ $publication->typePublication->titre }}</span>
                                                        </div>


                                                    </div>
                                                    <p style="display-flex:auto;" class="px-3">
                                                        {{ $publication->description_1 }}</p>

                                                    <hr>

                                                    <a href="{{ route('web.show-publication', $publication->id) }}"
                                                        class="readmore stretched-link"><span>Read More</span><i
                                                            class="bi bi-arrow-right"></i></a>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div><br>


                            @empty
                                <center>
                                    <p>Aucune Information</p>
                                </center>
                            @endforelse



                        </div>
                        <!-- End blog posts list -->
                    </div>



                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            @forelse ($anneePublications as $anneePublication)
                            @if ($anneeActuelle->id ==  $anneePublication->id)
                            <li class="active"><a href="{{route('web.findByAnnee',$anneePublication->id)}}" >{{ $anneePublication->annee_publication }}</a></li>
                            @else
                            <li><a href="{{route('web.findByAnnee',$anneePublication->id)}}" >{{ $anneePublication->annee_publication }}</a></li>

                            @endif

                            @empty

                            @endforelse

                            {{-- <li class="active"><a href="#">2022</a></li> --}}

                        </ul>
                    </div>
                    <!-- End blog pagination -->

                </div>
            </section>


        </div>



    </main><!-- End #main -->
@endsection
