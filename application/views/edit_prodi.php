<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>

            <?php foreach ($prodi->result_array() as $prd)?>

              <form method="post" action="<?php echo base_url('C_Prodi/edit/' . $prd['id_prodi'])?>">

                <div class="card-body">
                  <div class="form-group">
                    <tr>
                <td colspan="3"><?php echo form_error('C_Prodi')?></td>
                  </tr>
                    <label for="id_prodi">Id Prodi : </label>
                    <input class="form-control"readonly="" type="text" name="id_prodi" value="<?php echo $prd['id_prodi']?>">

                  </div>
                  <div class="form-group">
                    <td colspan="3"><?php echo form_error('nama_prodi') ?></td>
                    <label for="nama_prodi">Nama Prodi : </label>
                    <input type="text" class="form-control" name="nama_prodi" value="<?php echo $prd['nama_prodi']?>">
                  </div>
                
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>

</div>
<!-- /.card -->