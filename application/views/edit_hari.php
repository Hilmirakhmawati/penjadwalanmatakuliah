<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>

            <?php foreach ($hari->result_array() as $hri)?>

              <form method="post" action="<?php echo base_url('C_Hari/edit/' . $hri['id_hari'])?>">

                <div class="card-body">
                  <div class="form-group">
                    <tr>
                <td colspan="3"><?php echo form_error('C_Hari')?></td>
                  </tr>
                    <label for="id_hari">Id Hari : </label>
                    <input class="form-control"readonly="" type="text" name="id_hari" value="<?php echo $hri['id_hari']?>">

                  </div>
                  <div class="form-group">
                    <td colspan="3"><?php echo form_error('nama_hari') ?></td>
                    <label for="nama_hari">Nama Hari : </label>
                    <input type="text" class="form-control" name="nama_hari" value="<?php echo $hri['nama_hari']?>">
                  </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>

</div>
<!-- /.card -->