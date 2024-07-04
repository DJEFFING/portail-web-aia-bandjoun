<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>UR-AIA Bandjoun</h3>
                        <p>
                            {{ contactAll()->adress }}<br>
                            <strong>Phone: </strong>{{ contactAll()->telephone }}<br>
                            <strong>Email: </strong>{{ contactAll()->email }}<br>
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="{{ contactAll()->twitter_link }}"
                                class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="{{ contactAll()->facebook_link }}"
                                class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="{{ contactAll()->instagram_link }}"
                                class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="{{ contactAll()->linkedin_link }}"
                                class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{ route('web.acceuil') }}">Acceuil</a></li>
                        <li><a href="{{ route('web.apropos') }}">À propos</a></li>
                        <li><a href="{{ route('web.evernement') }}">Evènements</a></li>
                        <li><a href="{{ route('web.equipes') }}">Equipes</a></li>
                        <li><a href="{{ route('web.membres') }}">Membres</a></li>
                    </ul>
                </div>
                <!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Domaine de Recherche</h4>
                    <ul>
                        @forelse (poleRecherches() as $pole)
                            <li><a href="{{ route('web.show-poleRecherche', $pole->id) }}">{{ $pole->code_pole }}</a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
                <!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Equipes</h4>
                    <ul>
                        @forelse (equipes() as $equipe)
                            <li><a href="{{ route('web.show-equipe', $equipe->id) }}">{{ $equipe->code_equipe }}</a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
                <!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Projets</h4>
                    <ul>
                        @forelse (projets() as $projet)
                            <li><a href="{{ route('web.show-equipe', $projet->id) }}">{{ $projet->titre }}</a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div><!-- End footer links column-->

            </div>
        </div>
    </div>

    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>UR-AIA Bandjoun</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </div>

</footer>
