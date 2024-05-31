<div class="modal fade show" id="AddMembre" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
    style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(74, 104, 240)">
                <h3 class="modal-title" id="largeModalLabel">Ajouter Un Nouveau Membre</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <form action="{{ route('admin.equipe.addMembre', $item->id) }}" method="POST">
                @csrf
                <div class="modal-body text-center">
                    <!-- Liste Des Membres-->
                    
                        <div class="form-group">
                            <label>Responssable : </label> <span class="text-danger">*</span>
                            <select class="custom-select2 form-control" name="user_id"
                                style="width: 100%; height: 38px;" required>

                                <optgroup label="Liste Des Menbres">
                                    @forelse ($listUsers as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @empty
                                    @endforelse
                                </optgroup>
                            </select>
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
