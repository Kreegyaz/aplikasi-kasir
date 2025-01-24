<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form">
    <div class="modal-dialog">
        <form action="" method="post" class="form-horizontal"></form>
            @csrf
            @method('post')

            <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span></span></button> -->
                <h4 class="modal-title" id="modal-form"></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_kategori" class="col-md-2 col-md-offset-1 control-label">Kategori</label>
                    <div class="col-md-6">
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required autofocus>
                        <span class="help-block with errors"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-small btn-flat btn-primary">Simpan</button>
                <button type="button" class="btn btn-small btn-flat btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>

    </div>
</div>