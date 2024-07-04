<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('admin.index')}}">
            <img src="{{ asset('asset_web/assets/img/ur-aia.png') }}" style="height: 100px"  alt="" class="dark-logo">
            <img src="{{ asset('asset_web/assets/img/ur-aia.png') }}" style="height: 100px"  alt="" class="light-logo">
            <h1  class="dark-logo text-dark">AIA</h1>
            <h1  class="light-logo text-white">AIA</h1>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li><a href="/admin" class="dropdown-toggle no-arrow"><span class="micon dw dw-house-1"></span>Tableau
                        De Bord</a></li>

                @if (Auth::user()->getRole('Admin'))
                    <li>
                        <center>
                            <div class="sidebar-small-cap">Managment Site</div>
                        </center>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Acceuil</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('admin.slide.index') }}">Slide Section</a></li>
                            <li><a href="{{ route('admin.apropos.index') }}">Appropos Section</a></li>
                            <li><a href="{{ route('admin.contact.index') }}">Contact</a></li>
                        </ul>
                    </li>

                @endif


                <li>
                    <center>
                        <div class="sidebar-small-cap">Managment Admin</div>
                    </center>
                </li>

                <a href="{{ route('admin.user.index') }}">
                    <li class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user"></span>
                        Utilisateurs
                    </li>
                </a>

                <a href="{{ route('admin.fonction.index') }}">
                    <li class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span>
                        Fonction
                    </li>
                </a>

                <a href="{{ route('admin.partenaire.index') }}">
                    <li class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span>
                        Partenaires
                    </li>
                </a>

                <li></li>


                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Domaine de recherhe</span>
                    </a>
                    <ul class="submenu">
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.poleRecherche.create') }}">Ajouter</a></li>
                        @endif
                        <li><a href="{{ route('admin.poleRecherche.index') }}">Liste</a></li>
                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Equipes</span>
                    </a>
                    <ul class="submenu">

                        {{-- <li><a href="{{ route('admin.roleEquipe.index') }}">Role Equipe</a></li> --}}
                        <li><a href="{{ route('admin.equipe.index') }} ">Liste des Equipes</a></li>
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.equipe.create') }}">Ajouter une Equipe</a></li>
                        @endif


                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Axes de recherche</span>
                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('admin.axe.index') }} ">Liste des Axes</a></li>
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.axe.create') }}">Ajouter un Axe</a></li>
                        @endif


                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Evénements</span>
                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('admin.typeEvernement.index') }}">Type d'evénement</a></li>
                        {{-- <li><a href="{{ route('admin.roleEvernement.index') }}">Role Evénement</a></li> --}}
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.evernement.create') }}">Ajouter un evénement</a></li>
                        @endif
                        <li><a href="{{ route('admin.evernement.index') }}">Liste des evénements</a></li>


                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Projets</span>
                    </a>
                    <ul class="submenu">
                        {{-- <li><a href="{{ route('admin.roleEquipeProjet.index') }}">Role Projet</a></li> --}}
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.projet.create') }}">Ajouter un projet</a></li>
                        @endif
                        <li><a href="{{ route('admin.projet.index') }}">Liste des projets</a></li>
                    </ul>
                </li>

                {{-- <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Blogs</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.revue.index') }}">Revues</a></li>
                        <li><a href="{{ route('admin.article.create') }}">Ajouter un Article</a></li>
                        <li><a href="{{ route('admin.article.index') }}">Articles</a></li>
                    </ul>
                </li> --}}

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Publication</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.anneePublication.index') }}">Annee de publication</a></li>
                        <li><a href="{{ route('admin.typePublication.index') }}">Types de publication</a></li>
                        <li><a href="{{ route('admin.publication.create') }}">Ajouter une publication</a></li>
                        <li><a href="{{ route('admin.publication.index') }}">Liste des publications</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
