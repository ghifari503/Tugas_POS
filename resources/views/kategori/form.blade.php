<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
    <div class="modal-content">
    <form action="#" method="POST" >
    <div class="modal-header">
    <h4 class="modal-title">Kategori</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        @csrf

        <input type="hidden" name="_method" value="PUT" v-if="editStatus">


        <div class="form-group">
            <label for="nama_kategori">Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="" required autofocus>
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
