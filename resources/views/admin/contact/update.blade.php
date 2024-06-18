
<div class="modal fade show" id="{{ 'update'. $id }}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(85, 231, 18)">
                <h3 class="modal-title" id="largeModalLabel">Modification info  contact</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <form action="{{ route('admin.contact.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body text-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address : </label><span class="text-danger">*</span>
                        <input type="text" name="adress" value="{{ $item->adress }}" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email : </label><span class="text-danger">*</span>
                        <input type="text" name="email" value="{{ $item->email }}" class="form-control" multiple>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Telephone : </label><span class="text-danger">*</span>
                        <input type="text" name="telephone" value="{{ $item->telephone }}" class="form-control" multiple>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lien Facebook : </label><span class="text-danger">*</span>
                        <input type="text" name="facebook_link" value="{{ $item->facebook_link }}" class="form-control" multiple>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lien Instagram : </label><span class="text-danger">*</span>
                        <input type="text" name="instagram_link" value="{{ $item->instagram_link }}" class="form-control" multiple>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lien Twitter : </label><span class="text-danger">*</span>
                        <input type="text" name="twitter_link" value="{{ $item->twitter_link }}" class="form-control" multiple>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lien Linkedink : </label><span class="text-danger">*</span>
                        <input type="text" name="linkedin_link" value="{{ $item->linkedin_link }}" class="form-control" multiple>
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

