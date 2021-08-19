<div class="content-wrapper">
    <section class="content">
    
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $pengeluaranwhs['id']; ?>">
            </div>
            <div class="form-group">
                <label for="">Nomor Pengeluaran</label>
                <input type="text" name="nomor_pengeluaran" id="nama" class="form-control" value="<?= $pengeluaranwhs['nomor_pengeluaran']; ?>">
            </div>
                        <div class="form-group">
                <label for="">Tanggal Pengeluaran</label>
                <input type="date" name="tanggal_pengeluaran" id="tanggal_pengeluaran" class="form-control" value="<?= $pengeluaranwhs['tanggal_pengeluaran']; ?>">
            </div>
             <div class="form-group">
                <label for="Tujuan Keluar"></label>
                <select class="form-control" id="tujuan_keluar" name="tujuan_keluar" id="tujuan_keluar">
                    <?php foreach ($jenis as $j) : ?>
                        <?php if ($j == $pengeluaranwhs['tujuan_keluar']) : ?>
                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                        <?php else : ?>
                            <option value="<?= $j; ?>"><?= $j; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">User Input</label>
                <input type="text" name="user_input" id="user_input" class="form-control" value="<?= $pengeluaranwhs['user_input']; ?>">
            </div>


            <button type="submit" class="btn btn-primary" name="ubah">Simpan</button>

        </form>
    </section>
</div>


