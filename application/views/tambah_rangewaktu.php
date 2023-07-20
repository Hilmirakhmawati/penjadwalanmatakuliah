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
                        <form action="<?php echo base_url('C_Rangewaktu/add') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('id_waktu') ?></td>
                                    </tr>
                                    <label for="id_waktu">Id Waktu : </label>
                                    <input type="text" class="form-control" name="id_waktu" placeholder="Id Waktu">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('waktu_mulai') ?></td>
                                    </tr>
                                    <label for="waktu_mulai">Waktu Mulai : </label>
                                    <input type="time" class="form-control" name="waktu_mulai" placeholder="Waktu Mulai">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('waktu_selesai') ?></td>
                                    </tr>
                                    <label for="waktu_selesai">Waktu Selesai : </label>
                                    <input type="time" class="form-control" name="waktu_selesai" placeholder="Waktu Selesai">
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