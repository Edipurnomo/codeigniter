<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Detail Warehouse
        <small>Control panel</small>
      </h1>
    </section>
    <section class="conten">

        <?php echo $this->session->flashdata('message'); ?>

    	 <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>

         <a class="btn btn-default" href="<?php echo base_url('Warehousedtl/cetak') ?>"><i class="fa fa-print"></i>print</a>

    	<table class="table">
    		<tr>
    			<!-- kolom view -->
    			<th>ID</th>
                <th>NOMOR Pengeluaran</th>
                <th>MATERIAL CODE</th>
                <th>MATERIAL NAME</th>
                <th>QUANTITY</th>
                <th>UNIT</th>
                <th colspan="2">AKSI</th>
    		</tr>
    		<?php 

    			$no =1;
    			foreach ($vpengeluarandtl as $dtl ) : ?>

    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $dtl->nomor_pengeluaran ?></td>
    			<td><?php echo $dtl->material_code ?></td>
    			<td><?php echo $dtl->material_name ?></td>
    			<td><?php echo $dtl->jumlah ?></td>
                <td><?php echo $dtl->unit ?></td>
               <td><?php echo anchor('Pengeluarandtl/detail/'.$dtl->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus?') "><?php echo anchor('Pengeluarandtl/hapus/'.$dtl->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('Pengeluarandtl/edit/'.$dtl->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> 
    		</tr>

    			<?php endforeach; ?>

    	</table>
    </section>

<!-- Insert Database -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Data Detailwhs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <!--Methode Tambah Aksi = Insert (Controller Pengeluarandtl) Funnction (Tambah Aksi)-->
                        <form action="<?= base_url('pengeluarandtl/tambah_aksi') ?>" method="post">
                    </div>
        		<div class="form-group">
        			
        			<label> Nomor Pengeluaran </label>
        			<input type="text" name="nomor_pengeluaran" class="form-control">

        		</div>

          		<div class="form-group">
        			
        			<label> Material Code </label>
        			<input type="text" name="material_code" class="form-control">

        		</div>
                
                <div class="form-group">
                    
                    <label> Material name </label>
                    <input type="text" name="material_name" class="form-control">

                </div>
          	
          		<div class="form-group">
        			
        			<label> Quantity </label>
        			<input type="text" name="jumlah" class="form-control">

        		</div>

                <div class="form-group">
                    
                    <label> Unit </label>
                    <input type="text" name="unit" class="form-control">

                </div>

        		<button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
        
        </form>
              </div>
    </div>
  </div>
</div>

</div>