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

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="basic-table.html">Basic Tables</a></li>
                            <li><a href="datatable.html">DataTables</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
                        </a>
                    </li>
                @endif


                <li>
                    <center>
                        <div class="sidebar-small-cap">Managment Admin</div>
                    </center>
                </li>


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
                <a href="{{ route('admin.user.index') }}">
                    <li class="dropdown-toggle no-arrow">
                        <i class="fa fa-users"></i>
                        Utilisateur
                    </li>
                </a>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Pole Recherhe</span>
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

                        <li><a href="{{ route('admin.roleEquipe.index') }}">Role Equipe</a></li>
                        <li><a href="{{ route('admin.equipe.index') }} ">Liste Equipe</a></li>
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.equipe.create') }}">Ajouter une Equipe</a></li>
                        @endif


                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Axes Recherche</span>
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

                        <li><a href="{{ route('admin.typeEvernement.index') }}">Type Evénement</a></li>
                        <li><a href="{{ route('admin.roleEvernement.index') }}">Role Evénement</a></li>
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.evernement.create') }}">Ajouter un Evénement</a></li>
                        @endif
                        <li><a href="{{ route('admin.evernement.index') }}">Liste Evénement</a></li>


                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Projets</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.roleEquipeProjet.index') }}">Role Projet</a></li>
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.projet.create') }}">Ajouter Projet</a></li>
                        @endif
                        <li><a href="{{ route('admin.projet.index') }}">Liste Projets</a></li>
                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Blogs</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.revue.index') }}">Revues</a></li>
                        <li><a href="{{ route('admin.article.create') }}">Ajouter un Article</a></li>
                        <li><a href="{{ route('admin.article.index') }}">Articles</a></li>
                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Publication</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.anneePublication.index') }}">Annee</a></li>
                        <li><a href="{{ route('admin.typePublication.index') }}">Types Publication</a></li>
                        <li><a href="{{ route('admin.publication.create') }}">Ajouter Publication</a></li>
                        <li><a href="{{ route('admin.publication.index') }}">Liste Publication</a></li>
                    </ul>
                </li>



                {{-- <li class="dropdown-toggle no-arrow">
                    </span>Equipes</a>
                </li>

                <li class="dropdown-toggle no-arrow">
                    </span>Partenaire</a>
                </li>

                <li class="dropdown-toggle no-arrow">
                    </span>Reunions</a>
                </li>

                <li class="dropdown-toggle no-arrow">
                    </span>Livres</a>
                </li>

                <li class="dropdown-toggle no-arrow">
                    </span>Evernements</a>
                </li>

                <li class="dropdown-toggle no-arrow">
                    </span>Blogs</a>
                </li>

                <li class="dropdown-toggle no-arrow">
                    </span>Chats</a>
                </li>

                <li>
                    <center><div class="sidebar-small-cap">Finance</div></center>
                </li>

                <li class="dropdown-toggle no-arrow">
                    </span>Dongs</a>
                </li> --}}

            </ul>
        </div>
    </div>
</div>
