@extends('web.app.app', ['page' => 0])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Blog Détail</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Blog Détail</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <!-- Article Detail -->
                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{ config('global.S3_url'). $article->media_url }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{ $article->titre }}
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-details.html">{{ $article->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-details.html"><time
                                                datetime="2020-01-01">{{ $article->created_at->format('y-M-Y') }}</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-details.html"> {{ count($article->commentaires) }} Comments</a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">

                                <div id="article-content">
                                    <p>{!! $article->description_2 !!}</p>
                                </div>


                            </div><!-- End post content -->

                            <div class="meta-bottom">

                            </div>
                            <!-- End meta bottom -->

                        </article><!-- End blog post -->

                        <!-- Responsable -->
                        <div class="post-author d-flex align-items-center">

                            @if ($article->user->profil_url)
                                <img src="{{ config('global.S3_url'). $article->user->profil_url }}"
                                    class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                            @else
                                <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                    class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                            @endif

                            <div>
                                <h4>{{ $article->user->name }}</h4>
                                <div class="social-links">
                                    <a href="{{ $article->user->twiter_url }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $article->user->facebook_url }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $article->user->instagram_url }}"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    {{ $article->user->description }}
                                </p>
                            </div>
                        </div>
                        <!-- End Responsable -->

                        <!-- Section Commentaire -->
                        <div class="comments">

                            <h4 class="comments-count">{{ count($article->commentaires) }} Commentaire</h4>

                            @forelse ($article->commentaires as $commentaire)

                                <div id="comment-1" class="comment">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}" alt="">
                                        </div>
                                        <div>
                                            <h5><a href="">{{ $commentaire->nom }}</a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i>
                                                    Reply</a></h5>
                                            <time datetime="2020-01-01">{{ $commentaire->created_at->format("d-M-Y") }}</time>
                                            <p>{{ $commentaire->text }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End comment #1 -->

                            @empty
                            <center><p>Pas de commentaire...</p></center>
                            @endforelse


                            <!-- section envoie commentaire -->
                                <div class="reply-form">

                                    <h4>Leave a Reply</h4>
                                    <p>Your email address will not be published. Required fields are marked * </p>
                                    <form action="{{ route('web.create-commentaire',$article->id) }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input name="nom" type="text" class="form-control"
                                                    placeholder="Votre Nom*">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="email" type="text" class="form-control"
                                                    placeholder="Votre Email*">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <input name="site_web" type="text" class="form-control"
                                                    placeholder="Votre site Web">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <textarea name="text" class="form-control" placeholder="Votre Commentaire*"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Postez</button>

                                    </form>

                                </div>
                            <!--END section envoie commentaire -->

                        </div>
                        <!-- End Section Commentaire-->

                    </div>
                    <!--END Article Detail -->


                    <div class="col-lg-4">

                        <div class="sidebar">
                            <!-- Information Responsable -->
                            <div class="card">

                                <div class="row">
                                    @if ($article->user->profil_url)
                                        <img src="{{ config('global.S3_url'). $article->user->profil_url }}"
                                            class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                    @else
                                        <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                            class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                    @endif
                                </div>

                                <div class="card-body">
                                    <p><strong>Nom :</strong> {{ $article->user->name }}</p>
                                    <p><strong>mail :</strong> {{ $article->user->email }}</p>
                                    <p><strong>telephone :</strong> {{ $article->user->telephone }}</p>
                                    <p><strong>address :</strong> {{ $article->user->adress }}</p>
                                    <p class="card-text text-blue w-50 h-50"
                                        style="background-color: green;color:white; text-align: center">Responssable</p>
                                </div>
                            </div><br>
                            <!--END Information Responsable -->

                            <!-- Article similaire section -->
                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Article Similaire</h3>

                                <div class="mt-3">
                                    @forelse ($article->revue->articles as $articleItem)
                                        @if (!($article->id == $articleItem->id))
                                            <div class="post-item mt-3">
                                                <img src="{{ config('global.S3_url'). $articleItem->media_url }}"
                                                    alt="">
                                                <div>
                                                    <h4><a
                                                            href="{{ route('web.show-article', $articleItem->id) }}">{{ $articleItem->titre }}</a>
                                                    </h4>
                                                    <time
                                                        datetime="2020-01-01">{{ $articleItem->created_at->format('y-M-Y') }}</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        @endif
                                    @empty
                                        <p>Aucune Article similaire</p>
                                    @endforelse



                                </div>

                            </div>
                            <!--END Article similaire section -->


                        </div>
                        <!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection
