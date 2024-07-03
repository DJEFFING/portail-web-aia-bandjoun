<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
           <img src="{{ asset('asset_web/assets/img/ur-aia.png') }}" alt="" style="width: 50px; height: 500px;">
            <h1>UR-AIA BANDJOUN<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>

                <li><a href="/" @if ($page == 0) class="active" @endif>Acceuil</a></li>
                <li><a href="{{ route('web.apropos') }}" @if ($page == 1) class="active" @endif>Présentation</a></li>


                <!-- Pole Et Equipe de recherche -->
                    <li class="dropdown">
                        <a href="#" @if ($page == 2 || $page == 3 || $page == 4 || $page == 5 || $page == 6) class="active" @endif>
                            <span>RECHERCHE</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('web.pole-recherche') }}" @if ($page == 3) class="active" @endif>Dommaine de Recherche</a></li>
                            <li><a href="{{ route('web.equipes') }}" @if ($page == 4) class="active" @endif>Equipes</a></li>
                            <li><a href=" {{ route('web.projets') }} " @if ($page == 5) class="active" @endif>Projets</a></li>
                            <li><a href="{{ route('web.publications') }}" @if ($page == 6) class="active" @endif>Publication</a></li>
                            <li><a href="{{ route('web.evernement') }}" @if ($page == 2) class="active" @endif>Evenements</a></li>
                        </ul>
                    </li>
                <!--END Pole Et Equipe de recherche -->



                {{-- <li><a href="  " @if ($page == 7) class="active" @endif>Blogs</a></li> --}}

                <li><a href="{{ route('web.membres') }}" @if ($page == 8) class="active" @endif>MEMBRES</a></li>
                <li class="dropdown"><a href="#"><span>AUTRES</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">FORMATION</a></li>
                        <li><a href="#">RECRUTEMENT</a></li>
                        <li><a href="#">AGENDA</a></li>

                    </ul>
                </li>
                <li><a href="{{ route('web.contact') }}" @if ($page == 9) class="active" @endif>Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
