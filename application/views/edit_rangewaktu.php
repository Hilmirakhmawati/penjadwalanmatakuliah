<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>

            <?php foreach ($waktu->result_array() as $wkt)?>

              <form method="post" action="<?php echo base_url('C_Rangewaktu/edit/' . $wkt['id_waktu'])?>">

                <div class="card-body">
                  <div class="form-group">
                    <tr>
                <td colspan="3"><?php echo form_error('C_Rangewaktu')?></td>
                  </tr>
                    <label for="id_waktu">Id Range Waktu : </label>
                    <input class="form-control"readonly="" type="text" name="id_waktu" value="<?php echo $wkt['id_waktu']?>">

                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('waktu_mulai') ?></td>
                     <tr>
                    <label for="waktu_mulai">Waktu Mulai : </label>
                    <input type="text" class="form-control" name="waktu_mulai" value="<?php echo $wkt['waktu_mulai']?>">
                  </div>
                  <div class="form-group">
                    <td colspan="3"><?php echo form_error('waktu_selesai') ?></td>
                    <label for="waktu_selesai">Waktu Selesai : </label>
                    <input type="text" class="form-control" name="waktu_selesai" value="<?php echo $wkt['waktu_selesai']?>">
                  </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>

</div>
<!-- /.card -->