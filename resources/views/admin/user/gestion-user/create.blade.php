
<div class="modal fade show" id="Ajouter" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(49, 53, 231)">
                <h3 class="modal-title text-white" id="largeModalLabel">Ajouter un membre</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body text-center">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nom : </label><span class="text-danger">*</span>
                            <input type="text" name="name" placeholder="Nom du membre" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email : </label><span class="text-danger">*</span>
                            <input type="text" name="email" placeholder="Email du membre" class="form-control" required>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Grade : </label><span class="text-danger">*</span>

                            <Select class="form-control" required name="grade">
                                <option value="doctorant">Doctorant</option>
                                <option value="docteur">Docteur</option>
                                <option value="professeur">Professeur</option>
                                <option value="Maître de Conférences">Maître de Conférences</option>
                            </Select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Lieu de travail : </label><span class="text-danger">*</span>
                            <input type="text" name="lieu_travail" placeholder="Lieu de travail" class="form-control" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fonction : </label><span class="text-danger">*</span>

                            <Select class="form-control" required name="fonction_id">
                                @forelse ($listFonction as $fonction)
                                    <option value="{{ $fonction->id }}">{{ $fonction->nom }}</option>
                                @empty
                                @endforelse
                            </Select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Role : </label><span class="text-danger">*</span>
                            <Select class="form-control" required name="role_id">
                                @forelse ($listRole as $role)
                                    @if ($role->nom == "User")
                                        <option value="{{ $role->id }}" selected>{{ $role->nom }}</option>
                                    @else
                                        <option value="{{ $role->id }}">{{ $role->nom }}</option>
                                    @endif
                                @empty
                                @endforelse
                            </Select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                <button type="submit" class="btn btn-info">Ajouter</button>
            </div>
            </form>
        </div>
    </div>
</div>

