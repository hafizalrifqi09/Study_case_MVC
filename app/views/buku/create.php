<div class="container">
    <h3 class="mb-3">tambah buku</h3>
    <form action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
    <div class="class-body">
        <div class="form-groub mb-3">
            <label for="judul">judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="form-groub mb-3">
            <label for="penulis">penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis">
        </div>
        <div class="form-groub mb-3">
            <label for="tgl_selesai">tgl_selesai</label>
            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">submit</button>
</div>
</form>
</div>