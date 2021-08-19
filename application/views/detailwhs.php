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
                <th>Materia Code</th>
                <td><?= $detail->material_code ?></td>

            </tr>
            <tr>
                <th>Material Name</th>
                <td><?= $detail->material_name?></td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td><?= $detail->jumlah ?></td>
            </tr>
          
            <tr>
                <th>Unit</th>
                <td><?= $detail->unit ?></td>
            </tr>
        
        </table>
        <a class="btn btn-primary" href="<?= base_url('warehousedtl/index') ?>">Kembali</a>
    </section>
</div>