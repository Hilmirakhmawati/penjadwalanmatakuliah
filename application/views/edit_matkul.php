<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>
            <?php foreach ($matkul->result_array() as $mat)?>

              <form method="post" action="<?php echo base_url('C_Matkul/edit/' . $mat['id_matkul'])?>">

                <div class="card-body">
                  <div class="form-group">
                    <tr>
                <td colspan="3"><?php echo form_error('C_Matkul')?></td>
                  </tr>
                    <label for="id_matkul">Id Matkul : </label>
                    <input class="form-control"readonly="" type="text" name="id_matkul" value="<?php echo $mat['id_matkul']?>">

                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('kode_matkul') ?></td>
                     <tr>
                    <label for="kode_matkul">Kode Matkul : </label>
                    <input type="text" class="form-control" name="kode_matkul" value="<?php echo $mat['kode_matkul']?>">
                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('nama_matkul') ?></td>
                     <tr>
                    <label for="nama_matkul">Nama Matkul : </label>
                    <input type="text" class="form-control" name="nama_matkul" value="<?php echo $mat['nama_matkul']?>">
                  </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>

</div>
<!-- /.card -->