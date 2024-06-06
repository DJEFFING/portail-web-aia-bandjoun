<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>UpConstruction<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>

                <li><a href="/" @if ($page == 0) class="active" @endif>Acceuil</a></li>
                <li><a href="{{ route('web.apropos') }}" @if ($page == 1) class="active" @endif>À PROPOS</a></li>
                <li><a href="{{ route('web.evernement') }}" @if ($page == 2) class="active" @endif>EVENEMENTS</a></li>
                <li><a href="{{ route('web.pole-recherche') }}" @if ($page == 3) class="active" @endif>RECHERCHE</a></li>
                <li><a href="{{ route('web.equipes') }}" @if ($page == 4) class="active" @endif>Equipes</a></li>

                <li><a href=" {{ route('web.projets') }} " @if ($page == 5) class="active" @endif>PROJETS</a></li>
                <li><a href=" {{ route('web.blogs') }} " @if ($page == 6) class="active" @endif>Blogs</a></li>

                <li><a href="{{ route('web.membres') }}" @if ($page == 7) class="active" @endif>MENBRES</a></li>
                <li class="dropdown"><a href="#"><span>AUTRES</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">FORMATION</a></li>
                        <li><a href="#">RECRUTEMENT</a></li>
                        <li><a href="#">AGENDA</a></li>

                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
