<div class="content-wrapper">
    <section class="content">
        <!--warehouse = Variable warehouse->controller-->
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $warehouse['id']; ?>">
            </div>
            <div class="form-group">
                <label for="">Nomor Penerimaan</label>
                <input type="text" name="nomor_penerimaan" id="nama" class="form-control" value="<?= $warehouse['nomor_penerimaan']; ?>">
            </div>
                        <div class="form-group">
                <label for="">Tanggal Penerimaan</label>
                <input type="date" name="tanggal_penerimaan" id="tanggal_penerimaan" class="form-control" value="<?= $warehouse['tanggal_penerimaan']; ?>">
            </div>
             <div class="form-group">
                <label for="Jenis Pemasukan"></label>
                <select class="form-control" id="jenis_pemasukan" name="jenis_pemasukan" id="jenis_pemasukan">
                    <?php foreach ($jenis as $j) : ?>
                        <?php if ($j == $warehouse['jenis_pemasukan']) : ?>
                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                        <?php else : ?>
                            <option value="<?= $j; ?>"><?= $j; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">User Input</label>
                <input type="text" name="user_input" id="user_input" class="form-control" value="<?= $warehouse['user_input']; ?>">
            </div>


            <button type="submit" class="btn btn-primary" name="ubah">Simpan</button>

        </form>
    </section>
</div>


