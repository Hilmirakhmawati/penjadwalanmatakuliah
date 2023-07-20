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
                        <form action="<?php echo base_url('C_Prodi/add') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('id_prodi') ?></td>
                                    </tr>
                                    <label for="id_prodi">Id Prodi : </label>
                                    <input type="text" class="form-control" name="id_prodi" placeholder="Id Prodi">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('nama_prodi') ?></td>
                                    </tr>
                                    <label for="nama_prodi">Nama Prodi : </label>
                                    <input type="text" class="form-control" name="nama_prodi" placeholder="Nama Prodi">
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