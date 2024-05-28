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
                <li><a href="/about_us" @if ($page == 1) class="active" @endif>APROPOS</a></li>
                <li><a href="/evernements" @if ($page == 2) class="active" @endif>EVERNEMENTS</a></li>
                <li class="dropdown"><a href="#"><span>RECHERCHE</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">RECHERCHE_1</a></li>
                        <li><a href="#">RECHERCHE_2</a></li>
                        <li><a href="#">RECHERCHE_3</a></li>

                    </ul>
                </li>
                <li><a href="/Projet" @if ($page == 3) class="active" @endif>PROJETS</a></li>
                <li><a href="blog.html">Blogs</a></li>
                <li><a href="blog.html">MENBRES</a></li>
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
