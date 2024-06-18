<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu" ></div>
        @if(!empty(session('message')))
            <div class="alert alert-primary" style="margin: 10px;" role="alert">
                {{ session('message') }}
            </div>
        @endif
    </div>



    <div class="header-right">



        <div class="dashboard-setting user-notification">
            @if (Auth::user()->getRole('Admin'))
                <span class="badge badge-danger">Admin</span>
            @else
                <span class="badge badge-success">Membre</span>
            @endif

        </div>

        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            @forelse (Auth::user()->notifications()->latest()->get() as $notification)

                                <button type="button" class="list-group-item list-group-item-action"
                                    data-toggle="modal" data-target="#notificationModal"
                                    data-id="{{ $notification->id }}" onclick="modal()">
                                    <div class="d-flex w-100 justify-content-between flex-column">
                                        <p class="mb-1 text-truncate" style="max-width: 250px;">
                                            {{ $notification->description }}</p>
                                        <small>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ $notification->created_at->dayName }},
                                            {{ $notification->created_at->isoFormat('LL') }} -
                                            {{ $notification->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                </button>

                            @empty
                                <p>Pas de Notifications</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{ asset('storage/' . Auth::user()->profil_url) }}" alt="">
                    </span>
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{ route('admin.user.profil') }}"><i class="dw dw-user1"></i>
                        Profile</a>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
        <div class="github-link">
            <a href="#"><img
                    src="{{ asset('asset_admin/vendors/images/github.svg') }} " alt=""></a>
        </div>
    </div>
</div>

<!-- bibliothèque jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- je recupere l'id dans le data-id puis je recherche le premier p contenu dans un div je recupere son contenu textuel puis je definir le contenu d'une balise donc l'id sera #noticationDescription comme etant ce texte et de meme pour la date et temps-->
<script>
	$(document).ready(function() {
		$('.list-group-item-action').click(function() {
			var id = $(this).data('id');
			var description = $(this).find('div p').text();
			var date = $(this).find('div small').text();
			$('#created_atDescription').text(date);
			$('#notificationDescription').text(description);
		});
	});
</script>
