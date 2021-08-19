<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Pengeluaran warehouse
        <small>Control panel</small>
      </h1>
    </section>
    <section class="conten">

        <?php echo $this->session->flashdata('message'); ?>

    	 <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>

         <a class="btn btn-default" href="<?php echo base_url('Pengeluaranwhs/cetak') ?>"><i class="fa fa-print"></i>print</a>


    	<table class="table">
    		<tr>
    			<!-- kolom view -->
    			<th>ID</th>
    			<th>NOMOR PENGELUARAN</th>
    			<th>TANGGAL PENGELUARAN</th>
    			<th>TUJUAN KELUAR</th>
    			<th>USER INPUT</th>
                <th colspan="2">AKSI</th>
    		</tr>
    		<?php 

    			$no =1;
    			foreach ($vpengeluaranwhs as $whs ) : ?>

    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $whs->nomor_pengeluaran ?></td>
    			<td><?php echo $whs->tanggal_pengeluaran ?></td>
    			<td><?php echo $whs->tujuan_keluar?></td>
    			<td><?php echo $whs->user_input ?></td>
                <td><?php echo anchor('Pengeluaranwhs/detail/'.$whs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus?') "><?php echo anchor('Pengeluaranwhs/hapus/'.$whs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('Pengeluaranwhs/edit/'.$whs->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    		</tr>

    			<?php endforeach; ?>

    	</table>
    </section>

<!-- Insert Database -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Data Warehouse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <!--Methode Tambah Aksi = Insert (Controller Warehouse) Funnction (Tambah Aksi)-->
                        <form action="<?= base_url('Pengeluaranwhs/tambah_aksi') ?>" method="post">
                    </div>
        		<div class="form-group">
        			
        			<label> Nomor Pengeluaran </label>
        			<input type="text" name="nomor_pengeluaran" class="form-control">

        		</div>

          		<div class="form-group">
        			
        			<label> Tanggal Pengeluaran </label>
        			<input type="date" name="tanggal_pengeluaran" class="form-control">

        		</div>

          		<div class="form-group">
        			
        			<label> Tujuan Keluar </label>
        			<select name="tujuan_keluar" id="" class="form-control">
                            <option value="0">Pilih</option>
                            <option value="Import">Import</option>
                            <option value="Export">Export</option>
                        </select>

        		</div>

          		<div class="form-group">
        			
        			<label> User Input </label>
        			<input type="text" name="user_input" class="form-control">

        		</div>
                

        		<button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
        
        </form>
              </div>
    </div>
  </div>
</div>

</div>