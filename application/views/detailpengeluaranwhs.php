<div class="content-wrapper">
    <section class="content">
        <h4>DETAIL PENGELUARAN DATA Warehouse</h4>

        <table class="table">
            <tr>
                <th>Nomor Pengeluaran</th>
                <td><?= $detail->nomor_pengeluaran ?></td>
                <!--$detail = dari controller-->
            </tr>
            <tr>
                <th>Tanggal Pengeluaran</th>
                <td><?= $detail->tanggal_pengeluaran ?></td>

            </tr>
            <tr>
                <th>Tujuan Keluar</th>
                <td><?= $detail->tujuan_keluar ?></td>
            </tr>
            <tr>
                <th>User Input</th>
                <td><?= $detail->user_input ?></td>
            </tr>
          
        
        </table>
        <a class="btn btn-primary" href="<?= base_url('pengeluaranwhs/index') ?>">Kembali</a>
    </section>
</div>