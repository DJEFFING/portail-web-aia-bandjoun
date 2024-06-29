<div class="tab-pane fade show active" id="axe_recherche" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            <div class="timeline-month">
                @if(Auth::user()->id == $user->id)
                    <h5>{{ $titre }}</h5>
                @else
                <h5>Axe de Recherche</h5>
                @endif
            </div>
            <div class="blog-list">
                <ul>
                    @forelse ( $axes as $axe)
                    <li>
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="blog-img">
                                    <img src="{{asset('storage/'.$axe->media_url)}}" alt="" class="bg_img">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="blog-caption">
                                    <h4><a
                                            href="{{ route('admin.axe.show', $axe->id) }}">{{ $axe->titre }}</a>
                                    </h4>
                                    <div class="blog-by">
                                        <p>{{ $axe->description_1 }}</p><br>

                                        <span class="badge badge-success">Reponssable</span> :<label
                                            for="">{{ $axe->user->name }}</label>
                                        <div class="pt-10">

                                            <a href="{{ route('admin.axe.show', $axe->id) }}"
                                                class="btn btn-sm btn-outline-info me-2">
                                                <i class="dw dw-eye"></i>
                                            </a>

                                            @if (Auth::user()->getRole('Admin'))

                                                <a href="{{ route('admin.axe.edit', $axe->id) }}"
                                                    class="btn btn-sm btn-outline-warning me-2">
                                                    <i class="dw dw-edit2"></i>
                                                </a>

                                                <button class="btn btn-sm btn-outline-danger"
                                                    data-toggle="modal"
                                                    data-target= "{{ '#delete' . $axe->id }}">
                                                    <i class="dw dw-delete-3"></i>
                                                </button>
                                            @endif

                                            <small class="me-2">
                                                <a
                                                    href="{{(Auth::user()->getRole("admin")) ? route('admin.axe.isVisble', $axe->id) : '#'}}">
                                                    @if ($axe->status)
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
                                                        'admin.axe.delete',
                                                     $axe->id),
                                                    'id' => $axe->id,
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
