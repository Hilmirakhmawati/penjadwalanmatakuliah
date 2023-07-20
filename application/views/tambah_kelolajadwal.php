<div class="container">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Jadwal</h3>
                        </div>
                        <form action="<?php echo base_url('C_Kelolajadwal/add') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_dosen">Dosen : </label>
                                    <?php echo form_error('nama_dosen')?>
                                        <select name="nama_dosen" class="form-control">
                                            <option value="">Pilih Dosen</option>
                                            <?php foreach ($dosen->result_array() as $key) { ?>
                                            <option value="<?php echo $key['nama_dosen']?>"><?php echo $key['nama_dosen']?></option>
                                            <?php } ?>
                                        </select>
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="kode_kelas">Kelas : </label>
                                    <?php echo form_error('kode_kelas')?>
                                    <select name="kode_kelas" class="form-control">
                                    <option value="">Pilih Kelas</option>
                                    <?php foreach ($kelas->result_array() as $key) { ?>
                                    <option value="<?php echo $key['kode_kelas']?>"><?php echo $key['kode_kelas']?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="nama_prodi">Prodi : </label>
                                    <?php echo form_error('prodi')?>
                                    <select name="nama_prodi" class="form-control">
                                    <option value="">Pilih Prodi</option>
                                    <?php foreach ($prodi->result_array() as $key) { ?>
                                    <option value="<?php echo $key['nama_prodi']?>"><?php echo $key['nama_prodi']?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="nama_matkul">Mata Kuliah : </label>
                                    <?php echo form_error('nama_matkul')?>
                                    <select name="nama_matkul" class="form-control">
                                    <option value="">Pilih Mata Kuliah</option>
                                    <?php foreach ($matkul->result_array() as $key) { ?>
                                    <option value="<?php echo $key['nama_matkul']?>"><?php echo $key['nama_matkul']?></option>
                                    <?php } ?>
                                    
                                    
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="hari">Hari : </label>
                                    <?php echo form_error('hari')?>
                                    <select name="hari" class="form-control">
                                    <option value="">Pilih Hari</option>
                                     <?php foreach ($waktuHari->result_array() as $key) { ?>
                                    <option value="<?php echo $key['hari']?>"><?php echo $key['hari']?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="waktu_mulai">Waktu Mulai: </label>
                                    <?php echo form_error('waktu_mulai')?>
                                    <select name="waktu_mulai" class="form-control">
                                    <option value="">Pilih Waktu</option>
                                    <?php foreach ($waktu->result_array() as $key) { ?>
                                    <option value="<?php echo $key['waktu_mulai']?>"><?php echo $key['hari'] ;echo " "; echo $key['waktu_mulai']?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="waktu_selesai">Waktu Selesai: </label>
                                    <?php echo form_error('waktu_selesai')?>
                                    <select name="waktu_selesai" class="form-control">
                                    <option value="">Pilih Waktu</option>
                                    <?php foreach ($waktu->result_array() as $key) { ?>
                                    <option value="<?php echo $key['waktu_selesai']?>"><?php echo $key['hari'] ;echo " "; echo $key['waktu_selesai']?></option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="proses">Tambahkan</a>
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