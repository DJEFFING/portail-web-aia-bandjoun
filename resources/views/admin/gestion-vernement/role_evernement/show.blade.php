
<div class="modal fade show" id="{{ 'show'. $id }}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(26, 230, 77)">
                <h3 class="modal-title" id="largeModalLabel">Info Fonction</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>

            <div class="modal-body text-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <h4>{{ $item->nom }}</h4>
                    </div>
                </div><hr>

                <div class="col-md-12">
                    <div class="form-group">
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" class="close" data-dismiss="modal" aria-label="Close">Fermer</button>
            </div>

        </div>
    </div>
</div>

