@extends('web.app.app', ['page' => 0])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Publication</h2>
                <ol>
                    <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                    <li>Publication | Détails</li>
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
                                <img src="{{ config('global.S3_url'). $publication->media_url }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $publication->titre }}
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    @forelse ($publication->users as $user)
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                            <a href="blog-details.html"><strong>{{ $user->name }}</strong></a>
                                        </li>,
                                    @empty
                                    @endforelse


                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-details.html"><time
                                                datetime="2020-01-01">{{ $annee->annee_publication }}</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-details.html"> {{ count($publication->commentaires) }} Comments</a>
                                    </li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">

                                <div id="article-content">
                                    <p>{!! $publication->description_2 !!}</p>

                                </div>
                                @if ($publication->lien_externe)
                                <a href="{{$publication->lien_externe}}" class="btn btn-primary">voir plus</a>
                                @endif


                            </div><!-- End post content -->

                            <div class="meta-bottom">

                            </div>
                            <!-- End meta bottom -->

                            <!-- documents -->
                            <div class="row">
                                <label for="" class="col-md-2" ><span class="btn btn-success">Documents</span></label>
                                @forelse ($publication->documents as $document)
                                    <a href="{{route('admin.publication.file_download',$document->id)}}" class="col-md-4">{{$document->titre}} (pdf)</a>
                                @empty

                                @endforelse

                            </div>
                            <!-- End documents -->

                        </article><!-- End blog post -->

                        <!-- Responsable -->
                        @forelse ($publication->users as $user)
                            <div class="post-author d-flex align-items-center">

                                @if ($user->profil_url)
                                    <img src="{{ config('global.S3_url'). $user->profil_url }}"
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @else
                                    <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} "
                                        class="p-3 card-img-top rounded-circle img-fluid w-50 h-100" alt="...">
                                @endif


                                <div>
                                    <h4>{{ $user->name }}</h4>
                                    <div class="social-links">
                                        <a href="{{ $user->twiter_url }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ $user->facebook_url }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ $user->instagram_url }}"><i class="biu bi-instagram"></i></a>
                                    </div>
                                    <p>
                                        {{ $user->description }}
                                    </p>
                                </div>
                            </div>
                        @empty
                        @endforelse

                        <!-- End Responsable -->

                        <!-- Section Commentaire -->
                        <div class="comments">

                            <h4 class="comments-count">{{ count($publication->commentaires) }} Commentaire</h4>

                            @forelse ($publication->commentaires as $commentaire)
                                <div id="comment-1" class="comment">
                                    <div class="d-flex">
                                        <div class="comment-img"><img
                                                src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}"
                                                alt="">
                                        </div>
                                        <div>
                                            <h5><a href="">{{ $commentaire->nom }}</a> <a href="#"
                                                    class="reply"><i class="bi bi-reply-fill"></i>
                                                    Reply</a></h5>
                                            <time
                                                datetime="2020-01-01">{{ $commentaire->created_at->format('d-M-Y') }}</time>
                                            <p>{{ $commentaire->text }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End comment #1 -->

                            @empty
                                <center>
                                    <p>Pas de commentaire...</p>
                                </center>
                            @endforelse


                            <!-- section envoie commentaire -->
                            <div class="reply-form">

                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <form action="{{ route('web.create-commentaire-publication', $publication->id) }}" method="POST">
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

                            <!--END Information Responsable -->

                            <!-- Publication similaire section -->
                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Publication Similaire</h3>

                                <div class="mt-3">
                                    @forelse ($publicationSimilaire as $publicationItem)
                                        @if (!($publication->id == $publicationItem->id))
                                            <div class="post-item mt-3">
                                                <img src="{{ config('global.S3_url'). $publicationItem->media_url }}"
                                                    alt="">
                                                <div>
                                                    <h4><a
                                                            href="{{ route('web.show-publication', $publicationItem->id) }}">{{ Str::limit($publicationItem->titre, 100, '...') }}</a>
                                                    </h4>
                                                    <time
                                                        datetime="2020-01-01">{{ $publicationItem->anneePublication->annee_publication }}</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        @else
                                            {{-- <p>Aucune Publication similaire</p> --}}
                                        @endif
                                    @empty
                                        <p>Aucune Publication similaire</p>
                                    @endforelse



                                </div>

                            </div>
                            <!--END Publication similaire section -->


                        </div>
                        <!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection
