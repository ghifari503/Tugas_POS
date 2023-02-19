<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
    <div class="modal-content">
    <form action="#" method="POST" >
    <div class="modal-header">
    <h4 class="modal-title">Produk</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        @csrf

        <input type="hidden" name="_method" value="PUT" v-if="editStatus">


        <div class="form-group">
            <label for="nama_produk">Nama</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="" required autofocus>
        </div>
        <div class="form-group">
            <label for="id_kategori">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-control" required>
                <option value="">Pilih Kategori</option>
                @foreach ( $kategori as $key => $item )
                        <option value="{{ $key }}">{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="merk">Merk</label>
            <input type="text" name="merk" id="merk" class="form-control" value="" required autofocus>
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="number" name="harga_beli" id="harga_beli" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="" required autofocus>
        </div>
        <div class="form-group">
            <label for="diskon">Diskon</label>
            <input type="number" name="diskon" id="diskon" class="form-control" value="0">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" value="0">
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
