<div class="tab-pane fade show" id="evenements" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            <div class="task-title row align-items-center">
                <div class="col-md-8 col-sm-12">
                    <h5>Les Evénements auxquels vous participez.({{ count($evenements) }})</h5>
                </div>

            </div>

            <div class="blog-list">
                <ul>
                        @forelse ($evenements as $evenement)
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="blog-img">
                                            <img src="{{ asset('storage/' . $evenement->media_url) }}" alt=""
                                                class="bg_img">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <div class="blog-caption">
                                            <h4><a
                                                    href="{{ route('admin.equipe.show', $evenement->id) }}">{{ $evenement->titre }}</a>
                                            </h4>
                                            <div class="blog-by">
                                                <p>{{ $evenement->description_1 }}</p><br>

                                                <div class="pt-10">

                                                    <a href="{{ route('admin.evernement.show', $evenement->id) }}"
                                                        class="btn btn-sm btn-outline-info me-2">
                                                        <i class="dw dw-eye"></i>
                                                    </a>

                                                    @if (Auth::user()->getRole('Admin'))
                                                        <a href="{{ route('admin.evernement.showUpdate', $evenement->id) }}"
                                                            class="btn btn-sm btn-outline-warning me-2">
                                                            <i class="dw dw-edit2"></i>
                                                        </a>

                                                        <button class="btn btn-sm btn-outline-danger"
                                                            data-toggle="modal"
                                                            data-target= "{{ '#delete' . $evenement->id }}">
                                                            <i class="dw dw-delete-3"></i>
                                                        </button>
                                                    @endif

                                                    <small class="me-2">
                                                        <a
                                                            href="{{ Auth::user()->getRole('admin') ? route('admin.evernement.isVisble', $evenement->id) : '#' }}">
                                                            @if ($evenement->status)
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
                                                        'url' => route('admin.evernement.delete', $evenement->id),
                                                        'id' => $evenement->id,
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
