<div class="tab-pane fade show" id="projets" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            <div class="task-title row align-items-center">
                <div class="col-md-8 col-sm-12">
                    @if(Auth::user()->id == $user->id)
                        {{-- <h5>Les Projets de votre Equipe ({{ count($projets) }})</h5> --}}
                    <h5>{{ ($text==null) ? "Les Projets votre équipe (".count($projets).")" : $text ."(".count($projets).")" }}</h5>
                    @else
                    {{-- <h5>Les Projets l'équipe ({{ count($projets) }})</h5> --}}
                    <h5>{{ (!$text) ? "Les Projets l'équipe (".count($projets).")" : "Les projets du Pôle de Recherche (".count($projets).")"}}</h5>
                    @endif
                </div>

            </div>

            <div class="blog-list">
                <ul>
                        @forelse ($projets as $projet)
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="blog-img">
                                            <img src="{{ config('global.S3_url'). $projet->media_url }}" alt=""
                                                class="bg_img">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <div class="blog-caption">
                                            <h4><a
                                                    href="{{ route('admin.equipe.show', $projet->id) }}">{{ $projet->titre }}</a>
                                            </h4>
                                            <div class="blog-by">
                                                <p>{{ $projet->description_1 }}</p><br>

                                                <span class="badge badge-success">Reponssable</span> :<label
                                                    for="">{{ $projet->user->name }}</label>
                                                <div class="pt-10">

                                                    <a href="{{ route('admin.projet.show', $projet->id) }}"
                                                        class="btn btn-sm btn-outline-info me-2">
                                                        <i class="dw dw-eye"></i>
                                                    </a>

                                                    @if (Auth::user()->getRole('Admin'))
                                                        <a href="{{ route('admin.projet.edit', $projet->id) }}"
                                                            class="btn btn-sm btn-outline-warning me-2">
                                                            <i class="dw dw-edit2"></i>
                                                        </a>

                                                        <button class="btn btn-sm btn-outline-danger"
                                                            data-toggle="modal"
                                                            data-target= "{{ '#delete' . $projet->id }}">
                                                            <i class="dw dw-delete-3"></i>
                                                        </button>
                                                    @endif

                                                    <small class="me-2">
                                                        <a
                                                            href="{{ Auth::user()->getRole('admin') ? route('admin.projet.isVisible', $projet->id) : '#' }}">
                                                            @if ($projet->status)
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

                                                    @include('admin.global-modal.delete-modal', [
                                                        'url' => route('admin.projet.delete', $projet->id),
                                                        'id' => $projet->id,
                                                    ])
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
