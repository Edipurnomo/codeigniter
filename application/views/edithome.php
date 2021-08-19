<div class="content-wrapper">
    <section class="content">
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $home['id']; ?>">
            </div>
            <div class="form-group">
                <label for="">Catatan</label>
                <input type="text" name="catatan" id="nama" class="form-control" value="<?= $home['catatan']; ?>">
            </div>

            <div class="form-group">
                <label for="">Ditulis Oleh</label>
                <input type="text" name="ditulis_oleh" id="ditulis_oleh" class="form-control" value="<?= $home['ditulis_oleh']; ?>">
            </div>


            <button type="submit" class="btn btn-primary" name="ubah">Simpan</button>

        </form>
    </section>
</div>


