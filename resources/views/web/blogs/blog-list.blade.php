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


                        <div class="row gy-4 posts-list col-lg-9">

                            @forelse ($articles as $article)
                                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="post-item position-relative h-100">

                                        <div class="post-img position-relative overflow-hidden">
                                            <img src=" {{ asset('storage/' . $article->media_url) }} " class="img-fluid"
                                                alt="">
                                            <span class="post-date">{{ $article->created_at->format('d-M-Y') }}</span>
                                        </div>

                                        <div class="post-content d-flex flex-column">

                                            <h3 class="post-title">{{ Str::limit($article->titre, 20, '...') }}</h3>

                                            <div class="meta d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person"></i> <span
                                                        class="ps-2">{{ $article->user->name }}</span>
                                                </div>
                                                <span class="px-3 text-black-50">/</span>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-folder2"></i> <span
                                                        class="ps-2">{{ $article->revue->titre }}</span>
                                                </div>
                                            </div>

                                            <hr>

                                            <a href="{{ route('web.show-article', $article->id) }}"
                                                class="readmore stretched-link"><span>Read More</span><i
                                                    class="bi bi-arrow-right"></i></a>

                                        </div>

                                    </div>
                                </div>
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
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                    <!-- End blog pagination -->

                </div>
            </section>


        </div>



    </main><!-- End #main -->
@endsection
