@forelse ($listUserRespAxe as $user)
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 search-card">
        <div class="pd-20 card-box height-100-p ">

            @if ($user->profil_url != null)
                <div class="profile-photo" style="margin-bottom: 50px;">
                    @if (Auth::user()->getRole('Admin'))
                        <a href="modal" data-toggle="modal" data-target="#{{ 'update' . $user->id }}"
                            class="edit-avatar"><i class="fa fa-pencil"></i></a>
                    @endif
                    <img src="{{ asset('storage/' . $user->profil_url) }}" alt="" class="avatar-photo">
                </div>
            @else
                <div class="profile-photo">
                    @if (Auth::user()->getRole('Admin'))
                        <a href="modal" data-toggle="modal" data-target="#{{ 'update' . $user->id }}"
                            class="edit-avatar"><i class="fa fa-pencil"></i></a>
                    @endif
                    <img src="{{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }}" alt=""
                        class="avatar-photo">
                </div>
            @endif

            <h5 class="text-center h5 mb-0">
                {{ $user->name }}
                @if ($user->getRole('admin'))
                    <span class="badge badge-danger">Admin</span>
                @endif
            </h5>
            <br>

            <center>
                <p><span class="badge badge-secondary" data-bgcolor="#f46f30"
                    data-color="#ffffff">Axe Recherche</span></p>
            </center>

            <p class="text-center text-muted font-14">
                <strong>
                    <span class="badge badge-warning text-white">Resp</span> :
                    {{ $user->axes[0]->titre }}
                </strong>
            </p>
            <a href="{{ route('admin.user.show', $user->id) }}">
                <div class="profile-info">
                    <h5 class="mb-20 h5 text-blue">Contact </h5>
                    <ul>
                        <li>
                            <span>Email :</span>
                            {{ $user->email }}
                        </li>
                        <li>
                            <span>Telephone :</span>
                            {{ $user->telephone }}
                        </li>
                        <li>
                            <span>Fonction :</span>
                            <span class="badge badge-primary  text-white">{{ $user->fonction->nom }}</span>
                        </li>
                        <li>
                            <span>Address:</span>
                            {{ $user->adress }}
                        </li>

                        <li>
                            <span>Grade:</span>
                            {{ $user->grade }}
                        </li>

                        <li>
                            <span>Lieu de Travail:</span>
                            {{ $user->lieu_travail }}
                        </li>

                    </ul>
                </div>
            </a>
            <div class="profile-social">
                <h5 class="mb-20 h5 text-blue">Lien Social</h5>
                <ul class="clearfix">
                    <li><a href="{{ $user->facebook_url }}" class="btn" data-bgcolor="#3b5998"
                            data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ $user->twiter_url }}" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i
                                class="fa fa-twitter"></i></a></li>
                    <li><a href="{{ $user->linkdin_url }}" class="btn" data-bgcolor="#007bb5"
                            data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="{{ $user->instagram_url }}" class="btn" data-bgcolor="#f46f30"
                            data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{ $user->web_url }}" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i
                                class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>

        </div>
    </div>

    @include('admin.user.gestion-user.update', ['id' => $user->id, 'item' => $user])
@empty
@endforelse
