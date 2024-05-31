
<div class="modal fade show" id="{{ 'update'. $id }}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #e0ee17">
                <h3 class="modal-title" id="largeModalLabel">Ajouter Une Fonction</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <form action="{{ route('admin.roleEquipeProjet.update',$item->id) }}" method="POST">
                @csrf
            <div class="modal-body text-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nom : </label><span class="text-danger">*</span>
                        <input type="text" name="nom" value="{{ $item->nom }}" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description : </label><span class="text-danger">*</span>
                        <textarea name="description" id="" class="form-control" required>{{ $item->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                <button type="submit" class="btn btn-warning text-white">Modifier</button>
            </div>
            </form>
        </div>
    </div>
</div>

