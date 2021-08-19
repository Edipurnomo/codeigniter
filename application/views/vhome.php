<div class="content-wrapper">
	<section class="content-header">
      <h1>
       Selamat Datang
        <small>Control panel</small>
      </h1>
    </section>
    <section class="conten">

        <?php echo $this->session->flashdata('message'); ?>

    	 <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>


    	<table class="table">
    		<tr>
    			<!-- kolom view -->
    			<th>NO</th>
    			<th>CATATAN</th>
    			<th>DI TULIS OLEH</th>
    		</tr>
    		<?php 

    			$no =1;
    			foreach ($vhome as $hm ) : ?>

    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $hm->catatan ?></td>
    			<td><?php echo $hm->ditulis_oleh ?></td>
               
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
                        <!--Methode Tambah Aksi = Insert (Controller Home) Funnction (Tambah Aksi)-->
                        <form action="<?= base_url('Home/tambah_aksi') ?>" method="post">
                    </div>
        		<div class="form-group">
        			
        			<label> Catatan </label>
        			<input type="text" name="catatan" class="form-control">

        		</div>

          		<div class="form-group">
        			
        			<label> Ditulis Oleh </label>
        			<input type="date" name="ditulis_oleh" class="form-control">

        		</div>


        		<button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
        
        </form>
              </div>
    </div>
  </div>
</div>

</div>