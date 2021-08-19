<div class="content-wrapper">
    <section class="content">
        <!--warehouse = Variable warehouse->controller-->
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $pengeluarandtl['id']; ?>">
            </div>
            <div class="form-group">
                <label for="">Nomor Pengeluaran</label>
                <input type="text" name="nomor_pengeluaran" id="nama" class="form-control" value="<?= $pengeluarandtl['nomor_pengeluaran']; ?>">
            </div>
                        <div class="form-group">
                <label for="">Material Code</label>
                <input type="text" name="material_code" id="material_code" class="form-control" value="<?= $pengeluarandtl['material_code']; ?>">
            </div>

              <div class="form-group">
                <label for="">Material Name</label>
                <input type="text" name="material_name" id="material_name" class="form-control" value="<?= $pengeluarandtl['material_name']; ?>">
            </div>
            
            <div class="form-group">
                <label for="">Quantity</label>
                <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?= $pengeluarandtl['jumlah']; ?>">
            </div>

                 <div class="form-group">
                <label for="">Unit</label>
                <input type="text" name="unit" id="unit" class="form-control" value="<?= $pengeluarandtl['unit']; ?>">
            </div>


            <button type="submit" class="btn btn-primary" name="ubah">Simpan</button>

        </form>
    </section>
</div>


