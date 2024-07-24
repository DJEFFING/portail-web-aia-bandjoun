@forelse ($autreUser as $user)
    <div class="sidebar search-card col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
        <div class="member-img">
            @if ($user->profil_url)
                <img src=" {{ config('global.S3_url'). $user->profil_url }} " class="img-fluid" alt="">
            @else
                <img src=" {{ asset('asset_admin/vendors/images/photo-avatar-profil.png') }} " class="img-fluid"
                    alt="">
            @endif
            <div class="social">
                <a href="{{ $user->twiter_url }}"><i class="bi bi-twitter"></i></a>
                <a href="{{ $user->facebook_url }}"><i class="bi bi-facebook"></i></a>
                <a href="{{ $user->instagram_url }}"><i class="bi bi-instagram"></i></a>
                <a href="{{ $user->linkdin_url }}"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="member-info text-center">
            <a href="{{ route('web.show-profil',$user->id) }}"><h4>{{ $user->name }}</h4></a>
            <a href="{{ route('web.show-profil', $user->id) }}">
                <h4>{{ $user->name }}  {{ $user->prenom }} , {{ $user->grade}}</h4>
            </a>
            <span>{{ $user->fonction->nom }}</span>
            <p>{{ Str::limit($user->description, 30, '...') }}</p>
        </div>
    </div><!-- End Team Member -->
@empty
{{-- <center><p>Pas de Résultat</p></center> --}}
@endforelse
