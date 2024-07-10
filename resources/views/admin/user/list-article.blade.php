<div class="tab-pane fade " id="tasks" role="tabpanel">
    <div class="pd-20 profile-task-wrap">
        <div class="container pd-0">
            <!-- Open Task start -->

            <div class="task-title row align-items-center">
                <div class="col-md-8 col-sm-12">
                    <h5>Liste Article ({{ count($user->articles) }})</h5>
                </div>
                @if(Auth::user()->id == $user->id)
                    <div class="col-md-4 col-sm-12 text-right">
                        <a href="{{ route('admin.article.create') }}"
                            class="bg-light-blue btn text-blue weight-500"><i
                                class="ion-plus-round"></i> Add</a>
                    </div>
                @endif
            </div>

            <div class="blog-list">
                <ul>
                    @forelse ($user->articles()->latest()->get() as $article)
                    <li>
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="blog-img">
                                    <img src="{{config('global.S3_url').$article->media_url}}" alt="" class="bg_img">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="blog-caption">
                                    <h4><a
                                            href="{{ route('admin.article.show', $article->id) }}">{{ $article->titre }}</a>
                                    </h4>
                                    <span ><i class="icon-copy fi-calendar"> {{ $article->created_at->format("d-M-Y") }}</i></span>
                                    <span ><i class="icon-copy fa fa-user-circle" aria-hidden="true" style="margin-left: 20px;"> {{ $article->user->name }}</i></span>
                                    <span style="margin-left: 20px;"><i class="icon-copy fi-comments ">{{ count($article->commentaires) }}</i> </span>
                                    <div class="blog-by">
                                        <p>{{ $article->description_1 }}</p><br>

                                        <span class="badge badge-success">Auteur</span> :<label
                                            for="">{{ $article->user->name }}</label>
                                        <div class="pt-10">

                                            <a href="{{ route('admin.article.show', $article->id) }}"
                                                class="btn btn-sm btn-outline-info me-2">
                                                <i class="dw dw-eye"></i>
                                            </a>

                                            @if (Auth::user()->id == $article->user_id)

                                                <a href="{{ route('admin.article.edit', $article->id) }}"
                                                    class="btn btn-sm btn-outline-warning me-2">
                                                    <i class="dw dw-edit2"></i>
                                                </a>

                                                <button class="btn btn-sm btn-outline-danger"
                                                    data-toggle="modal"
                                                    data-target= "{{ '#delete' . $article->id }}">
                                                    <i class="dw dw-delete-3"></i>
                                                </button>
                                            @endif

                                            <small class="me-2">
                                                <a
                                                    href="{{(Auth::user()->getRole("admin")) ? route('admin.article.isVisible', $article->id) : '#'}}">
                                                    @if ($article->status)
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

                                            @include(
                                                'admin.global-modal.delete-modal',
                                                [
                                                    'url' => route(
                                                        'admin.article.delete',
                                                        $article->id),
                                                    'id' => $article->id,
                                                ]
                                            )
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @empty
                    @endforelse
                </ul>
            </div>

        </div>
    </div>
</div>
