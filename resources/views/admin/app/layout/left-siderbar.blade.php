<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('asset_admin/vendors/images/deskapp-logo.svg') }} " alt="" class="dark-logo">
            <img src="{{ asset('asset_admin/vendors/images/deskapp-logo-white.svg') }} " alt="" class="light-logo">
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
                            <span class="micon dw dw-house-1"></span><span class="mtext">Memue</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="index.html">Slide Section</a></li>
                            <li><a href="index2.html">Appropos Section</a></li>
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
                            <li><a href="{{ route('admin.poleRecherche.showStore') }}">Ajouter</a></li>
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
                            <li><a href="{{ route('admin.equipe.showStore') }}">Ajouter une Equipe</a></li>
                        @endif


                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Evènements</span>
                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('admin.typeEvernement.index') }}">Type Evènement</a></li>
                        <li><a href="{{ route('admin.roleEvernement.index') }}">Role Evènement</a></li>
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.evernement.showStore') }}">Ajouter une Evènement</a></li>
                        @endif
                        <li><a href="{{ route('admin.evernement.index') }}">Liste Evènement</a></li>


                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Projets</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.roleEquipeProjet.index') }}">Role Projet</a></li>
                        @if (Auth::user()->getRole('Admin'))
                            <li><a href="{{ route('admin.projet.showStore') }}">Ajouter Projet</a></li>
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
                        <li><a href="{{ route('admin.article.showStore') }}">Ajouter un Article</a></li>
                        <li><a href="{{ route('admin.article.index') }}">Articles</a></li>
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
