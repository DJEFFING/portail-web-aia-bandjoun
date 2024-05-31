<div class="modal fade show" id="Ajouter" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
    style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(43, 235, 18)">
                <h3 class="modal-title" id="largeModalLabel">Ajouter Une Revue</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <form action="{{ route('admin.revue.store') }}" method="POST">
                @csrf
                <div class="modal-body text-center">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Titre : </label><span class="text-danger">*</span>
                            <input type="text" name="titre" class="form-control" required>
                        </div>
                    </div>

                    <!-- Pôle de recherche List -->
                    <div class="col-md-12">
                        <div class="form-group mb-200">
                            <label>Pôle de Recherche : </label> <span class="text-danger">*</span>
                            <select class="custom-select2 form-control" name="pole_recherche_id"
                                style="width: 100%; height: 38px;" required>

                                <optgroup label="Pôle de Recherche">
                                    @forelse ($listPoles as $pole)
                                        <option value="{{ $pole->id }}">{{ $pole->titre }}</option>
                                    @empty
                                    @endforelse
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description : </label><span class="text-danger">*</span>
                            <textarea name="description" id="" class="form-control" required></textarea>
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
