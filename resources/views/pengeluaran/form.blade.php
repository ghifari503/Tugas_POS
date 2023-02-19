<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
    <div class="modal-content">
    <form action="#" method="POST" >
    <div class="modal-header">
    <h4 class="modal-title">Supplier</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        @csrf

        <input type="hidden" name="_method" value="POST" v-if="editStatus">


        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="" required autofocus>
        </div>
        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="number" name="nominal" id="nominal" class="form-control" value="" required>
        </div>



    </div>
    <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-primary">Confirm</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </form>
    </div>
    </div>
</div>
