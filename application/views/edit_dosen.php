<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>

            <?php foreach ($dosen->result_array() as $dsn)?>

              <form method="post" action="<?php echo base_url('C_Dosen/edit/' . $dsn['id_dosen'])?>">

                <div class="card-body">
                  <div class="form-group">
                    <tr>
                <td colspan="3"><?php echo form_error('C_Dosen')?></td>
                  </tr>
                    <label for="id_dosen">Id Dosen : </label>
                    <input class="form-control"readonly="" type="text" name="id_dosen" value="<?php echo $dsn['id_dosen']?>">

                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('nip') ?></td>
                     <tr>
                    <label for="nip">NIP : </label>
                    <input type="text" class="form-control" name="nip" value="<?php echo $dsn['nip']?>">
                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('nidn') ?></td>
                     <tr>
                    <label for="nidn">NIDN : </label>
                    <input type="text" class="form-control" name="nidn" value="<?php echo $dsn['nidn']?>">
                  </div>
                  <div class="form-group">
                    <td colspan="3"><?php echo form_error('nama_dosen') ?></td>
                    <label for="nama_dosen">Nama Dosen : </label>
                    <input type="text" class="form-control" name="nama_dosen" value="<?php echo $dsn['nama_dosen']?>">
                  </div>
                   <div class="form-group">
                     <td colspan="3"><?php echo form_error('alamat') ?></td>
                    <label for="alamat">Alamat : </label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $dsn['alamat']?>" >
                  </div>
                  <div class="form-group">
                    <td colspan="3"><?php echo form_error('telepon') ?></td>
                    <label for="telepon">Telepon : </label>
                    <input type="text" class="form-control" name="telepon" value="<?php echo $dsn['telepon']?>">
                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('username') ?></td>
                    <label for="username">username : </label>
                    <input type="text" class="form-control" name="username" value="<?php echo $dsn['username']?>">
                  </div>
                  <div class="form-group">
                     <td colspan="3"><?php echo form_error('password') ?></td>
                    <label for="password">Password : </label>
                    <input type="text" class="form-control" name="password" value="<?php echo $dsn['password']?>">
                  </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>

</div>
<!-- /.card -->