@forelse ($listUserRespPole as $user)
    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
        <div class="member-img">
            @if ($user->profil_url)
                <img src=" {{ asset('storage/' . $user->profil_url) }} " class="img-fluid" alt="">
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

        <a href="{{ route('web.show-profil',$user->id) }}">
            <div class="member-info text-center">
                <h4>{{ $user->name }}</h4>
                <h6>{{ $user->grade }}-{{ $user->lieu_travail }}</h6>
                <p style="background-color: green; color: white; text-align: center;">Pôle de Recherche</p>
                <p><strong>resp : </strong>{{ $user->poleRecherches[0]->titre }}</p>
                <span>{{ $user->fonction->nom }}</span>
                <p>{{ Str::limit($user->description, 30, '...') }}</p>
            </div>
        </a>
    </div><!-- End Team Member -->
@empty
    <center>
        <p>Pas de résultat...</p>
    </center>
@endforelse
<br>
