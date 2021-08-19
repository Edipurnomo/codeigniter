<div class="content-wrapper">
    <section class="content">
        <h4>DETAIL DATA Warehouse</h4>

        <table class="table">
            <tr>
                <th>Nomor Penerimaan</th>
                <td><?= $detail->nomor_penerimaan ?></td>
                <!--$detail = dari controller-->
            </tr>
            <tr>
                <th>Tanggal Penerimaan</th>
                <td><?= $detail->tanggal_penerimaan ?></td>

            </tr>
            <tr>
                <th>Jenis Pemasukan</th>
                <td><?= $detail->jenis_pemasukan ?></td>
            </tr>
            <tr>
                <th>User Input</th>
                <td><?= $detail->user_input ?></td>
            </tr>
          
        
        </table>
        <a class="btn btn-primary" href="<?= base_url('warehouse/index') ?>">Kembali</a>
    </section>
</div>