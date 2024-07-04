<div class="row gy-4 posts-list">
    <div class="section-header">
        <h2>Article ({{ count($user->articles) }})</h2>
    </div>
    
    @forelse ($user->articles as $article)
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">

                <div class="post-img position-relative overflow-hidden">
                    <img src=" {{ asset('storage/' . $article->media_url) }} " class="img-fluid" alt="">
                    <span class="post-date">{{ $article->created_at->format('d-M-Y') }}</span>
                </div>

                <div class="post-content d-flex flex-column">

                    <h3 class="post-title">{{ Str::limit($article->titre, 20, '...') }}</h3>

                    <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">{{ $article->user->name }}</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i> <span class="ps-2">{{ $article->revue->titre }}</span>
                        </div>
                    </div>

                    <hr>

                    <a href="{{ route('web.show-article', $article->id) }}" class="readmore stretched-link"><span>Read
                            More</span><i class="bi bi-arrow-right"></i></a>

                </div>

            </div>
        </div>
    @empty
        <center>
            <p>Aucune Information</p>
        </center>
    @endforelse
</div>
