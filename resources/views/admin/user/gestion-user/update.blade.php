<div class="modal fade show" id="{{ 'update' . $id }}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
    style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1749ee">
                <h3 class="modal-title" id="largeModalLabel">Modifier Les Droits</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <form action="{{ route('admin.user.update-droit', $item->id) }}" method="POST">
                @csrf
                <div class="modal-body text-center">
                    @if (!(Auth::user()->id == $item->id))
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Role : </label><span class="text-danger">*</span>
                                <select name="role_id" class="form-control" id="">

                                    @forelse ($listRole as $role)
                                        <option value="{{ $role->id }}">{{ $role->nom }}</option>
                                    @empty
                                        <p>Pas De role</p>
                                    @endforelse

                                </select>
                            </div>
                        </div>
                    @endif

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Fonction : </label><span class="text-danger">*</span>
                            <select name="fonction_id" class="form-control" id="">
                                @forelse ($listFonction as $fonction)
                                    @if ($fonction->id == $item->fonction->id)
                                        <option value="{{ $fonction->id }}" selected>{{ $fonction->nom }}</option>
                                    @else
                                        <option value="{{ $fonction->id }}">{{ $fonction->nom }}</option>
                                    @endif

                                @empty
                                    <p>Pas De Fonction</p>
                                @endforelse

                            </select>
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
