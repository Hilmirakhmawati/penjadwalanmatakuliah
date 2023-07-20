<div class="container">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Kelas</h3>
                        </div>
                        <form action="<?php echo base_url('C_Kelas/add') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('id_kelas') ?></td>
                                    </tr>
                                    <label for="id_kelas">Id Kelas : </label>
                                    <input type="text" class="form-control" name="id_kelas" placeholder="Id Kelas">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('kode_kelas') ?></td>
                                    </tr>
                                    <label for="kode_kelas">Kode Kelas : </label>
                                    <input type="text" class="form-control" name="kode_kelas" placeholder="Kode Kelas">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('nama_ruangan') ?></td>
                                    </tr>
                                    <label for="nama_ruangan">Nama Ruangan : </label>
                                    <input type="text" class="form-control" name="nama_ruangan" placeholder="Nama Ruangan">
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