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
                        <form action="<?php echo base_url('C_Hari/add') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('id_hari') ?></td>
                                    </tr>
                                    <label for="id_hari">Id Hari : </label>
                                    <input type="text" class="form-control" name="id_hari" placeholder="Id Hari">
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td colspan="3"><?php echo form_error('nama_hari') ?></td>
                                    </tr>
                                    <label for="nama_hari">Nama Hari: </label> <br>
                                    <select name="nama_hari" class="form-control" placeholder="Pilih Hari">
                                        
                                        <option>Pilih Hari</option>
                                        <option>Senin</option>
                                        <option>Selasa</option>
                                        <option>Rabu</option>
                                        <option>Kamis</option>
                                        <option>Jumat</option>
                                        <option>Sabtu</option>

                                    </select>
                                    
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