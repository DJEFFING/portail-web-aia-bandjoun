<div class="tab-pane fade show active" id="pole_recherche" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            <div class="timeline-month">
                @if(Auth::user()->id == $user->id)
                <h5>Vous êtes responsable d'un pôle de recherche.</h5>
                @else
                <h5>Pôle de recherche.</h5>
                @endif
            </div>
            <div class="blog-list">
                <ul>
                    @forelse ($user->poleRecherches as $poleRecherches)
                    <li>
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="blog-img">
                                    <img src="{{config('global.S3_url').$poleRecherches->media_url }}" alt=""
                                        class="bg_img">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="blog-caption">
                                    <h4><a
                                            href="{{ route('admin.poleRecherche.show', $poleRecherches->id) }}">{{ $poleRecherches->titre }}</a>
                                    </h4>
                                    <div class="blog-by">
                                        <p>{{ $poleRecherches->description_1 }}</p><br>

                                        <span class="badge badge-success">Reponssable</span> :<label
                                            for="">{{ $poleRecherches->user->name }}</label>
                                        <div class="pt-10">

                                            <a href="{{ route('admin.poleRecherche.show', $poleRecherches->id) }}"
                                                class="btn btn-sm btn-outline-info me-2">
                                                <i class="dw dw-eye"></i>
                                            </a>

                                            @if (Auth::user()->getRole('Admin'))

                                                <a href="{{ route('admin.poleRecherche.edit', $poleRecherches->id) }}"
                                                    class="btn btn-sm btn-outline-warning me-2">
                                                    <i class="dw dw-edit2"></i>
                                                </a>

                                                <button class="btn btn-sm btn-outline-danger"
                                                    data-toggle="modal"
                                                    data-target= "{{ '#delete' . $poleRecherches->id }}">
                                                    <i class="dw dw-delete-3"></i>
                                                </button>
                                            @endif

                                            <small class="me-2">
                                                <a
                                                    href="{{(Auth::user()->getRole("admin")) ? route('admin.poleRecherche.isVisble', $poleRecherches->id) : '#'}}">
                                                    @if ($poleRecherches->status)
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
                                                        'admin.poleRecherche.delete',
                                                        $poleRecherches->id),
                                                    'id' => $poleRecherches->id,
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
