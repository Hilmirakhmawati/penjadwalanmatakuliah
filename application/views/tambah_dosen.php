<div class="container">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data</h3>
                        </div>
                        <form action="<?php echo base_url('C_Dosen/add') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('id_dosen') ?></td>
                                    </tr>
                                    <label for="id_dosen">Id Dosen : </label>
                                    <input type="text" class="form-control" name="id_dosen" placeholder="Id Dosen">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('nip') ?></td>
                                    </tr>
                                    <label for="nip">NIP : </label>
                                    <input type="text" class="form-control" name="nip" placeholder="NIP">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('nidn') ?></td>
                                    </tr>
                                    <label for="nidn">NIDN : </label>
                                    <input type="text" class="form-control" name="nidn" placeholder="NIDN">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('nama_dosen') ?></td>
                                    </tr>
                                    <label for="nama_dosen">Nama Dosen: </label>
                                    <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('alamat') ?></td>
                                    </tr>
                                    <label for="alamat">Alamat : </label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('telepon') ?></td>
                                    </tr>
                                    <label for="telepon">Telepon : </label>
                                    <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('username') ?></td>
                                    </tr>
                                    <label for="username">Username : </label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('password') ?></td>
                                    </tr>
                                    <label for="password">Password : </label>
                                    <input type="text" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="proses">Tambahkan</button>
                            </div>
                            <br>
                        </form>

                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>