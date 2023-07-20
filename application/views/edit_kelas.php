<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>

            <?php foreach ($kelas->result_array() as $kls)?>

              <form method="post" action="<?php echo base_url('C_Kelas/edit/' . $kls['id_kelas'])?>">

                <div class="card-body">
                  <div class="form-group">
                    <tr>
                <td colspan="3"><?php echo form_error('C_Kelas')?></td>
                  </tr>
                    <label for="id_kelas">Id Kelas : </label>
                    <input class="form-control"readonly="" type="text" name="id_kelas" value="<?php echo $kls['id_kelas']?>">

                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('kode_kelas') ?></td>
                     <tr>
                    <label for="kode_kelas">Kode Kelas : </label>
                    <input type="text" class="form-control" name="kode_kelas" value="<?php echo $kls['kode_kelas']?>">
                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('nama_ruangan') ?></td>
                     <tr>
                    <label for="nama_ruangan">Nama Ruangan : </label>
                    <input type="text" class="form-control" name="nama_ruangan" value="<?php echo $kls['nama_ruangan']?>">
                  </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>

</div>
<!-- /.card -->